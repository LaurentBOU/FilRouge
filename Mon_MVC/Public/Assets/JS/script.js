// ........................Modale...............................
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
      TL.staggerFrom(titreSpans, 1, { opacity: 0, ease: "power2.out" }, 0.3)
        .from(logo, 0.4, { transform: "scale(0)", ease: "power2.out" }, "-=2")
        .staggerFrom(medias, 1, { right: -200, ease: "power2.out" }, 0.3, "-=1");

      TL.play();
    } catch (e) { }
  });
} catch (e) { }

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
} catch (e) { }

// ...............................Mot de passe........................................

const password = document.querySelector("#password");
const resultatPassword = document.querySelector("#resultatPassword");

password.addEventListener("blur",()=>{
    var caracChiffre = /\d/;
    var caracSpeciaux = /[$&@!?#%]/;
    var error = "";
    if(password.value.length < 8){
        error += "<li>trop court</li>";
    }
    
    if(!password.value.match(caracChiffre)){
        console.log(password.value.match(caracChiffre))
        error += "<li> doit contenir un chiffre</li>";
    }
    if(!password.value.match(caracSpeciaux)){
        error+="<li> doit contenir un caractère spécial $,&,@ ou ! </li>"
    }

    if(error !==""){
        resultatPassword.innerHTML = "Le mot de passe est : <ul>"+error+"</ul>";
        resultatPassword.style.border = "2px solid red";
    }
    else{
        resultatPassword.innerHTML = "Le mot de passe est valide";
        resultatPassword.style.border = "2px solid green"
    }
});