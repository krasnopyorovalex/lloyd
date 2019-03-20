/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/***/ (function(module, exports) {

function include(scriptUrl) {
    document.write('<script src="' + window.location.origin + '/' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return myNav.indexOf('msie') != -1 ? parseInt(myNav.split('msie')[1]) : false;
}
include('js/jquery.easing.1.3.js');
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('js/tmstickup.js');
        $(document).ready(function () {
            $('#stuck_container').TMStickUp({});
        });
    }
})(jQuery);
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('js/jquery.ui.totop.js');
        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    }
})(jQuery);
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('js/jquery.equalheights.js');
    }
})(jQuery);
(function ($) {
    var o = $('.resp-tabs');
    if (o.length > 0) {
        include('js/jquery.responsive.tabs.js');
        $(document).ready(function () {
            o.easyResponsiveTabs();
        });
    }
})(jQuery);
(function ($) {
    include('js/jquery.rd-navbar.js');
})(jQuery);
(function ($) {
    var o = $('.accordion');
    if (o.length > 0) {
        include('js/jquery.ui.accordion.min.js');
        $(document).ready(function () {
            o.accordion({
                active: false,
                header: '.accordion_header',
                heightStyle: 'content',
                collapsible: true
            });
        });
    }
})(jQuery);
(function ($) {
    var o = $('.owl-carousel');
    if (o.length > 0) {
        include('js/owl.carousel.min.js');
        $(document).ready(function () {
            o.owlCarousel({
                margin: 30,
                smartSpeed: 450,
                loop: true,
                dots: false,
                dotsEach: 1,
                nav: true,
                navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    980: {
                        items: 1
                    }
                }
            });
        });
    }
})(jQuery);
(function ($) {
    var o = $('html');
    if (navigator.userAgent.toLowerCase().indexOf('msie') == -1 || isIE() && isIE() > 9) {
        if (o.hasClass('desktop')) {
            include('js/wow.js');
            $(document).ready(function () {
                new WOW().init();
            });
        }
    }
})(jQuery);
$(function () {
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,
        gestureStart = function gestureStart() {
        viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
    },
        scaleFix = function scaleFix() {
        if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
            viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
            document.addEventListener("gesturestart", gestureStart, false);
        }
    };
    scaleFix();
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(function () {
                        return false;
                    }, function () {
                        window.location.href = $(this).attr("href");
                    });
                }
            });
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0";
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');
(function ($) {
    var o = $('#camera');
    if (o.length > 0) {
        if (!(isIE() && isIE() > 9)) {
            include('js/jquery.mobile.customized.min.js');
        }
        include('js/camera.js');
        $(document).ready(function () {
            o.camera({
                autoAdvance: true,
                height: '29.89583333333333%',
                minHeight: '350px',
                pagination: false,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: true,
                mobileNavHover: false,
                fx: 'simpleFade'
            });
        });
    }
})(jQuery);
(function ($) {
    var o = $('.search-form');
    if (o.length > 0) {
        include('js/TMSearch.js');
    }
})(jQuery);
$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $("#advanced").css({
            position: 'fixed'
        });
    } else {
        $("#advanced").css({
            position: 'relative'
        });
    }
});
(function ($) {
    var o = $('.lightbox');
    if (o.length > 0) {
        include('js/jquery.touch-touch.js');
        $(document).ready(function () {
            o.touchTouch();
        });
    }
})(jQuery);
(function ($) {
    include('js/jquery.rd-parallax.js');
})(jQuery);

jQuery(document).ready(function () {

    var filter = jQuery('.filter'),
        filterProducers = jQuery('.filter__producers'),
        filterIndustries = jQuery('.filter__industries'),
        projectsBox = jQuery('.project__box'),
        filterValues = {
        'industry': false,
        'producer': false,
        'getIndustry': function getIndustry(item) {
            return this.industry ? jQuery(item).hasClass(this.industry) : true;
        },
        'getProducer': function getProducer(item) {
            return this.producer ? jQuery(item).hasClass(this.producer) : true;
        }
    };

    if (filter.length) {
        filterProducers.on('click', 'li:nth-child(1)', function () {
            return filterValues.producer = false;
        });
        filterIndustries.on('click', 'li:nth-child(1)', function () {
            return filterValues.industry = false;
        });
        filter.on('click', 'li', function () {
            var _this = jQuery(this),
                filter = _this.attr("data-filter");

            if (filter.indexOf('industry') !== -1) {
                filterValues.industry = filter;
            } else if (filter.indexOf('producer') !== -1) {
                filterValues.producer = filter;
            }

            if (filter) {
                projectsBox.find(">div").hide().fadeIn().filter(function () {
                    var _this = jQuery(this);
                    return !(filterValues.getIndustry(_this) && filterValues.getProducer(_this));
                }).hide();
            } else {
                projectsBox.find(">div").fadeIn();
            }

            return _this.addClass('active').siblings('li').removeClass('active');
        });
    }

    var mainSection = jQuery("main"),
        faq = mainSection.find(".faq");
    if (faq.length) {
        faq.on("click", "li .q", function () {
            var _this = jQuery(this),
                parent = _this.parent("li");
            faq.find(".a").hide();
            if (parent.hasClass("active")) {
                return faq.find("li").removeClass("active");
            }
            return faq.find("li").removeClass("active") && _this.next(".a").fadeIn("slow") && parent.addClass("active");
        });
    }
});

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/js/app.js");


/***/ })

/******/ });