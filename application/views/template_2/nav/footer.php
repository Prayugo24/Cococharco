<script id='astra-theme-js-js-extra'>
      var astra = {
        "break_point": "921",
        "isRtl": ""
      };
			

			console.log(window.scrollBehavior);
			
    </script>
    <script src=<?php echo base_url()."assets/template_2/js/style.js" ?> id='astra-theme-js-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/wp-embed.min.js" ?> id='wp-embed-js'></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src=<?php echo base_url()."assets/template_2/js/jquery.smartmenus.min.js" ?> id='smartmenus-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/imagesloaded.min.js" ?> id='imagesloaded-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/frontend-modules.min.js" ?> id='elementor-frontend-modules-js'></script>
    
    <script id="elementor-pro-frontend-js-before">
  var ElementorProFrontendConfig = {
    
    "nonce": "d96ca5010c",
    "i18n": {
      "toc_no_headings_found": "No headings were found on this page."
    },
    "shareButtonsNetworks": {
      "facebook": {
        "title": "Facebook",
        "has_counter": true
      },
      "twitter": {
        "title": "Twitter"
      },
      "google": {
        "title": "Google+",
        "has_counter": true
      },
      "linkedin": {
        "title": "LinkedIn",
        "has_counter": true
      },
      "pinterest": {
        "title": "Pinterest",
        "has_counter": true
      },
      "reddit": {
        "title": "Reddit",
        "has_counter": true
      },
      "vk": {
        "title": "VK",
        "has_counter": true
      },
      "odnoklassniki": {
        "title": "OK",
        "has_counter": true
      },
      "tumblr": {
        "title": "Tumblr"
      },
      "delicious": {
        "title": "Delicious"
      },
      "digg": {
        "title": "Digg"
      },
      "skype": {
        "title": "Skype"
      },
      "stumbleupon": {
        "title": "StumbleUpon",
        "has_counter": true
      },
      "mix": {
        "title": "Mix"
      },
      "telegram": {
        "title": "Telegram"
      },
      "pocket": {
        "title": "Pocket",
        "has_counter": true
      },
      "xing": {
        "title": "XING",
        "has_counter": true
      },
      "whatsapp": {
        "title": "WhatsApp"
      },
      "email": {
        "title": "Email"
      },
      "print": {
        "title": "Print"
      },
      "weixin": {
        "title": "WeChat"
      },
      "weibo": {
        "title": "Weibo"
      }
    },
    "facebook_sdk": {
      "lang": "en_US",
      "app_id": ""
    },
    "lottie": {
      "defaultAnimationUrl": "<?php echo base_url()."assets/template_2/default.json" ?>"
    }
  };
</script>
    <script src=<?php echo base_url()."assets/template_2/js/frontend.min.js" ?> id='elementor-pro-frontend-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/position.min.js" ?> id='jquery-ui-position-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/dialog.min.js" ?> id='elementor-dialog-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/waypoints.min.js" ?> id='elementor-waypoints-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/swiper.min.js" ?> id='swiper-js'></script>
    <script src=<?php echo base_url()."assets/template_2/js/share-link.min.js" ?> id='share-link-js'></script>
    <script id='elementor-frontend-js-before'>
      var elementorFrontendConfig = {
        "environmentMode": {
          "edit": false,
          "wpPreview": false
        },
        "i18n": {
          "shareOnFacebook": "Share on Facebook",
          "shareOnTwitter": "Share on Twitter",
          "pinIt": "Pin it",
          "download": "Download",
          "downloadImage": "Download image",
          "fullscreen": "Fullscreen",
          "zoom": "Zoom",
          "share": "Share",
          "playVideo": "Play Video",
          "previous": "Previous",
          "next": "Next",
          "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
          "xs": 0,
          "sm": 480,
          "md": 768,
          "lg": 1025,
          "xl": 1440,
          "xxl": 1600
        },
        "version": "3.0.13",
        "is_static": false,
        "legacyMode": {
          "elementWrappers": true
        },
        
        "settings": {
          "page": [],
          "editorPreferences": []
        },
        "kit": {
          "global_image_lightbox": "yes",
          "lightbox_enable_counter": "yes",
          "lightbox_enable_fullscreen": "yes",
          "lightbox_enable_zoom": "yes",
          "lightbox_enable_share": "yes",
          "lightbox_title_src": "title",
          "lightbox_description_src": "description"
        },
        "post": {
          "id": 6,
          "title": "Cococharco Manufacturer",
          "excerpt": "",
          "featuredImage": false
        }
      };
    </script>
    
		<script src='<?php echo base_url()."assets/template_2/js/frontends.min.js" ?>' id='elementor-frontend-js'></script>
    <script type="text/javascript">
      /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
        var t, e = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
      }, !1);

      $(document).ready(function(){
          var scrollPos = 0;
          var Counter = 0;
          $(window).scroll(function(){
              var scrollPosCur = $(this).scrollTop();
              if (scrollPosCur > scrollPos) {
                  Counter -= 1;
              } else {
                  Counter += 1;
              }
              scrollPos = scrollPosCur;
							if (scrollPos <= 100) {
								$('.header-menu').attr('style', 'background-color: transparent !important');
								$('.header-menu a').attr('style', 'color: #eee !important');
							}else if (scrollPos >= 100 && scrollPos <= 470) {
                console.log('Hello say');  
								$('.header-menu').attr('style', 'background-color: #1610107a !important');
								$('.header-menu a').attr('style', 'color: white !important');
              } else if (scrollPos >= 470) {
								$('.header-menu').attr('style', 'background-color: black !important');
								$('.header-menu a').attr('style', 'color: #eee !important');
              }
              console.log(scrollPos);
          });
      });
			
			
    </script>
  </body>
</html>
