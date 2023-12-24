<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tuyendungmedi
 */

get_header();
?>

	<main class="page-404">
		<div class="container">
			<div class="text-center img-404">
				<img src="<?php echo THEME_URI; ?>/images/404.gif" alt="">
			</div>
			<p class="text-center text-404">Lỗi 404! Không tìm thấy trang bạn yêu cầu !!</p>
			<a href="" class="btn-link">Quay lại trang chủ</a>
		</div>
	</main>

<?php
get_footer();
