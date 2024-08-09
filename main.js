const swiper = new Swiper(".mySwiper", {
  speed: 950,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const $humBtn = document.getElementById("js-hum");
const $spMenu = document.querySelector(".p-sp__menu");
const $bodyElemnt = document.body;

$humBtn.addEventListener("click", humToggle);

function humToggle() {
  this.classList.toggle("is-active");
  $spMenu.classList.toggle("is-active");
  $bodyElemnt.classList.toggle("active-body");
}
