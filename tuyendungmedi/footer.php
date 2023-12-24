<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuyendungmedi
 */

?>

	<footer id="page-footer" class="page-footer footer">
		<div class="background-radient-footer-l">
		</div>
		<div class="background-radient-footer-r">
		</div>
		<div class="container ">
			<div class="row">
				<div class="col-md-5 mb-3">
					<div class="footer-logo">
						<img src="<?php echo THEME_URI ?>/images/LogoMedinet.svg" alt="" />
					</div>
					<p class="footer-title">
						CÔNG TY TRUYỀN THÔNG SỐ 1 VỀ Y TẾ, SỨC KHỎE
					</p>
					<p class="footer-desc">
						Thành lập từ năm 2017, Medinet vươn mình mạnh mẽ trở thành đơn vị
						truyền thông hàng đầu về y tế, dược phẩm, mỹ phẩm, sức khỏe.
					</p>
					<p class="text-green">
						Lựa chọn Medinet chính là lựa chọn môi trường làm việc tuyệt vời
						nhất
					</p>
				</div>
				<div class="col-md-4  mb-3">
					<p class="footer-title-col">Trụ sở chính:</p>
					<ul class="footer-list-info">
						<li class="item">
							<img src="<?php echo THEME_URI ?>/images/so-gps.svg" alt="" />Tầng 3 - 4, tháp A, tòa
							nhà Sông Đà, đường Phạm Hùng, P. Mỹ Đình 1, Q. Nam Từ Liêm, Hà
							Nội.
						</li>
						<li class="item">
							<img src="<?php echo THEME_URI ?>/images/so-calling.svg" alt="" />Hotline: 0988.638.469
						</li>
					</ul>
				</div>
				<div class="col-md-3  mb-3">
					<p class="footer-title-col">Kết nối với chúng tôi:</p>
					<ul class="footer-social">
						<li class="item face">
							<span class="tooltip">Facebook</span>
							<a href="#" class="footer-icon">
								<img src="<?php echo THEME_URI ?>/images/icon-fac.svg" alt="">
							</a>
						</li>
						<li class="item you">
						<span class="tooltip">youtube</span>
							<a href="#" class="footer-icon">
								<img src="<?php echo THEME_URI ?>/images/icon-you.svg" alt="">
							</a>
						</li>
						<li class="item tik">
						<span class="tooltip">Tiktok</span>
							<a href="#" class="footer-icon">
								<img src="<?php echo THEME_URI ?>/images/icon-tiktok.svg" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="cta d-none d-md-block">
		<div class="cta-list">
			<li class="item"><a href="" class="cta-item"><img src="<?php echo THEME_URI ?>/images/cta-phone.png" alt=""></a></li>
			<li class="item"><a href="" class="cta-item"><img src="<?php echo THEME_URI ?>/images/cta-mess.png" alt=""></a></li>
			<li class="item"><a href="" class="cta-link">Xem JD <img src="<?php echo THEME_URI ?>/images/right-lg.svg" alt=""></a></li>
		</div>
	</div>
	<?php get_template_part('components/modal-success') ?>
	<div class="banner-gim">
		<img src="<?php echo THEME_URI ?>/images/BannerGhim.png" alt="" class="d-none d-md-block">
		<img src="<?php echo THEME_URI ?>/images/BannerGhimMb.png" alt="" class="d-block d-md-none">
		<a href="#" class="btn-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
