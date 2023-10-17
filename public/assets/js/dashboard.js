document.addEventListener('DOMContentLoaded', function(){
    const logoutDropdownButton = document.querySelector('.btn-deco');

    logoutDropdownButton.addEventListener('click', function(){        
        const dashboardDropdown = document.getElementById('dashboardDropdown');
        dashboardDropdown.classList.toggle('hidden');
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

    const closeMenuButton = document.getElementById("close-menu-button");
    closeMenuButton.addEventListener("click", function () {
       console.log('ok');
        mobileMenu.classList.add("hidden");
    });

    
});
