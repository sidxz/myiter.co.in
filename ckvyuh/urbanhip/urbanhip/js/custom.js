VideoJS.setupAllWhenReady();

jQuery.noConflict();

jQuery(document).ready(function($) {
	jQuery("#sidebar_content .widget:last-child").css('margin-bottom','20px');
	jQuery(".home #sidebar_content .widget:last-child").css('margin-bottom','0px');

	jQuery(".tabs_container").each(function(){
		jQuery("ul.tabs",this).tabs("div.panes > div", {tabs:'li',effect: 'fade', fadeOutSpeed: -400});
	});
	jQuery(".mini_tabs_container").each(function(){
		jQuery("ul.mini_tabs",this).tabs("div.panes > div", {tabs:'li',effect: 'fade', fadeOutSpeed: -400});
	});
	jQuery.tools.tabs.addEffect("slide", function(i, done) {
		this.getPanes().slideUp();
		this.getPanes().eq(i).slideDown(function()  {
			done.call();
		});
	});
	jQuery(".accordion").tabs("div.pane", {tabs: '.tab', effect: 'slide'});
	jQuery(".toggle_title").toggle(
		function(){
			jQuery(this).addClass('toggle_active');
			jQuery(this).siblings('.toggle_content').slideDown("fast");
		},
		function(){
			jQuery(this).removeClass('toggle_active');
			jQuery(this).siblings('.toggle_content').slideUp("fast");
		}
	);
	
	/* enable lightbox */
	var enable_lightbox = function(parent){
		
		jQuery("a.lightbox[href*='http://www.vimeo.com/']",parent).each(function() {
			jQuery(this).attr('href',this.href.replace("www.vimeo.com/", "player.vimeo.com/video/"));
		});
		jQuery("a.lightbox[href*='http://vimeo.com/']",parent).each(function() {
			jQuery(this).attr('href',this.href.replace("vimeo.com/", "player.vimeo.com/video/"));
		});
		jQuery("a.lightbox[href*='http://www.youtube.com/watch?']",parent).each(function() {
			jQuery(this).attr('href',this.href.replace(new RegExp("watch\\?v=", "i"), "v/"));
		});
		jQuery("a.lightbox[href*='http://player.vimeo.com/']",parent).each(function() {
			jQuery(this).addClass("fancyVimeo").removeClass('lightbox');
		});
		jQuery("a.lightbox[href*='http://www.youtube.com/v/']",parent).each(function() {
			jQuery(this).addClass("fancyVideo").removeClass('lightbox');
		});
		jQuery("a.lightbox[href$='.swf']",parent).each(function() {
			jQuery(this).addClass("fancyVideo").removeClass('lightbox');
		});
		jQuery(".fancyVimeo",parent).each(function(){
			jQuery(this).colorbox({
				opacity:0.7,
				innerWidth:640,
				innerHeight:408,
				iframe:true,
				scrolling:false,
				current:"{current} of {total}",
				//rel:'nofollow',
				onComplete: function(){
					jQuery("#cboxClose").css("visibility", "hidden");
					jQuery("#colorbox").addClass('withVideo');
					if (typeof Cufon !== "undefined"){
						Cufon.replace('#cboxTitle');
					}
				}
			});
		});

		jQuery(".fancyVideo",parent).each(function(){
			var lightbox_html = jQuery.flash.create({swf:this.href,width:640,height:390,play:true});
			jQuery(this).colorbox({
				opacity:0.7,
				innerWidth:640,
				innerHeight:390,
				html:lightbox_html,
				scrolling:false,
				current:"{current} of {total}",
				//rel:'nofollow',
				onComplete: function(){
					jQuery("#cboxClose").css("visibility", "hidden");
					jQuery("#colorbox").addClass('withVideo');
					if (typeof Cufon !== "undefined"){
						Cufon.replace('#cboxTitle');
					}
				}
			});
		});
		jQuery(".lightbox",parent).colorbox({
			opacity:0.7,
			maxWidth:"100%",
			maxHeight:"100%",
			current:"{current} of {total}",
			onComplete: function(){
				jQuery("#cboxClose").css("visibility", "visible");
				jQuery("#colorbox").removeClass('withVideo');
				if (typeof Cufon !== "undefined"){
					Cufon.replace('#cboxTitle');
				}
			}
		});
	}
	enable_lightbox(document);
	
	/* enable image hover effect */
	var enable_image_hover = function(image){
		if(image.is(".image_icon_zoom,.image_icon_play,.image_icon_doc")){
			if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 7) {} else {
				if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 9) {
					image.hover(function(){
						jQuery(".image_overlay",this).css("visibility", "visible");
					},function(){
						jQuery(".image_overlay",this).css("visibility", "hidden");
					}).children('img').after('<span class="image_overlay"></span>');
				}else{
					image.hover(function(){
						jQuery(".image_overlay",this).animate({
							opacity: '1'
						},"fast");
					},function(){
						jQuery(".image_overlay",this).animate({
							opacity: '0'
						},"fast");
					}).children('img').after(jQuery('<span class="image_overlay"></span>').css({opacity: '0',visibility:'visible'}));
				}
			}
		}		
	}
	jQuery('.image_no_link').click(function(){
		return false;		
	});
	/* portfolio sortable */
	jQuery(".portfolios.sortable").each(function(){
		var $preferences = {
				name : 'image',
				duration: 800,
				easing: 'easeInOutQuad',
				attribute: function(v) {
	            	return $(v).attr('data-type');
				}
			};
		var $list = jQuery('ul',this);
		
		var $data = $list.clone();
		
		var $column;
		if($list.is('.portfolio_one_column')){
			$column = 1;
		}else if($list.is('.portfolio_two_columns')){
			$column = 2;
		}else if($list.is('.portfolio_three_columns')){
			$column = 3;
		}else if($list.is('.portfolio_four_columns')){
			$column = 4;
		}
		
		jQuery('.sort_by_cat a',this).click(function(e){
			if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 9) {
				$list.find('.image_shadow').css('visibility','hidden');
				$data.find('.image_shadow').css('visibility','hidden');
			}
			if(jQuery(this).attr('data-value') == 'all'){
				$sorted_data = $data.find('li');
			}else{
				$sorted_data = $data.find('li[data-type*='+jQuery(this).attr('data-value')+']');
			}
			$sorted_data.filter('.last').removeClass('last');
			$sorted_data.each(function(i){
				if(((i+1) % $column) == 0 && $column != 1){
					jQuery(this).addClass('last');
				}
			});
			var $callback = function(){
				if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 9 && parseInt(jQuery.browser.version, 10) > 6) {
					$list.find('.image_shadow').css('visibility','visible');
				}
				enable_lightbox($list);
				$list.find('.image_frame a').each(function(){
					enable_image_hover($(this));
				});
				if (typeof Cufon !== "undefined"){
					Cufon.replace('.portfolio_title');
				}
			};
			$list.quicksand($sorted_data,$preferences,$callback);
			if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 7) {
				$callback();
			}
			e.preventDefault();  
		});
	});

	jQuery(".portfolios").preloader({
		delay:200,
		imgSelector:'.portfolio_image .image_frame img',
		beforeShow:function(){
			jQuery(this).closest('.image_frame').addClass('preloading');
		},
		afterShow:function(){
			var image = jQuery(this).closest('.image_frame').removeClass('preloading').children("a");
			enable_image_hover(image);
		}
	});
	jQuery(".content,#content").preloader({
		delay:200,
		imgSelector:'.image_styled:not(.portfolio_image) .image_frame img',
		beforeShow:function(){
			jQuery(this).closest('.image_frame').addClass('preloading');
		},
		afterShow:function(){
			var image = jQuery(this).closest('.image_frame').removeClass('preloading').children("a");
			enable_image_hover(image);
		}
	});
	
	
    if(jQuery.tools.validator != undefined){
        jQuery.tools.validator.addEffect("contact_form", function(errors, event) {
            $.each(errors, function(index, error) {
                var input = error.input;
                input.addClass('invalid');
            });
        }, function(inputs)  {
            inputs.removeClass('invalid');
        });
        /* contact form widget */
        jQuery('.widget_contact_form .contact_form').validator({effect:'contact_form'}).submit(function(e) {
            var form = jQuery(this);
            if (!e.isDefaultPrevented()) {
                jQuery.post(this.action,{
                    'to':jQuery('input[name="contact_to"]').val(),
                    'name':jQuery('input[name="contact_name"]').val(),
                    'email':jQuery('input[name="contact_email"]').val(),
                    'content':jQuery('textarea[name="contact_content"]').val()
                },function(data){
                    form.fadeOut('fast', function() {
                        jQuery(this).before('<p>Your message was successfully sent. <strong>Thank You!</strong></p>');
                    });
                });
                e.preventDefault();
            }
        });
        /* contact page form */
        jQuery('.contact_form_wrap .contact_form').validator({effect:'contact_form'}).submit(function(e) {
            var form = jQuery(this);
            if (!e.isDefaultPrevented()) {
                jQuery.post(this.action,{
                    'to':jQuery('input[name="contact_to"]').val(),
                    'name':jQuery('input[name="contact_name"]').val(),
                    'email':jQuery('input[name="contact_email"]').val(),
                    'content':jQuery('textarea[name="contact_content"]').val()
                },function(data){
                    form.fadeOut('fast', function() {
                        jQuery(this).siblings('.success').show();
                    });
                });
                e.preventDefault();
            }
        });
    }
});

