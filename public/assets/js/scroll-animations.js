
const element1 = document.querySelector('.anim-child-1');
const element2 = document.querySelector('.anim-child-2');
const element3 = document.querySelector('.anim-child-3');
const element4 = document.querySelector('.anim-child-4');


// Définissez le point de transformation pour l'animation (même pour tous les éléments)
gsap.set([element1, element2, element3, element4], { transformOrigin: 'bottom' });

// Créez une séquence d'animations pour rétrécir les éléments avec un léger décalage
const tl = gsap.timeline();

tl.to(element1, {
  scaleY: 0.2, // Rétrécir à 50% de la hauteur d'origine
  scrollTrigger: {
    trigger: element1,
    start: "top 70%",
    end: "bottom center",
    scrub: true,
  }
});

tl.to(element2, {
  scaleY: 0.2, // Rétrécir à 50% de la hauteur d'origine
  scrollTrigger: {
    trigger: element2,
    start: "top 60%",
    end: "bottom center",
    scrub: true,
  },
}); // Appliquez un décalage de 0.2 secondes par rapport à la fin de l'animation précédente

tl.to(element3, {
  scaleY: 0.2, // Rétrécir à 50% de la hauteur d'origine
  scrollTrigger: {
    trigger: element3,
    start: "top 50%",
    end: "bottom center",
    scrub: true,
  }
}); 

tl.to(element4, {
    scaleY: 0.2, // Rétrécir à 50% de la hauteur d'origine
    scrollTrigger: {
      trigger: element4,
      start: "top 40%",
      end: "bottom center",
      scrub: true,
    }
}); 

//Animation des croix//////////////////////////////////////////////////////

const croix1 = document.querySelector('.box-1');
const croix2 = document.querySelector('.box-2');
const croix3 = document.querySelector('.box-3');
const croix4 = document.querySelector('.box-4');
const box = document.querySelector('.cross-anim-parent');

gsap.set([croix1, croix2, croix3, croix4], { x: -250 });

const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: box,
      start: "top 80%",
      end: "top 50%",
      scrub: true,
    }
  })  
  .to([croix1, croix2, croix3, croix4], {
    x: 0, // Rétrécir à 50% de la hauteur d'origine
});

const timeline2 = gsap.timeline({
    scrollTrigger: {
      trigger: box,
      start: "top 50%",
      end: "top 10%",
      scrub: true,
    }
  })  
.to(croix2, {
    y: 120, // Rétrécir à 50% de la hauteur d'origine
})
.to(croix3, {
    y: 240, // Rétrécir à 50% de la hauteur d'origine
})
.to(croix4, {
    y: 360, // Rétrécir à 50% de la hauteur d'origine
}); 
