document.addEventListener('DOMContentLoaded', function() {
    const productButton = document.querySelector('.relative button');

    productButton.addEventListener('click', function() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    });
});