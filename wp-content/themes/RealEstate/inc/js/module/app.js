// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      // This tween will rotate an element with a class of .my-element
      gsap.to(".my-element", {
        //   rotation: 360,
        // yoyo:false;
        duration: 2,
        ease: "power1.inOut",
      });

      console.log("window loaded");
    },
    false
  );
});
