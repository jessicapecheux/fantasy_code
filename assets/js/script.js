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


document.addEventListener("DOMContentLoaded", function(){
  ScrollReveal().reveal('.items_1', {
      reset: true,
      distance: '5%', 
      origin: 'left',
      delay: 300 
  });
  ScrollReveal().reveal('.items_2', {
      reset: true, 
      distance: '3%',  
      origin: 'left',
      delay: 700  
  });
});