var slide_page={
	init: function() {
		//homepage
		slide_page.home_list_images();
		slide_page.home_feel_big();
		slide_page.home_feel_small();
		slide_page.environment_list_img2();
		slide_page.home_history_full();
		slide_page.history_img();
		//page
		slide_page.list_recruitment();
		slide_page.list_recruiting();
		slide_page.list_img_treatment();
		slide_page.list_department_top();
		slide_page.list_department_bottom();
		slide_page.environment_list_img();
		slide_page.culture_list_img();
		slide_page.communications_list();
		slide_page.list_youtube_bottom();
		slide_page.list_tiktok();
		slide_page.list_post_releated();
	},
	home_list_images: function() {
		var list_slide=$('.home-introduce .list-images');
		var items=$('.home-introduce .list-images .item');
		if(list_slide.length>0&&items.length>0) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				variableWidth: true,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							variableWidth: true,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	list_recruitment: function() {
		var list_slide=$('.prominent-location .list-recruitment');
		var items=$('.prominent-location .list-recruitment .item');
		if(list_slide.length>0&&items.length>4) {
			list_slide.slick({
				dots: true,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 4,
				slidesToScroll: 4,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1.5,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	list_recruiting: function() {
		var list_slide=$('.recruiting .list-recruiting');
		var items=$('.recruiting .list-recruiting .item');
		if(list_slide.length>0&&items.length>1) {
			list_slide.slick({
				dots: true,
				arrow: false,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	list_img_treatment: function() {
		var list_slide=$('.treatment .list-img-treatment');
		var items=$('.treatment .list-img-treatment .item');
		if(list_slide.length>0&&items.length>1) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	list_department_top: function() {
		var list_slide=$('.list-department-top');
		var items=$('.list-department-top .item');
		if(list_slide.length>0&&items.length>1) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				fade: true,
				asNavFor: '.list-department-bottom',
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	list_department_bottom: function() {
		var list_slide=$('.list-department-bottom');
		var items=$('.list-department-bottom .item');
		if(list_slide.length>0&&items.length>4) {
			list_slide.slick({
				dots: false,
				arrow: false,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 4,
				slidesToScroll: 1,
				asNavFor: '.list-department-top',
				focusOnSelect: true,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	environment_list_img: function() {
		var list_slide=$(document).find('.environment-list-img');
		var items=list_slide.find('.item');
		if(list_slide.length>0&&items.length>3) {
			list_slide.not('.slick-initialized').slick({
				dots: true,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 3,
				slidesToScroll: 3,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	culture_list_img: function() {
		var list_slide=$(document).find('.culture-list-img');
		var items=list_slide.find('.item');
		if(list_slide.length>0&&items.length>2) {
			list_slide.not('.slick-initialized').slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1.5,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	communications_list: function() {
		var list_slide=$('.communications-list');
		var items=$('.communications-list .item');
		if(list_slide.length>0&&items.length>2) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1.5,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	list_youtube_bottom: function() {
		var list_slide=$('.list-youtube-top');
		var items=$('.list-youtube-top .post');
		if(list_slide.length>0&&items.length>3) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	list_tiktok: function() {
		var list_slide=$('.list-tiktok');
		var items=$('.list-tiktok .item');
		if(list_slide.length>0&&items.length>2) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1.5,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	home_feel_big: function() {
		var list_slide=$('.list-staff-big');
		var items=$('.list-staff-big .inner');
		if(list_slide.length>0&&items.length>1) {
			list_slide.slick({
				dots: false,
				arrow: false,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				fade: true,
				asNavFor: '.list-staff-small',
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	home_feel_small: function() {
		var list_slide=$('.list-staff-small');
		var items=$('.list-staff-small .inner');
		if(list_slide.length>0&&items.length>3) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				vertical: true,
				asNavFor: '.list-staff-big',
				focusOnSelect: true,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	home_history_full: function() {
		var list_slide=$('.home-history .history-full');
		var items=$('.home-history .history-full .inner');
		if(list_slide.length>0&&items.length>1) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1,
				fade: true,
				asNavFor: '.history-img',
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false,
							centerMode: false,
							arrows: true,
						},
					},
				],
			});
		}
	},
	history_img: function() {
		var list_slide=$('.history-img');
		var items=$('.history-img .inner');
		if(list_slide.length>0&&items.length>1) {
			list_slide.slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 4,
				slidesToScroll: 1,
				variableWidth: true,
				asNavFor: '.history-full',
				focusOnSelect: true,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	environment_list_img2: function() {
		var list_slide=$(document).find('.environment-list-img2');
		var items=list_slide.find('.item');
		if(list_slide.length>0&&items.length>4) {
			list_slide.not('.slick-initialized').slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 4,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1.5,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
	list_post_releated: function() {
		var list_slide=$(document).find('.list-post-releated');
		var items=list_slide.find('.post');
		if(list_slide.length>0&&items.length>4) {
			list_slide.not('.slick-initialized').slick({
				dots: false,
				arrow: true,
				speed: 1000,
				// autoplay: true,
				autoplaySpeed: 3000,
				slidesToShow: 4,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							centerMode: false,
							arrows: false,
						},
					},
				],
			});
		}
	},
};
var smoothScroll={
	init: function() {
		$(".smoothScroll").click(function() {
			if(
				location.pathname.replace(/^\//,"")==
				this.pathname.replace(/^\//,"")&&
				location.hostname==this.hostname
			) {
				var target=$(this.hash);
				target=target.length
					? target
					:$("[name="+this.hash.slice(1)+"]");
				$(".list-title .item").removeClass("active");
				$('a[href="'+this.hash+'"]')
					.parent()
					.addClass("active");
				if(target.length) {
					console.log(target.offset().top)
					$("html,body").animate(
						{
							scrollTop: target.offset().top,
						},
						1000
					);
					return false;
				}
			}
		});
	},
};
var show_more_in_banner={
	init: function() {
		var item=$('.btn-show-more');
		if(item.length>0) {
			item.on('click',function() {
				var content=$(this).parent().find('.banner-desc');
				content.toggleClass('show-desc');
				if(content.hasClass('show-desc')) {
					$(this).empty();
					$(this).html('<i class="fa fa-angle-double-up" aria-hidden="true"></i>');
				} else {
					$(this).empty();
					$(this).html('<i class="fa fa-angle-double-down" aria-hidden="true"></i>');
				}
				return false;
			});
		}
	}
}
var page_function_other={
	init: function() {
		page_function_other.show_menu_mb();
		page_function_other.scroll_show_hide_header();
		page_function_other.change_tab();
		page_function_other.banner_gim();
	},
	show_menu_mb: function() {
		var btn_menu=$('.menu-mb');
		if(btn_menu.length>0) {
			btn_menu.on('click',function() {
				$('.header-menu #primary-nav-collapse').toggleClass('show');
				$('.header-menu ').toggleClass('show-menu');
				$(this).find('i').toggleClass('fa-bars');
				$(this).find('i').toggleClass('fa-times');
				return false;
			});
		}
	},
	scroll_show_hide_header: function() {
		var previousScroll=0;
		$(window).scroll(function() {
			var currentScroll=$(this).scrollTop();
			if(currentScroll==0) $('.header-top').show();
			if(currentScroll>previousScroll) {
				$(".header-sticky").addClass("menu-hidden");
				$('.header-menu #primary-nav-collapse').removeClass("show");
				$('.menu-mb').find('i').addClass('fa-bars');
				$('.menu-mb').find('i').removeClass('fa-times');
				$('.header-top').hide();
			} else {
				$(".header-sticky").removeClass("menu-hidden");
			}
			previousScroll=currentScroll;
		});
	},
	change_tab: function() {
		var btn_tab=$('.list-tab .btn-tab');
		if(btn_tab.length>0) {
			btn_tab.on('click',function() {
				btn_tab.removeClass('active');
				$(this).addClass('active');
				var tab=$(this).data('content');
				$(this).parents('.tab-environment').find('.tab-content-item').siblings().removeClass('active');
				$(this).parents('.tab-environment').find('#'+tab).addClass('active');
				if($(this).parents('.tab-environment').find('#'+tab).find('.environment-list-img').length>0) {
					$(this).parents('.tab-environment').find('#'+tab).find('.environment-list-img').slick('unslick');
					slide_page.environment_list_img();
				}
				if($(this).parents('.tab-environment').find('#'+tab).find('.culture-list-img').length>0) {
					$(this).parents('.tab-environment').find('#'+tab).find('.culture-list-img').slick('unslick');
					slide_page.culture_list_img();
				}
				if($(this).parents('.tab-environment').find('#'+tab).find('.environment-list-img2').length>0) {
					$(this).parents('.tab-environment').find('#'+tab).find('.environment-list-img2').slick('unslick');
					slide_page.environment_list_img2();
				}
				return false;
			});
		}
	},
	banner_gim: function() {
		setInterval(function() {
			if($(document).find('#modalform').length>0&&!$(document).find('#modalform').hasClass('show')) {
				//$(document).find('#modalform').modal('show');
			}
		},1000);
		setTimeout(function() {
			if($(document).find('.banner-gim').length>0&&!$(document).find('.banner-gim').hasClass('show')) {
				$(document).find('.banner-gim').addClass('show');
			}
		},3000);
		jQuery(document).on('click','.btn-hide',function() {
			$(document).find('.banner-gim').toggleClass('show');
			return false;
		})
	},
}
var form_submit={
	init: function() {
		form_submit.form_apply_job();
		form_submit.input_upload();
		form_submit.form_contact();
	},
	input_upload: function() {
		if($('.inputcv').length>0) {
			$('.inputcv').on('click',function() {
				$('.uploadcv').click();
			});
		}
		if($('.uploadcv').length>0) {
			$('.uploadcv').on('change',function() {
				var fileName=$(this)[0].files[0].name;
				$('.inputcv').val(fileName);
			});
		}
	},
	form_apply_job: function() {
		var form_checkout=$('.form-recruitment');
		if(form_checkout.length>0) {
			form_checkout.on('submit',function() {
				var container=$(this);
				form_submit.send_data_form(container);
				return false;
			})
		}
	},
	form_contact: function() {
		var form_contact=$('.form-contact');
		if(form_contact.length>0) {
			form_contact.on('submit',function() {
				var container=$(this);
				form_submit.send_data_form(container);
				return false;
			})
		}
	},
	send_data_form: function(container) {
		var form_data=new FormData();
		var fullname=$(container).find('[name="fullname"]').val(),
			numberphone=$(container).find('[name="numberphone"]').val(),
			email=$(container).find('[name="email"]').val(),
			note=$(container).find('[name="note"]').val(),
			job=$(container).find('[name="job"]').val(),
			cv=$(container).find('[name="cv"]')[0].files[0],
			data_url=window.location.href,
			referer=document.referrer;
		if(job&&cv) {
			form_data.append('job',job);
			form_data.append('cv',cv);
		}
		form_data.append('fullname',fullname);
		form_data.append('numberphone',numberphone);
		form_data.append('email',email);
		form_data.append('note',note);
		form_data.append('data_url',data_url);
		form_data.append('referer',referer);
		form_data.append('action','form_data');
		$.ajax({
			url: vmajax.ajaxurl,
			data: form_data,
			type: "POST",
			dataType: "html",
			cache: false,
			contentType: false,
			processData: false,
			statusCode: {
				0: function(result) {
					$(container).closest('form').find("input[type=text],input[type=email], textarea").val("");
					$(container).find('button').attr('disabled','disabled');
				},
				200: function() {
					$(container).closest('form').find("input[type=text], textarea").val("");
					$(container).find('button').attr('disabled','disabled');
					$('#modalsucsses').modal('show');
					setTimeout(function() {
						$('#modalsucsses').modal('hide');
					},3000);
				}
			}
		});
	}
}
jQuery(document).ready(function() {
	slide_page.init();
	smoothScroll.init();
	show_more_in_banner.init();
	page_function_other.init();
	form_submit.init();
});