// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Parallax,
    EffectCoverflow,
    FreeMode,
    Thumbs,
} from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/thumbs";
import "swiper/css/free-mode";

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

const MySlider = {
    banner: function () {
        let banner = document.querySelector(".myBanners");
        if (banner) {
            new Swiper(".myBanners", {
                lazy: true,
                autoplay: true,
                loop: true,
                speed: 1000,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                },
                // configure Swiper to use modules
                modules: [Navigation, Parallax, Autoplay, Pagination],
            });
        }
    },
};

const Lazyload = {
    init: function () {
        $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            effectTime: 1000,
            threshold: 0,
            visibleOnly: true,
            // beforeLoad: function (element) {
            //     console.log("on Load "+ element.data("src"));
            // },
            onError: function (element) {
                console.log("error loading " + element.data("src"));
            },
        });
    },
};

const Header = {
    init: function () {
        let header = document.querySelector("#default-header");
        let logo = document.querySelector("#nav-logo");
        let search = document.querySelector("#nav-search");
        let drive = document.querySelector("#nav-drive");

        if (header) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll < 10) {
                    header.classList.add("bg-transparent");
                    header.classList.remove("active");
                    logo.src =
                        window.location.origin +
                        "/image/icon/BMW_logo_white.png";
                    logo.classList.add("md:mb-3");
                    search.src =
                        window.location.origin + "/image/icon/icon_search.svg";
                    drive.src =
                        window.location.origin +
                        "/image/icon/icon_test_drive_(white).svg";
                } else {
                    header.classList.remove("bg-transparent");
                    header.classList.add("active");
                    logo.src =
                        window.location.origin +
                        "/image/icon/BMW_logo_grey.png";
                    logo.classList.remove("md:mb-3");
                    search.src =
                        window.location.origin +
                        "/image/icon/icon_search_soft_grey.svg";
                    drive.src =
                        window.location.origin +
                        "/image/icon/icon_test_drive_soft_grey.svg";
                }
            });
        }
    },
};

const Footer = {
    init: function () {
        // menu footer (hide by position quick-action)
        var slide = function () {
            var scroll = $(window).scrollTop();
            var height = $(window).height();
            var banner = $("#quick-action").position();
            var bottom = document.querySelector(".bottom-menu");

            if (scroll >= banner.top - height) {
                bottom.classList.remove('active');
            } else {
                bottom.classList.add('active');
            }
        };
        $(window).on("scroll", $.proxy(slide, this));
        $(window).on("resize", $.proxy(slide, this));
        $.proxy(slide, this)();
        // end menu footer
    },
};

export { MySlider, Lazyload, Header, Footer };
