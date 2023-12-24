<?php
/*
 *	Template Name: Liên hệ
 */
get_header();
$theme_option = get_option('tuyendung-theme-options');
?>
<main id="page-content" class="page-content page-contact">
	<div class="background-page">
		<div class="background-radient-bottom"></div>
		<?php get_template_part('components/breadcrumb') ?>
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6">
					<h2 class="section-title">Địa chỉ</h2>
					<div class="contact-map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3724.377711565849!2d105.7800076259984!3d21.01756763816158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zVOG6p25nIDMgLSA0LCB0aMOhcCBBLCB0w7JhIG5ow6AgU8O0bmcgxJDDoCwgxJHGsOG7nW5nIFBo4bqhbSBIw7luZywgUC4gTeG7uSDEkMOsbmggMSwgUS4gTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaS4!5e0!3m2!1svi!2s!4v1703000715241!5m2!1svi!2s"
							width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<ul class="list-contact-info">
						<li class="item">
							<div class="img-icon">
								<img src="<?php echo THEME_URI; ?>/images/so-gps.svg" alt="">
							</div>
							<?php echo $theme_option['theme-address']; ?>
						</li>
						<li class="item">
							<div class="img-icon">
								<img src="<?php echo THEME_URI; ?>/images/so-calling.svg" alt="">
							</div>
							Điện thoại:
							<?php echo $theme_option['theme-numberphone1']; ?> -
							<?php echo $theme_option['theme-numberphone2']; ?>
						</li>
						<li class="item">
							<div class="img-icon">
								<img src="<?php echo THEME_URI; ?>/images/so-email.svg" alt="">
							</div>
							Email:
							<?php echo $theme_option['theme-email']; ?>
						</li>
						<li class="item">
							<div class="img-icon">
								<img src="<?php echo THEME_URI; ?>/images/so-clock.svg" alt="">
							</div>
							Giờ làm việc:
							<?php echo $theme_option['theme-time']; ?>
						</li>
					</ul>
				</div>
				<div class="col-md-6">
					<h2 class="section-title">Gửi thông tin liên hệ</h2>
					<form action="" class="form-contact">
						<div class="form-row">
							<div class="col-6 col-md-6 form-custom">
								<input type="text" name="fullname" class="form-control form-custom-item"
									placeholder="Họ tên" required>
							</div>
							<div class="col-6 col-md-6 form-custom">
								<input type="text" name="numberphone" class="form-control form-custom-item"
									placeholder="Số điện thoại" required>
							</div>
							<div class="col-md-12 form-custom">
								<input type="text" name="email" class="form-control form-custom-item"
									placeholder="Email" required>
							</div>
							<div class="col-md-12 form-custom">
								<textarea type="text" name="note" class="form-control form-custom-item"
									placeholder="Nội dung" rows="3"></textarea>
							</div>
							<button class="btn btn-submit">Gửi ngay</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();