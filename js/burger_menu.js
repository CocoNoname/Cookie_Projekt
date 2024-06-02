const menu = document.getElementById("main-menu");
const nav_button = document.getElementById("hamburger");
nav_button.addEventListener("click", function(){
    menu.classList.toggle("on");
})
