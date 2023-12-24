<?php
global $post;
$date_creatpost = get_the_time('d/m/Y', $post->ID);
$datetime       = new DateTime($str);
$week           = array("Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy");
$w              = (int) $datetime->format('w');
$day_of_week    = $week[$w];
?>
<div class="page-meta-top">
	<span><?php echo $day_of_week; ?>, <?php echo $date_creatpost; ?></span>
</div>