const menuButton = document.getElementById("menu-button");
const mobileMenu = document.getElementById("mobile-menu");

menuButton.addEventListener("click", () => {
  // Toggle the transform class for sliding effect
  mobileMenu.classList.toggle("translate-x-full");
  mobileMenu.classList.toggle("translate-x-0");
});
