$(document).ready(function () {
    $(".card-img-top").hover(
        function () {
            $(this).css("transform", "scale(1.1)");
        },
        function () {
            $(this).css("transform", "scale(1)");
        }
    );
});

window.addEventListener("scroll", function () {
    const scrollBtn = document.querySelector(".back-to-top");
    if (window.scrollY > 300) {
        scrollBtn.style.display = "block";
    } else {
        scrollBtn.style.display = "none";
    }
});

document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 500,
        offset: 200,
        easing: "ease-in-out",
        anchorPlacement: "center-bottom",
        delay: 50,
        once: false,
        startEvent: "DOMContentLoaded",
        disable: function () {
            return window.innerWidth < 992;
        },
    });
});
