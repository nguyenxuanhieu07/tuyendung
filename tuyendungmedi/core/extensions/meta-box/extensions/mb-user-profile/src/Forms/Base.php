<?php
namespace MBUP\Forms;

use MBUP\Helpers;
use MBUP\Error;
use MBUP\ConfigStorage;

abstract class Base {
	protected $meta_boxes;
	protected $config;
	protected $user;

	/**
	 * Constructor.
	 *
	 * @param array      $meta_boxes Meta box array.
	 * @param \MBUP\User $user       User object.
	 * @param array      $config     Form configuration.
	 */
	public function __construct( $meta_boxes, $user, $config ) {
		$this->meta_boxes = array_filter( $meta_boxes );
		$this->user       = $user;
		$this->config     = $config;
	}

	public function render() {
		if ( ! $this->has_privilege() ) {
			return;
		}

		$this->enqueue();

		if ( $this->is_processed() ) {
			do_action( 'rwmb_profile_before_display_confirmation', $this->config );
			$this->display_confirmation();
			do_action( 'rwmb_profile_after_display_confirmation', $this->config );

			if ( get_class( $this ) !== __NAMESPACE__ . '\Info' ) {
				return;
			}
		}

		$this->display_errors();

		do_action( 'rwmb_profile_before_form', $this->config );

		echo '<form class="rwmb-form" method="post" enctype="multipart/form-data" encoding="multipart/form-data" id="' . esc_html( $this->config['form_id'] ) . '">';
		$this->render_hidden_fields();

		// Register wp color picker scripts for frontend.
		$this->register_scripts();
		wp_localize_jquery_ui_datepicker();

		foreach ( $this->meta_boxes as $meta_box ) {
			$meta_box->enqueue();
			$meta_box->show();
		}

		do_action( 'rwmb_profile_before_submit_button', $this->config );
		$this->submit_button();
		do_action( 'rwmb_profile_after_submit_button', $this->config );

		echo '</form>';

		do_action( 'rwmb_profile_after_form', $this->config );
	}

	/**
	 * Process the form.
	 * Meta box auto hooks to 'save_post' action to save its data, so we only need to save the post.
	 *
	 * @return int User ID.
	 */
	public function process() {
		Error::clear();

		$is_valid = true;
		foreach ( $this->meta_boxes as $meta_box ) {
			$is_valid = $is_valid && $meta_box->validate();
		}

		$is_valid = apply_filters( 'rwmb_profile_validate', $is_valid, $this->config );

		if ( ! $is_valid ) {
			Error::set( __( 'Invalid form submit.', 'mb-user-profile' ) );
			return null;
		}

		do_action( 'rwmb_profile_before_process', $this->config );
		$user_id = $this->user->save();
		do_action( 'rwmb_profile_after_process', $this->config, $user_id );

		return $user_id;
	}

	protected function has_privilege() {
		return true;
	}

	protected function display_errors() {
		if ( Error::has() ) {
			Error::show();
			Error::clear();
		}
	}

	protected function submit_button() {
	}

	protected function register_scripts() {
		if ( wp_script_is( 'wp-color-picker', 'registered' ) ) {
			return;
		}
		wp_register_script( 'iris', admin_url( 'js/iris.min.js' ), [
			'jquery-ui-draggable',
			'jquery-ui-slider',
			'jquery-touch-punch',
		], '1.0.7', true );
		wp_register_script( 'wp-color-picker', admin_url( 'js/color-picker.min.js' ), ['iris'], '', true );
		wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', [
			'clear'            => __( 'Clear', 'mb-user-profile' ),
			'clearAriaLabel'   => __( 'Clear color', 'mb-user-profile' ),
			'defaultString'    => __( 'Default', 'mb-user-profile' ),
			'defaultAriaLabel' => __( 'Select default color', 'mb-user-profile' ),
			'pick'             => __( 'Select Color', 'mb-user-profile' ),
			'defaultLabel'     => __( 'Color value', 'mb-user-profile' ),
		] );
	}

	protected function enqueue() {
		wp_enqueue_style( 'mbup-form', MB_USER_PROFILE_URL . 'assets/user-profile.css', [], '1.4.3' );

		if ( ! isset( $this->config['password_strength'] ) || 'false' === $this->config['password_strength'] ) {
			return;
		}
		wp_enqueue_script( 'mbup-password-strength', MB_USER_PROFILE_URL . 'assets/password-strength.js', ['jquery', 'password-strength-meter'], '1.4.3', true );
		wp_localize_script( 'mbup-password-strength', 'MBUP_Password', [
			'very-weak' => __( 'Very weak', 'mb-user-profile' ),
			'weak'      => __( 'Weak', 'mb-user-profile' ),
			'medium'    => _x( 'Medium', 'password strength', 'mb-user-profile' ),
			'strong'    => __( 'Strong', 'mb-user-profile' ),
			'mismatch'  => __( 'Mismatch', 'mb-user-profile' ),
			'strength'  => $this->config['password_strength'],
		] );
	}

	protected function render_hidden_fields() {
		$key = ConfigStorage::store( $this->config );
		echo '<input type="hidden" name="rwmb_form_config" value="', esc_attr( $key ), '">';
	}

	protected function is_processed() {
		return 'success' === filter_input( INPUT_GET, 'rwmb-form-submitted' );
	}

	protected function display_confirmation() {
		if ( ! $this->config['confirmation'] ) {
			return;
		}
		?>
		<div class="rwmb-confirmation"><?= wp_kses_post( $this->config['confirmation'] ); ?></div>
		<?php
	}
}
