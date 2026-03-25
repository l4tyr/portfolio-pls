
window.addEventListener("DOMContentLoaded", () => {
  const barre = document.getElementById("barre-chargement");
  const nombre = document.getElementById("nombre-chargement");
  const ecran = document.getElementById("chargement");

  let valeur = 0;

  const intervalle = setInterval(() => {
    valeur += Math.random() * 18;

    if (valeur >= 100) {
      valeur = 100;
      clearInterval(intervalle);
      setTimeout(() => ecran.classList.add("termine"), 300);
    }

    barre.style.width = valeur + "%";
    nombre.textContent = Math.round(valeur) + "%";
  }, 100);
});

const curseur = document.getElementById("curseur");
const anneauCurseur = document.getElementById("anneau-curseur");

let posX = 0, posY = 0;
let anneauX = 0, anneauY = 0;

document.addEventListener("mousemove", (evenement) => {
  posX = evenement.clientX;
  posY = evenement.clientY;
  curseur.style.left = posX + "px";
  curseur.style.top = posY + "px";
});

(function animerAnneau() {
  anneauX += (posX - anneauX) * 0.12;
  anneauY += (posY - anneauY) * 0.12;
  anneauCurseur.style.left = anneauX + "px";
  anneauCurseur.style.top = anneauY + "px";
  requestAnimationFrame(animerAnneau);
})();

const barreProgression = document.getElementById("barre-progression");
const navbar = document.getElementById("barre-navigation");
const contenuHero = document.querySelector(".contenu-hero");

window.addEventListener("scroll", () => {
  const pourcentage = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
  barreProgression.style.width = pourcentage + "%";

  navbar.classList.toggle("defilement", window.scrollY > 40);

  if (contenuHero && window.scrollY < window.innerHeight) {
    contenuHero.style.transform = `translateY(${window.scrollY * 0.15}px)`;
    contenuHero.style.opacity = String(1 - window.scrollY / (window.innerHeight * 0.7));
  }
});

const observateur = new IntersectionObserver(
  (entrees) => {
    entrees.forEach((entree) => {
      if (entree.isIntersecting) {
        entree.target.classList.add("visible");
      }
    });
  },
  { threshold: 0.1 }
);

document.querySelectorAll(".apparition").forEach((element) => {
  observateur.observe(element);
});

document.getElementById("bouton-menu").addEventListener("click", () => {
  const liensNav = document.querySelector(".liens-nav");
  if (!liensNav) return;

  const estOuvert = liensNav.style.display === "flex";

  Object.assign(liensNav.style, {
    display: estOuvert ? "none" : "flex",
    flexDirection: "column",
    position: "absolute",
    top: "70px",
    right: "5vw",
    background: "var(--couleur-surface2)",
    padding: "20px",
    border: "1px solid var(--couleur-bordure)",
    gap: "20px",
    zIndex: "999",
  });
});

document.getElementById("bouton-envoyer").addEventListener("click", function () {
  const texteOriginal = this.textContent;

  this.textContent = "ENVOI EN COURS...";
  this.style.opacity = "0.6";

  setTimeout(() => {
    this.textContent = "✓ MESSAGE ENVOYÉ";
    this.style.opacity = "1";
    this.style.background = "var(--couleur-accent3)";

    setTimeout(() => {
      this.textContent = texteOriginal;
      this.style.background = "var(--couleur-accent)";
    }, 3000);
  }, 1500);
});
