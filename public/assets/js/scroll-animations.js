
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
