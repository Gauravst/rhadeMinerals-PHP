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
