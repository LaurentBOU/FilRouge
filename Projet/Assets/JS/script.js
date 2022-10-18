try {
  const modalContainer = document.querySelector(".modal-container-perso");
  const trigger = document.querySelector(".modal-btn");
  const closeCross = document.querySelector(".close-modal-perso");
  const overflow = document.querySelector("body");

  trigger.addEventListener("click", toggleModal);
  closeCross.addEventListener("click", toggleModal);

  function toggleModal() {
    modalContainer.classList.toggle("active");
    overflow.classList.toggle("overflow");
  }
} catch (e) {
  console.log(e);
}

// ........................ Bienvenue et Bulles Médias...............................
try {
  const titreSpans = document.querySelectorAll("h1 span");
  const logo = document.querySelector(".mediaLogo");
  const medias = document.querySelectorAll(".bulle");

  window.addEventListener("load", () => {
    try {
      const TL = gsap.timeline({ paused: true });
      TL.staggerFrom(titreSpans, 1, { opacity: 0, ease: "power2" }, 0.3)
        .from(logo, 0.4, { transform: "scale(0)", ease: "power2" }, "-=2")
        .staggerFrom(medias, 1, { right: -200, ease: "power2" }, 0.3, "-=1");

      TL.play();
    } catch (e) {}
  });
} catch (e) {}

// .................................Connexion........................................
try {
  const eye = document.querySelector(".iconeye");
  const eyeoff = document.querySelector(".iconeyeoff");
  const passwordField = document.querySelector("input[type=password]");

  eye.addEventListener("click", () => {
    eye.style.display = "none";
    eyeoff.style.display = "block";
    passwordField.type = "text";
  });

  eyeoff.addEventListener("click", () => {
    eyeoff.style.display = "none";
    eye.style.display = "block";
    passwordField.type = "password";
  });
} catch (e) {}
