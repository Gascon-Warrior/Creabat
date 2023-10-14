//Menu desktop
document.addEventListener('DOMContentLoaded', function() {
    const productButton = document.querySelector('.relative button');

    productButton.addEventListener('click', function() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    });
});


//Menu mobile
  document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menu-toggle-mobile");
    const mobileMenu = document.getElementById("mobile-menu");

    menuButton.addEventListener("click", function () {
      // Basculez la classe "hidden" du menu mobile pour afficher ou masquer le menu.
     
      mobileMenu.classList.toggle("hidden");
    });

    const closeMenuButton = mobileMenu.querySelector(".close-menu-button");
    closeMenuButton.addEventListener("click", function () {
       
        mobileMenu.classList.add("hidden");
    });

    
});

    
document.addEventListener("DOMContentLoaded", function () {
  const dropdownMobileButton = document.getElementById("dropdown-mobile");
  const dropdownMobileContent = document.getElementById("disclosure-1");

  dropdownMobileButton.addEventListener("click", function () {
    // Basculez la classe "hidden" du contenu du dropdown pour afficher ou masquer le sous-menu.
    if (dropdownMobileContent.style.display === "block") {
      dropdownMobileContent.style.display = "none";
    } else {
      dropdownMobileContent.style.display = "block";
    }

    // Changez l'icône d'expansion/collapse en modifiant la rotation.
    const dropdownIcon = dropdownMobileButton.querySelector(".dropdown-icon");
    if (dropdownIcon.style.transform === "rotate(180deg)") {
      dropdownIcon.style.transform = "rotate(0deg)";
    } else {
      dropdownIcon.style.transform = "rotate(180deg)";
    }
  });
});

