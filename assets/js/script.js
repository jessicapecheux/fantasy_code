const buttonBurger = document.querySelector(".buttonBurger");
const sideNavBar = document.querySelector(".sideNavBar");
const burger1 = document.querySelector(".burger1");
const burger2 = document.querySelector(".burger2");
const burger3 = document.querySelector(".burger3");

buttonBurger.addEventListener("click", function () {
    sideNavBar.classList.toggle("visible");
    burger1.classList.toggle("btnOpen1");
    burger2.classList.toggle("btnOpenHide");
    burger3.classList.toggle("btnOpen2");
  });

const phone_button = document.querySelector(".phone");
const phone_number = document.querySelector(".tel_number");

phone_button.addEventListener("click", function () {
  phone_number.classList.toggle("phone_number_appear");
});