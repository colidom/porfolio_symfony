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
