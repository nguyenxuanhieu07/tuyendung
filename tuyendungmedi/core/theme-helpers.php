<?php
/**
 * Short title theme
 */
if (!function_exists('theme_short_title')) {
	function theme_short_title($number_word = 15)
	{
		$title = get_the_title();
		return wp_trim_words($title, $number_word);
	}
}

/**
 * Short content theme
 */
if (!function_exists('theme_short_content')) {
	function theme_short_content($content = '', $number_word = 20)
	{
		if (!$content) {
			$content = get_the_content();
		}
		return wp_trim_words($content, $number_word);
	}
}

if (!function_exists('formattitle')) {
	function formattitle($title, $number_start = 0, $number_end = 0)
	{
		$array_text = explode(' ', $title);
		if ($number_start)
			$array_text[$number_start - 1] = '<span>' . $array_text[$number_start - 1];
		if ($number_end)
			$array_text[$number_end - 1] = $array_text[$number_end - 1] . '</span>';
		return implode(' ', $array_text);
	}

}
function compare_date($date){
	$today = date('d-m-Y');
	if(strtotime(str_replace('/', '-', $date)) > strtotime($today)){
		return true;
	}
	return false;
}
function format_title_content($str) {
	$formattedString = strtolower($str);
    $str = iconv('UTF-8', 'ASCII//TRANSLIT', $formattedString);
    return $str;
}
function create_folder_upload(){
	$uploads_dir = wp_upload_dir();
	$current_month_year = date('Y/m');
	$new_folder_path = $uploads_dir['basedir'] . '/cv'.'/' . $current_month_year;
	if (!file_exists($new_folder_path)) {
		wp_mkdir_p($new_folder_path);
	}
	return array(
		'dir' => $new_folder_path,
		'url' => $uploads_dir['baseurl']. '/cv'.'/' . $current_month_year
	);
}
function form_email($email,$name){
	$to = $email;
	$subject = 'Thông báo !!';
	ob_start();
	?>
		<p>Xin chào bạn <?php echo $name; ?></p>
		<p>Rất vui khi bạn đã dành thời gian tìm hiểu về vị trí tuyển dụng nhà Medinet và quyết định chọn chúng mình là điểm đến. Để có thời gian đánh giá hồ sơ của bạn chi tiết hơn, Medinet sẽ sớm phản hồi cho bạn trong vòng 1-3 ngày tới, ngay khi có kết quả của vòng loại. </p>
		<p>Lưu ý nho nhỏ: Medinet xin phép chỉ liên hệ cho những ứng viên có hồ sơ phù hợp với vị trí này. Trường hợp bạn không nhận được thêm email phản hồi hoặc liên hệ từ Phòng HCNS thì đồng nghĩa với việc CV của bạn chưa phù hợp trong thời điểm hiện tại và chúng mình sẽ lưu hồ sơ của bạn tại danh sách <b>ỨNG VIÊN ƯU TIÊN</b> để có thể liên hệ, giới thiệu những cơ hội mới.   </p>
		<p>Chúc bạn có một ngày tốt lành, hãy kiểm tra email thường xuyên để biết thông tin kịp thời nhé. Bạn có thể Follow thêm các kênh cập nhật tin tức tuyển dụng của Medinet tại đây: </p>
		<p>Website: <a href="https://medinetgroup.vn/">https://medinetgroup.vn/</a></p>
		<p>Fanpage: <a href=" https://www.facebook.com/medinetgroup">https://www.facebook.com/medinetgroup</a></p>
		<p>Tiktok:	<a href="https://www.tiktok.com/@dilamcungkeng">https://www.tiktok.com/@dilamcungkeng</a></p>
		<p>Trân trọng!</p>
		
	<?php
	$message = ob_get_clean();
	$headers = array('Content-Type: text/html; charset=UTF-8');
	wp_mail($to, $subject, $message, $headers);
}

if (!function_exists('theme_theme_pagination')) {
	function theme_theme_pagination()
	{
		?>
		<div class="pagination-nav">
			<ul class="pagination" role="navigation">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links(
					array(
						'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format'    => '?paged=%#%',
						'prev_text' => __('« Trang trước'),
						'next_text' => __('Trang sau »'),
						'current'   => max(1, get_query_var('paged')),
						'total'     => $wp_query->max_num_pages,
					));
				?>
			</ul>
		</div>
		<?php
	}
}