const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const closeBtn = document.getElementById('close-btn');
const lightboxContent = document.querySelector('.lightbox-content');

const images = document.querySelectorAll('.lightbox-img');

images.forEach(img => {
  img.addEventListener('click', function() {
    lightboxImg.src = this.src;
    lightbox.style.display = 'flex';
  });
});

closeBtn.addEventListener('click', function() {
  lightbox.style.display = 'none';
});

lightbox.addEventListener('click', function(e) {
  if (e.target === lightboxContent) {
    lightbox.style.display = 'none';
  }
});
