"use strict";

window.addEventListener("DOMContentLoaded", () => {
    Fancybox.bind("[data-fancybox]", {});

    // [1] navbar start

    const header = document.querySelector("#header");
    const hamburger = document.querySelector("#hamburger");
    const nav = document.querySelector("#main-nav");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            header.classList.add("header-sticky");
        } else {
            header.classList.remove("header-sticky");
        }
    });

    hamburger.addEventListener("click", () => {
        nav.classList.toggle("hidden");
        nav.classList.toggle("flex");
    });

    window.addEventListener("click", (event) => {
        if (
            !event.target.closest("#main-nav") &&
            !event.target.closest("#hamburger")
        ) {
            nav.classList.add("hidden");
            nav.classList.remove("flex");
        }
    });

    // [1] navbar end

    // [2] hero slider start
    const swiper = new Swiper("#hero-slider", {});

    const buttons = document.querySelectorAll("#hero-button button");
    const infos = document.querySelectorAll("#hero-info [data-info]");

    const setActiveButton = (index) => {
        buttons.forEach((button, i) => {
            if (i === index) {
                button.classList.add("bg-primary", "i");
                button.querySelector("img").classList.add("invert");
                button.classList.remove("bg-white");
            } else {
                button.classList.remove("bg-primary", "i");
                button.querySelector("img").classList.remove("invert");
                button.classList.add("bg-white");
            }
        });

        infos.forEach((info, i) => {
            if (i === index) {
                info.classList.remove("hidden");
            } else {
                info.classList.add("hidden");
            }
        });
    };

    setActiveButton(0);

    buttons.forEach((button, i) => {
        button.addEventListener("click", () => {
            swiper.slideTo(i);
        });
    });

    swiper.on("slideChange", () => {
        setActiveButton(swiper.realIndex);
    });
    // [2] hero slider end

    // [3] tab start
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach((button) => {
        button.addEventListener("click", () => {
            tabContents.forEach((content) => content.classList.remove("block"));
            tabContents.forEach((content) => content.classList.add("hidden"));

            tabButtons.forEach((btn) => btn.classList.remove("tab-active"));
            button.classList.add("tab-active");

            document
                .getElementById(button.dataset.tab)
                .classList.remove("hidden");
            document.getElementById(button.dataset.tab).classList.add("block");
        });
    });
    // [3] tab end
});