(function($) {

	$.fn.preloader = function(options) {
		var settings = $.extend({}, $.fn.preloader.defaults, options);


		return this.each(function() {
			settings.beforeShowAll.call(this);
			var imageHolder = $(this);
			
			var images = imageHolder.find(settings.imgSelector).css({opacity:0, visibility:'hidden'});	
			var count = images.length;
			var showImage = function(image,imageHolder){
				if(image.data.source != undefined){
					imageHolder = image.data.holder;
					image = image.data.source;	
				};
				
				count --;
				if(settings.delay <= 0){
					image.css('visibility','visible').animate({opacity:1}, settings.animSpeed, function(){settings.afterShow.call(this)});
				}
				if(count == 0){
					imageHolder.removeData('count');
					if(settings.delay <= 0){
						settings.afterShowAll.call(this);
					}else{
						if(settings.gradualDelay){
							images.each(function(i,e){
								var image = $(this);
								setTimeout(function(){
									image.css('visibility','visible').animate({opacity:1}, settings.animSpeed, function(){settings.afterShow.call(this)});
								},settings.delay*(i+1));
							});
							setTimeout(function(){settings.afterShowAll.call(imageHolder[0])}, settings.delay*images.length+settings.animSpeed);
						}else{
							setTimeout(function(){
								images.each(function(i,e){
									$(this).css('visibility','visible').animate({opacity:1}, settings.animSpeed, function(){settings.afterShow.call(this)});
								});
								setTimeout(function(){settings.afterShowAll.call(imageHolder[0])}, settings.animSpeed);
							}, settings.delay);
						}
					}
				}
			};
			

			images.each(function(i){
				settings.beforeShow.call(this);
				
				image = $(this);
				
				if(this.complete==true){
					showImage(image,imageHolder);
				}else{
					image.bind('error load',{source:image,holder:imageHolder}, showImage);
					if($.browser.opera){
						image.trigger("load");//for hidden image
					}
				}
			});
		});
	};


	//Default settings
	$.fn.preloader.defaults = {
		delay:1000,
		gradualDelay:true,
		imgSelector:'img',
		animSpeed:500,
		beforeShowAll: function(){},
		beforeShow: function(){},
		afterShow: function(){},
		afterShowAll: function(){}
	};
})(jQuery);