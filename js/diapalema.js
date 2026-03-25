
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

function ouvrirModal(nom, metier, emoji, distance, tempsArrivee) {
  document.getElementById("modal-nom").textContent = nom;
  document.getElementById("modal-metier").textContent = metier;
  document.getElementById("modal-avatar").textContent = emoji;
  document.getElementById("modal-distance").textContent = distance + " de vous";
  document.getElementById("modal-temps").textContent = tempsArrivee;
  document.getElementById("modal-titre").textContent = "Contacter " + nom.split(" ")[0];

  document.getElementById("modal").classList.add("ouvert");
}

function fermerModal() {
  document.getElementById("modal").classList.remove("ouvert");
}

document.getElementById("modal").addEventListener("click", function (evenement) {
  if (evenement.target === this) fermerModal();
});

function appelerPro() {
  fermerModal();
  afficherNotification("📞 Appel en cours...");
}

function afficherNotification(message) {
  const notification = document.getElementById("notification");
  notification.textContent = message;
  notification.classList.add("affiche");

  setTimeout(() => notification.classList.remove("affiche"), 3000);
}

function allerVersService(nomService) {
  document.getElementById("carte-recherche").scrollIntoView({ behavior: "smooth" });
  setTimeout(() => afficherNotification("🔍 Recherche de " + nomService + "s..."), 600);
}

document.querySelectorAll(".carte-resultat").forEach((carte) => {
  carte.addEventListener("click", function () {
    document.querySelectorAll(".carte-resultat").forEach((c) => c.classList.remove("actif"));
    this.classList.add("actif");
  });
});

document.getElementById("bouton-inscription").addEventListener("click", () => {
  const telephone = document.getElementById("champ-telephone").value;

  if (telephone.trim() === "") {
    afficherNotification("⚠️ Veuillez entrer votre numéro");
    return;
  }

  afficherNotification("✅ Inscription envoyée !");
  document.getElementById("champ-telephone").value = "";
});
