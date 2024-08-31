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

// ハンバーガーメニュー
const $humBtn = document.getElementById("js-hum");
const $spMenu = document.querySelector(".p-sp__menu");
const $bodyElemnt = document.body;

$humBtn.addEventListener("click", humToggle);

function humToggle() {
  this.classList.toggle("is-active");
  $spMenu.classList.toggle("is-active");
  $bodyElemnt.classList.toggle("active-body");
}

// スプリット文字の実装とアニメーション
const $textEl = document.getElementById("js-split");
if ($textEl) {
  const htmlContent = $textEl.innerHTML;
  const splitText = htmlContent
    .replace(/(<br>|<br \/>)/gi, "|")
    .split("")
    .map((char) => (char === "|" ? "<br>" : `<span>${char}</span>`))
    .join("");
  $textEl.innerHTML = splitText;
}
// タイムライン制御
const tl = gsap.timeline();
tl.fromTo(
  ".el1",
  {
    autoAlpha: 0,
    y: 50,
  },
  {
    autoAlpha: 1,
    y: 0,
    duration: 2,
  }
)
  .fromTo(
    "#js-split span",
    {
      autoAlpha: 0,
      y: 20,
    },
    {
      autoAlpha: 1,
      y: 0,
      stagger: 0.1,
      amount: 0.2,
    }
  )
  .fromTo(
    ".el3",
    {
      autoAlpha: 0,
      y: 20,
    },
    {
      autoAlpha: 1,
      y: 0,
    }
  )
  .fromTo(
    ".el4",
    {
      autoAlpha: 0,
      y: 20,
    },
    {
      autoAlpha: 1,
      y: 0,
    }
  );

// フェードインアニメーション
gsap.utils.toArray(".fade").forEach((target) => {
  gsap.from(target, {
    duration: 0.8,
    scrollTrigger: {
      trigger: target,
      start: "top bottom",
      // markers: true,
    },
    stagger: {
      from: "start",
      amount: 0.8,
    },
    opacity: 0,
    yPercent: 20,
  });
});
