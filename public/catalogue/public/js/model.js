$(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
    });
});

$(document).ready(function () {
    $(".like").click(function () {
        $(this).toggleClass("heart");
    });


});

$(document).ready(function () {
    $("#register-link").click(function () {
        $("#loginModal").modal('show');
    });


});
var dd_main = document.querySelector(".dd_main");

dd_main.addEventListener("click", function () {
    this.classList.toggle("active");
})