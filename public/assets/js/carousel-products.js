/**
 * Description
 *  Change main picture when click a thumbnail.
 */
document.addEventListener("DOMContentLoaded", function () {
  var mainImage = document.querySelector("#focused-image");
  var thumbnail = document.querySelectorAll(".thumbnail");  
  thumbnail.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      var currentlySelected = document.querySelector(".border-caroussel");
      if (currentlySelected) {
        currentlySelected.classList.remove("border-caroussel");
      }

      mainImage.src = thumb.src;
      thumb.classList.add("border-caroussel");
    });
  });
});
