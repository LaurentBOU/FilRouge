const modalContainer = document.querySelector(".modal-container-perso");
const trigger = document.querySelector(".modal-btn");
const closeCross = document.querySelector(".close-modal-perso");

trigger.addEventListener("click", toggleModal)
closeCross.addEventListener("click", toggleModal)

function toggleModal(){

    modalContainer.classList.toggle("active")
}


// ........................ Bienvenue et Bulles Médias...............................

const titreSpans = document.querySelectorAll('h1 span');
const logo = document.querySelector('.mediaLogo');
const medias = document.querySelectorAll('.bulle');


window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, { opacity: 0, ease: "power2.out"}, 0.3)
    .from(logo, 0.4, {transform: "scale(0)", ease: "power2.out"}, '-=2')
    .staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1');

    
    TL.play();
})