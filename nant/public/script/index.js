    // @ts-check
var row1_col1 = document.querySelector("#row1-col1");
var row1_col2 = document.querySelector("#row1-col2");
var row2_col1 = document.querySelector("#row2-col1");
var row2_col2 = document.querySelector("#row2-col2");
var row3_col1 = document.querySelector("#row3-col1");
var row3_col2 = document.querySelector("#row3-col2");
var recipes_pic = document.querySelector("#recipes_pic");
var nav_1 = document.querySelector('.nav1');
var logo = document.querySelector('.header_logo');
var head_er = document.querySelector('header');
var search = document.querySelector('.search');
var search2 = document.querySelector('.search_responsive');
var menu_bar = document.querySelector('.menubar')
var nav2 = document.querySelector('.nav2 ul')
var input = document.querySelector('header input');
var row1_img = document.querySelector(".row1-img");
var row1_img1 = document.querySelector(".row1-img1");
var row2_img = document.querySelector(".row2-img");
var row2_img1 = document.querySelector(".row2-img1");
var row3_img = document.querySelector(".row3-img");
var row3_img1 = document.querySelector(".row3-img1");


window.addEventListener("scroll", function () {
    nav_1.classList.toggle("sticky", window.scrollY > 0);
    logo.classList.toggle("sticky", window.scrollY > 0);
    head_er.classList.toggle("sticky", window.scrollY > 0);
    search.classList.toggle("sticky", window.scrollY > 0);
    row1_col1.classList.toggle("sticky", window.scrollY > 190);
    row1_col2.classList.toggle("sticky", window.scrollY > 190);
    row2_col1.classList.toggle("sticky", window.scrollY > 410);
    row2_col2.classList.toggle("sticky", window.scrollY > 410);
    row3_col1.classList.toggle("sticky", window.scrollY > 700);
    row3_col2.classList.toggle("sticky", window.scrollY > 700);
    recipes_pic.classList.toggle("sticky", window.scrollY > 1070);
})

menu_bar.addEventListener("click", function () {
    nav2.classList.toggle("show");
});
search.addEventListener("click", function () {
    input.classList.toggle("show");
});
search2.addEventListener("click", function () {
    input.classList.toggle("show");
});
