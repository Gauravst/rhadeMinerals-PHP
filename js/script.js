window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  const goToTopBtn = document.getElementById("goToTopBtn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    goToTopBtn.style.display = "block";
  } else {
    goToTopBtn.style.display = "none";
  }
}

function scrollToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome
}

const carousel = document.querySelector(".carouselInner");
const items = document.querySelectorAll(".carouselItem");
let currentIndex = 0;

function showNextSlide() {
  currentIndex = (currentIndex + 1) % items.length;
  carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}

setInterval(showNextSlide, 3000);

// nav bar for mobile
const menuBtn = document.querySelector(".menuIcon");
const closeBtn = document.querySelector(".closeIcon");
const nav = document.querySelector("header .headerRight nav");
const body = document.body;

menuBtn.addEventListener("click", function () {
  nav.classList.add("open");
  body.classList.add("no-scroll");
  this.style.display = "none";
  closeBtn.style.display = "inline-block";
});

closeBtn.addEventListener("click", function () {
  nav.classList.remove("open");
  body.classList.remove("no-scroll");
  this.style.display = "none";
  menuBtn.style.display = "inline-block";
});

// product menu droup down in mobile

const productDropIcon = document.querySelector(".dropdownProductIcon");
const productDropDownMenu = document.querySelector(".dropdown");

productDropIcon.addEventListener("click", function () {
  if (
    productDropDownMenu.style.display === "none" ||
    productDropDownMenu.style.display === ""
  ) {
    productDropDownMenu.style.display = "flex";
    productDropIcon.style.transform = "rotate(90deg)";
  } else {
    productDropDownMenu.style.display = "none";
    productDropIcon.style.transform = "rotate(0deg)";
  }
});
