let MainHaeder = document.querySelector(".MainHeader");
let Menu = document.querySelector("#MenuBtn");
let Navbar = document.querySelector(".navbar");


Menu.addEventListener("click",() =>{
    Menu.classList.toggle("fa-times");
    Navbar.classList.toggle("active");
});