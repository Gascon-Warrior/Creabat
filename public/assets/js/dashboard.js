document.addEventListener('DOMContentLoaded', function(){
    const logoutDropdownButton = document.querySelector('.btn-deco');

    logoutDropdownButton.addEventListener('click', function(){        
        const dashboardDropdown = document.getElementById('dashboardDropdown');
        dashboardDropdown.classList.toggle('hidden');
    });
});
