!function(e){var t={};function n(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:i})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({0:function(e,t,n){e.exports=n("F1kH")},F1kH:function(e,t){function n(e){document.write('<script src="'+window.location.origin+"/"+e+'"><\/script>')}function i(){var e=navigator.userAgent.toLowerCase();return-1!=e.indexOf("msie")&&parseInt(e.split("msie")[1])}n("js/jquery.easing.1.3.js"),function(e){e("html").hasClass("desktop")&&(n("js/tmstickup.js"),e(document).ready(function(){e("#stuck_container").TMStickUp({})}))}(jQuery),function(e){e("html").hasClass("desktop")&&(n("js/jquery.ui.totop.js"),e(document).ready(function(){e().UItoTop({easingType:"easeOutQuart"})}))}(jQuery),jQuery("[data-equal-group]").length>0&&n("js/jquery.equalheights.js"),function(e){var t=e(".resp-tabs");t.length>0&&(n("js/jquery.responsive.tabs.js"),e(document).ready(function(){t.easyResponsiveTabs()}))}(jQuery),jQuery,n("js/jquery.rd-navbar.js"),function(e){var t=e(".accordion");t.length>0&&(n("js/jquery.ui.accordion.min.js"),e(document).ready(function(){t.accordion({active:!1,header:".accordion_header",heightStyle:"content",collapsible:!0})}))}(jQuery),function(e){var t=e(".owl-carousel");t.length>0&&(n("js/owl.carousel.min.js"),e(document).ready(function(){t.owlCarousel({margin:30,smartSpeed:450,loop:!0,dots:!1,dotsEach:1,nav:!0,navClass:["owl-prev fa fa-angle-left","owl-next fa fa-angle-right"],responsive:{0:{items:1},768:{items:1},980:{items:1}}})}))}(jQuery),function(e){var t=e("html");(-1==navigator.userAgent.toLowerCase().indexOf("msie")||i()&&i()>9)&&t.hasClass("desktop")&&(n("js/wow.js"),e(document).ready(function(){(new WOW).init()}))}(jQuery),$(function(){var e=document.querySelector&&document.querySelector('meta[name="viewport"]'),t=navigator.userAgent,n=function(){e.content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0"};if(e&&/iPhone|iPad/.test(t)&&!/Opera Mini/.test(t)&&(e.content="width=device-width, minimum-scale=1.0, maximum-scale=1.0",document.addEventListener("gesturestart",n,!1)),void 0!=window.orientation){t.match(/ipod|ipad|iphone/gi)||$(".sf-menus li").each(function(){$(">ul",this)[0]&&$(">a",this).toggle(function(){return!1},function(){window.location.href=$(this).attr("href")})})}});var r="";navigator.userAgent.toLocaleLowerCase().match(/ipod|ipad|iphone/gi)||(r=",user-scalable=0"),document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+r+'">'),function(e){var t=e("#camera");t.length>0&&(i()&&i()>9||n("js/jquery.mobile.customized.min.js"),n("js/camera.js"),e(document).ready(function(){t.camera({autoAdvance:!0,height:"29.89583333333333%",minHeight:"350px",pagination:!1,thumbnails:!1,playPause:!1,hover:!1,loader:"none",navigation:!0,navigationHover:!0,mobileNavHover:!1,fx:"simpleFade"})}))}(jQuery),jQuery(".search-form").length>0&&n("js/TMSearch.js"),$(window).scroll(function(){$(this).scrollTop()>0?$("#advanced").css({position:"fixed"}):$("#advanced").css({position:"relative"})}),function(e){var t=e(".lightbox");t.length>0&&(n("js/jquery.touch-touch.js"),e(document).ready(function(){t.touchTouch()}))}(jQuery),jQuery,n("js/jquery.rd-parallax.js"),jQuery(document).ready(function(){var e=jQuery(".filter"),t=jQuery(".filter__producers"),n=jQuery(".filter__industries"),i=jQuery(".project__box"),r={industry:!1,producer:!1,getIndustry:function(e){return!this.industry||jQuery(e).hasClass(this.industry)},getProducer:function(e){return!this.producer||jQuery(e).hasClass(this.producer)}};e.length&&(t.on("click","li:nth-child(1)",function(){return r.producer=!1}),n.on("click","li:nth-child(1)",function(){return r.industry=!1}),e.on("click","li",function(){var e=jQuery(this),t=e.attr("data-filter");return-1!==t.indexOf("industry")?r.industry=t:-1!==t.indexOf("producer")&&(r.producer=t),t?i.find(">div").hide().fadeIn().filter(function(){var e=jQuery(this);return!(r.getIndustry(e)&&r.getProducer(e))}).hide():i.find(">div").fadeIn(),e.addClass("active").siblings("li").removeClass("active")}));var o=jQuery("main").find(".faq");o.length&&o.on("click","li .q",function(){var e=jQuery(this),t=e.parent("li");return o.find(".a").hide(),t.hasClass("active")?o.find("li").removeClass("active"):o.find("li").removeClass("active")&&e.next(".a").fadeIn("slow")&&t.addClass("active")})})}});