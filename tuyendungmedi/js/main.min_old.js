var slide_page={init:function(){slide_page.home_list_images(),slide_page.home_feel_big(),slide_page.home_feel_small(),slide_page.environment_list_img2(),slide_page.home_history_full(),slide_page.history_img(),slide_page.list_recruitment(),slide_page.list_recruiting(),slide_page.list_img_treatment(),slide_page.list_department_top(),slide_page.list_department_bottom(),slide_page.environment_list_img(),slide_page.culture_list_img(),slide_page.communications_list(),slide_page.list_youtube_bottom(),slide_page.list_tiktok(),slide_page.list_post_releated()},home_list_images:function(){var e=$(".home-introduce .list-images"),t=$(".home-introduce .list-images .item");e.length>0&&t.length>0&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,variableWidth:!0,responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,variableWidth:!0,infinite:!0,dots:!0,centerMode:!1,arrows:!0}}]})},list_recruitment:function(){var e=$(".prominent-location .list-recruitment"),t=$(".prominent-location .list-recruitment .item");e.length>0&&t.length>4&&e.slick({dots:!0,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:575,settings:{slidesToShow:1.5,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!0}}]})},list_recruiting:function(){var e=$(".recruiting .list-recruiting"),t=$(".recruiting .list-recruiting .item");e.length>0&&t.length>1&&e.slick({dots:!0,arrow:!1,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})},list_img_treatment:function(){var e=$(".treatment .list-img-treatment"),t=$(".treatment .list-img-treatment .item");e.length>0&&t.length>1&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!0}}]})},list_department_top:function(){var e=$(".list-department-top"),t=$(".list-department-top .item");e.length>0&&t.length>1&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,fade:!0,asNavFor:".list-department-bottom",responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!0}}]})},list_department_bottom:function(){var e=$(".list-department-bottom"),t=$(".list-department-bottom .item");e.length>0&&t.length>4&&e.slick({dots:!1,arrow:!1,speed:1e3,autoplaySpeed:3e3,slidesToShow:4,slidesToScroll:1,asNavFor:".list-department-top",focusOnSelect:!0,responsive:[{breakpoint:575,settings:{slidesToShow:4,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!1}}]})},environment_list_img:function(){var e=$(document).find(".environment-list-img"),t=e.find(".item");e.length>0&&t.length>3&&e.not(".slick-initialized").slick({dots:!0,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})},culture_list_img:function(){var e=$(document).find(".culture-list-img"),t=e.find(".item");e.length>0&&t.length>2&&e.not(".slick-initialized").slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:2,slidesToScroll:2,responsive:[{breakpoint:575,settings:{slidesToShow:1.5,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})},communications_list:function(){var e=$(".communications-list"),t=$(".communications-list .item");e.length>0&&t.length>2&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:2,slidesToScroll:2,responsive:[{breakpoint:575,settings:{slidesToShow:1.5,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})},list_youtube_bottom:function(){var e=$(".list-youtube-top"),t=$(".list-youtube-top .post");e.length>0&&t.length>3&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!0}}]})},list_tiktok:function(){var e=$(".list-tiktok"),t=$(".list-tiktok .item");e.length>0&&t.length>2&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:2,slidesToScroll:2,responsive:[{breakpoint:575,settings:{slidesToShow:1.5,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!1}}]})},home_feel_big:function(){var e=$(".list-staff-big"),t=$(".list-staff-big .inner");e.length>0&&t.length>1&&e.slick({dots:!1,arrow:!1,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,fade:!0,asNavFor:".list-staff-small",responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!1}}]})},home_feel_small:function(){var e=$(".list-staff-small"),t=$(".list-staff-small .inner");e.length>0&&t.length>3&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,vertical:!0,asNavFor:".list-staff-big",focusOnSelect:!0,responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!0}}]})},home_history_full:function(){var e=$(".home-history .history-full"),t=$(".home-history .history-full .inner");e.length>0&&t.length>1&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:1,slidesToScroll:1,fade:!0,asNavFor:".history-img",responsive:[{breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,centerMode:!1,arrows:!0}}]})},history_img:function(){var e=$(".history-img"),t=$(".history-img .inner");e.length>0&&t.length>1&&e.slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:4,slidesToScroll:1,variableWidth:!0,asNavFor:".history-full",focusOnSelect:!0,responsive:[{breakpoint:575,settings:{slidesToShow:4,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})},environment_list_img2:function(){var e=$(document).find(".environment-list-img2"),t=e.find(".item");e.length>0&&t.length>4&&e.not(".slick-initialized").slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:575,settings:{slidesToShow:1.5,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})},list_post_releated:function(){var e=$(document).find(".list-post-releated"),t=e.find(".post");e.length>0&&t.length>4&&e.not(".slick-initialized").slick({dots:!1,arrow:!0,speed:1e3,autoplaySpeed:3e3,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:575,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!0,centerMode:!1,arrows:!1}}]})}},smoothScroll={init:function(){$(".smoothScroll").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),$(".list-title .item").removeClass("active"),$('a[href="'+this.hash+'"]').parent().addClass("active"),e.length)return console.log(e.offset().top),$("html,body").animate({scrollTop:e.offset().top},1e3),!1}})}},show_more_in_banner={init:function(){var e=$(".btn-show-more");e.length>0&&e.on("click",function(){var e=$(this).parent().find(".banner-desc");return e.toggleClass("show-desc"),e.hasClass("show-desc")?($(this).empty(),$(this).html('<i class="fa fa-angle-double-up" aria-hidden="true"></i>')):($(this).empty(),$(this).html('<i class="fa fa-angle-double-down" aria-hidden="true"></i>')),!1})}},page_function_other={init:function(){page_function_other.show_menu_mb(),page_function_other.scroll_show_hide_header(),page_function_other.change_tab(),page_function_other.banner_gim()},show_menu_mb:function(){var e=$(".menu-mb");e.length>0&&e.on("click",function(){return $(".header-menu #primary-nav-collapse").toggleClass("show"),$(".header-menu ").toggleClass("show-menu"),$(this).find("i").toggleClass("fa-bars"),$(this).find("i").toggleClass("fa-times"),!1})},scroll_show_hide_header:function(){var e=0;$(window).scroll(function(){var t=$(this).scrollTop();0==t&&$(".header-top").show(),t>e?($(".header-sticky").addClass("menu-hidden"),$(".header-menu #primary-nav-collapse").removeClass("show"),$(".menu-mb").find("i").addClass("fa-bars"),$(".menu-mb").find("i").removeClass("fa-times"),$(".header-top").hide()):$(".header-sticky").removeClass("menu-hidden"),e=t})},change_tab:function(){var e=$(".list-tab .btn-tab");e.length>0&&e.on("click",function(){e.removeClass("active"),$(this).addClass("active");var t=$(this).data("content");return $(this).parents(".tab-environment").find(".tab-content-item").siblings().removeClass("active"),$(this).parents(".tab-environment").find("#"+t).addClass("active"),$(this).parents(".tab-environment").find("#"+t).find(".environment-list-img").length>0&&($(this).parents(".tab-environment").find("#"+t).find(".environment-list-img").slick("unslick"),slide_page.environment_list_img()),$(this).parents(".tab-environment").find("#"+t).find(".culture-list-img").length>0&&($(this).parents(".tab-environment").find("#"+t).find(".culture-list-img").slick("unslick"),slide_page.culture_list_img()),$(this).parents(".tab-environment").find("#"+t).find(".environment-list-img2").length>0&&($(this).parents(".tab-environment").find("#"+t).find(".environment-list-img2").slick("unslick"),slide_page.environment_list_img2()),!1})},banner_gim:function(){setInterval(function(){$(document).find("#modalform").length>0&&!$(document).find("#modalform").hasClass("show")},1e3),setTimeout(function(){$(document).find(".banner-gim").length>0&&!$(document).find(".banner-gim").hasClass("show")},3e3),jQuery(document).on("click",".btn-remove",function(){return $(document).find(".banner-gim").toggleClass("show"),!1})}},form_submit={init:function(){form_submit.form_apply_job(),form_submit.input_upload(),form_submit.form_contact()},input_upload:function(){$(".inputcv").length>0&&$(".inputcv").on("click",function(){$(".uploadcv").click()}),$(".uploadcv").length>0&&$(".uploadcv").on("change",function(){var e=$(this)[0].files[0].name;$(".inputcv").val(e)})},form_apply_job:function(){var e=$(".form-recruitment");e.length>0&&e.on("submit",function(){var e=$(this);return form_submit.send_data_form(e),!1})},form_contact:function(){var e=$(".form-contact");e.length>0&&e.on("submit",function(){var e=$(this);return form_submit.send_data_form(e),!1})},send_data_form:function(e){var t=new FormData,i=$(e).find('[name="fullname"]').val(),s=$(e).find('[name="numberphone"]').val(),o=$(e).find('[name="email"]').val(),n=$(e).find('[name="note"]').val(),l=$(e).find('[name="job"]').val(),a=$(e).find('[name="cv"]')[0].files[0],r=window.location.href,d=document.referrer;l&&a&&(t.append("job",l),t.append("cv",a)),t.append("fullname",i),t.append("numberphone",s),t.append("email",o),t.append("note",n),t.append("data_url",r),t.append("referer",d),t.append("action","form_data"),$.ajax({url:vmajax.ajaxurl,data:t,type:"POST",dataType:"html",cache:!1,contentType:!1,processData:!1,statusCode:{0:function(t){$(e).closest("form").find("input[type=text],input[type=email], textarea").val(""),$(e).find("button").attr("disabled","disabled")},200:function(){$(e).closest("form").find("input[type=text], textarea").val(""),$(e).find("button").attr("disabled","disabled"),$("#modalsucsses").modal("show"),setTimeout(function(){$("#modalsucsses").modal("hide")},3e3)}}})}};jQuery(document).ready(function(){slide_page.init(),smoothScroll.init(),show_more_in_banner.init(),page_function_other.init(),form_submit.init()});