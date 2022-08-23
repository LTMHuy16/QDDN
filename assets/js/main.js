"use strict";

function activeNavbar() {
    var navbar = document.querySelector(".header__navbar");
    var menuIcon = document.querySelector(".header__toggle");
    var menuClose = document.querySelector(".header__close");
    var overlay = document.querySelector(".overlay");
    menuIcon.addEventListener("click", function () {
        navbar.classList.add("show");
        overlay.classList.add("active");
    });
    menuClose.addEventListener("click", function () {
        navbar.classList.remove("show");
        overlay.classList.remove("active");
    });
    overlay.addEventListener("click", function () {
        navbar.classList.remove("show");
        overlay.classList.remove("active");
    });
}

function toggleQuestionBox() {
    var questionBoxs = document.querySelectorAll(".about__accordion .about__panel");
    questionBoxs.forEach(function (item) {
        item.addEventListener("click", function () {
            item.classList.toggle("show");
        });
    });
}

function addFixedHeader() {
    var header = document.querySelector(".header");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 400) {
            header.classList.add("fixed");
        } else {
            header.classList.remove("fixed");
        }
    });
}

function runCarousel() {
    jQuery("#testimonial__carousel").owlCarousel({
        loop: true,
        margin: 30,
        dotsEach: true,
        responsive: {
            0: {
                items: 1,
            },
            1024: {
                items: 2,
            },
        },
    });
}

window.addEventListener("load", function () {
    activeNavbar();
    toggleQuestionBox();
    runCarousel();
    addFixedHeader();
});
