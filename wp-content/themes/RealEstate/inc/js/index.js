// // Your main JavaScript file
// import Navi from "./module/nav" // Make sure the path is correct
// import Appi from "./module/app" // Make sure the path is correct

// // Import CSS or SCSS files if needed
// // import "../css/style.scss";

// const nav = new Navi();
// const app = new Appi();
window.addEventListener("load", (e) => {
  let navMobile = document.querySelector(".ham-btn");
  let activeMobileMenu = document.querySelector("#navbarNavDropdown");
  navMobile.addEventListener("click", (e) => {
    let mobileVisibility = activeMobileMenu.getAttribute("data-menushow");
    let dataHam = navMobile.getAttribute("data-ham");
    
    navMobile.setAttribute("data-ham", dataHam === "false" ? "true" : "false");
    if (dataHam === "true" && mobileVisibility === "true") {
      activeMobileMenu.classList.remove("mobile-nav-bar-active");
      activeMobileMenu.classList.add("mobile-menu-visibility");
      activeMobileMenu.setAttribute("data-menushow", "false");
    } else {
      activeMobileMenu.classList.add("mobile-nav-bar-active");
      activeMobileMenu.classList.remove("mobile-menu-visibility");
      activeMobileMenu.setAttribute("data-menushow", "true");
    }
  });
});
