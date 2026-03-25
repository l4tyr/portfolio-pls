<?php
$page_active = "diapalema";
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DIAPALEMA — Aide en chemin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
  
  <link rel="stylesheet" href="css/diapalema.css" />
</head>
<body>

  
  <?php include "includes/entete.php"; ?>

  
  <section id="haut">
    <div class="fond-hero"></div>
    <div class="grille-carte"></div>

    <div class="contenu-hero">
      <div class="etiquette-hero">🛣️ Aide en chemin</div>

      <h1 class="titre-hero">
        Trouvez de l'aide<br />
        <span>où que vous soyez</span>
      </h1>

      <p class="sous-titre-hero">
        DIAPALEMA connecte instantanément les personnes en difficulté
        avec les professionnels disponibles les plus proches au Sénégal.
      </p>

      <div class="actions-hero">
        <a href="#services" class="bouton-principal">Découvrir les services</a>
        <a href="#appel-action" class="bouton-secondaire">Devenir prestataire</a>
      </div>
    </div>

    
    <div class="zone-carte">
      <div class="carte-flottante principale">
        <div class="fond-fausse-carte">
          <div class="grille-fausse-carte"></div>
          
          <div class="fausse-route h"></div>
          <div class="fausse-route v"></div>
          <div class="fausse-route h2"></div>
          <div class="fausse-route h3"></div>
          
          <div class="epingle" style="top:40%;left:35%">
            <div class="corps-epingle vert"><span>📍</span></div>
            <div class="bulle-epingle" style="color:#00c853">Vous</div>
          </div>
          <div class="epingle" style="top:20%;left:55%">
            <div class="corps-epingle orange"><span>🔧</span></div>
            <div class="bulle-epingle">Mécanicien</div>
          </div>
          <div class="epingle" style="top:60%;left:60%;animation-delay:1s">
            <div class="corps-epingle bleu"><span>🏥</span></div>
            <div class="bulle-epingle">Médecin</div>
          </div>
        </div>
        <div class="infos-carte">
          <div class="en-tete-carte">
            <div class="titre-carte">Professionnel trouvé</div>
            <div class="badge-vert">En ligne</div>
          </div>
          <div class="ligne-pro">
            <div class="avatar-pro">🔧</div>
            <div class="info-pro">
              <div class="nom">Amadou Diallo</div>
              <div class="distance">0.8 km · ~12 min</div>
            </div>
          </div>
          <div class="badges-stats">
            <div class="badge-stat">⭐ 4.9</div>
            <div class="badge-stat">✅ 127 missions</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section id="services">
    <div class="en-tete-section">
      <div class="etiquette-section">✦ Nos services</div>
      <h2 class="titre-section apparition">Tout type d'aide,<br />en quelques minutes.</h2>
      <p class="sous-titre-section apparition">
        De la panne mécanique à l'urgence médicale, DIAPALEMA couvre tous vos besoins.
      </p>
    </div>

    <div class="grille-services">
      
      <div class="carte-service apparition" onclick="allerVersService('Mécanicien')">
        <div class="emoji-service">🔧</div>
        <div class="nom-service">Mécanicien</div>
        <div class="description-service">Panne de voiture ou moto, réparation rapide sur place.</div>
      </div>
      <div class="carte-service apparition" onclick="allerVersService('Médecin')">
        <div class="emoji-service">🏥</div>
        <div class="nom-service">Médecin</div>
        <div class="description-service">Consultation urgente à domicile ou en clinique proche.</div>
      </div>
      <div class="carte-service apparition" onclick="allerVersService('Électricien')">
        <div class="emoji-service">⚡</div>
        <div class="nom-service">Électricien</div>
        <div class="description-service">Panne électrique, installation ou dépannage urgent.</div>
      </div>
      <div class="carte-service apparition" onclick="allerVersService('Plombier')">
        <div class="emoji-service">🚿</div>
        <div class="nom-service">Plombier</div>
        <div class="description-service">Fuite d'eau, canalisation bouchée, réparation rapide.</div>
      </div>
      <div class="carte-service apparition" onclick="allerVersService('Serrurier')">
        <div class="emoji-service">🔑</div>
        <div class="nom-service">Serrurier</div>
        <div class="description-service">Porte bloquée ou clé perdue, intervention immédiate.</div>
      </div>
      <div class="carte-service apparition" onclick="allerVersService('Remorqueur')">
        <div class="emoji-service">🚗</div>
        <div class="nom-service">Remorquage</div>
        <div class="description-service">Véhicule en panne sur la route, dépannage et remorquage.</div>
      </div>
    </div>
  </section>

  
  <section id="carte-recherche">
    <div class="en-tete-section">
      <div class="etiquette-section">✦ Recherche</div>
      <h2 class="titre-section apparition">Trouvez un pro<br />près de vous.</h2>
    </div>

    <div class="contenu-carte-recherche">

      
      <div>
        <div class="barre-recherche">
          <input type="text" class="champ-recherche" placeholder="Ex: mécanicien, médecin..." />
          <button class="bouton-rechercher" onclick="afficherNotification('🔍 Recherche en cours...')">
            Rechercher
          </button>
        </div>

        <div class="liste-resultats">

          
          <div class="carte-resultat" onclick="ouvrirModal('Amadou Diallo', 'Mécanicien Auto', '🔧', '0.8 km', '~12 min')">
            <div class="haut-resultat">
              <div class="avatar-resultat" style="background:rgba(255,109,0,0.1)">🔧</div>
              <div>
                <div class="nom-resultat">Amadou Diallo</div>
                <div class="metier-resultat">Mécanicien Auto</div>
              </div>
            </div>
            <div class="meta-resultat">
              <div class="distance-resultat">📍 0.8 km</div>
              <div class="etoiles">★★★★★ 4.9</div>
            </div>
            <div class="actions-resultat">
              <button class="bouton-appeler" onclick="event.stopPropagation(); ouvrirModal('Amadou Diallo','Mécanicien Auto','🔧','0.8 km','~12 min')">
                📞 Contacter
              </button>
              <button class="bouton-message">💬</button>
            </div>
          </div>

          
          <div class="carte-resultat" onclick="ouvrirModal('Ibrahima Fall', 'Mécanicien Moto', '🔧', '1.2 km', '~18 min')">
            <div class="haut-resultat">
              <div class="avatar-resultat" style="background:rgba(255,109,0,0.1)">🔧</div>
              <div>
                <div class="nom-resultat">Ibrahima Fall</div>
                <div class="metier-resultat">Mécanicien Moto</div>
              </div>
            </div>
            <div class="meta-resultat">
              <div class="distance-resultat">📍 1.2 km</div>
              <div class="etoiles">★★★★☆ 4.6</div>
            </div>
            <div class="actions-resultat">
              <button class="bouton-appeler" onclick="event.stopPropagation(); ouvrirModal('Ibrahima Fall','Mécanicien Moto','🔧','1.2 km','~18 min')">
                📞 Contacter
              </button>
              <button class="bouton-message">💬</button>
            </div>
          </div>

          
          <div class="carte-resultat" onclick="ouvrirModal('Dr. Fatou Diop', 'Médecin généraliste', '🏥', '1.5 km', '~20 min')">
            <div class="haut-resultat">
              <div class="avatar-resultat" style="background:rgba(21,101,192,0.1)">🏥</div>
              <div>
                <div class="nom-resultat">Dr. Fatou Diop</div>
                <div class="metier-resultat">Médecin généraliste</div>
              </div>
            </div>
            <div class="meta-resultat">
              <div class="distance-resultat">📍 1.5 km</div>
              <div class="etoiles">★★★★★ 5.0</div>
            </div>
            <div class="actions-resultat">
              <button class="bouton-appeler" onclick="event.stopPropagation(); ouvrirModal('Dr. Fatou Diop','Médecin généraliste','🏥','1.5 km','~20 min')">
                📞 Contacter
              </button>
              <button class="bouton-message">💬</button>
            </div>
          </div>

        </div>
      </div>

      
      <div class="zone-carte-visuelle">
        <div class="fond-carte-visuelle">
          <div class="grille-fausse-carte"></div>
          <div class="fausse-route h"></div>
          <div class="fausse-route v"></div>
          <div class="texte-carte-centre">🗺️</div>
        </div>
      </div>

    </div>
  </section>

  
  <section id="temoignages">
    <div class="en-tete-section">
      <div class="etiquette-section">✦ Témoignages</div>
      <h2 class="titre-section apparition">Ce qu'ils disent</h2>
      <p class="sous-titre-section apparition">
        Des milliers de Sénégalais utilisent DIAPALEMA au quotidien.
      </p>
    </div>

    <div class="grille-temoignages">
      <div class="carte-temoignage apparition">
        <div class="etoiles-temoignage">★★★★★</div>
        <p class="texte-temoignage">
          "J'étais en panne à 22h sur la route de Thiès. En 5 minutes j'avais
          un mécanicien qui arrivait. DIAPALEMA m'a sauvé !"
        </p>
        <div class="auteur-temoignage">
          <div class="avatar-temoignage">O</div>
          <div>
            <div class="nom-auteur">Ousmane Diallo</div>
            <div class="ville-auteur">Thiès, Sénégal</div>
          </div>
        </div>
      </div>

      <div class="carte-temoignage apparition" style="transition-delay:0.15s">
        <div class="etoiles-temoignage">★★★★★</div>
        <p class="texte-temoignage">
          "Mon fils a eu une crise, je ne savais pas quoi faire. DIAPALEMA m'a
          connectée à un médecin en moins de 10 minutes. Merci infiniment."
        </p>
        <div class="auteur-temoignage">
          <div class="avatar-temoignage">A</div>
          <div>
            <div class="nom-auteur">Aissatou Sow</div>
            <div class="ville-auteur">Dakar, Sénégal</div>
          </div>
        </div>
      </div>

      <div class="carte-temoignage apparition" style="transition-delay:0.3s">
        <div class="etoiles-temoignage">★★★★★</div>
        <p class="texte-temoignage">
          "Panne électrique en pleine nuit, j'ai trouvé un électricien
          disponible à 800m de chez moi. Problème résolu en 30 minutes !"
        </p>
        <div class="auteur-temoignage">
          <div class="avatar-temoignage">M</div>
          <div>
            <div class="nom-auteur">Mamadou Ndiaye</div>
            <div class="ville-auteur">Saint-Louis, Sénégal</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section id="appel-action">
    <div class="contenu-cta">
      <div class="etiquette-section" style="justify-content:center; margin-bottom:16px">
        ✦ Rejoindre DIAPALEMA
      </div>
      <h2 class="titre-cta apparition">
        Prêt à aider<br />ou à être <span>aidé ?</span>
      </h2>
      <p class="sous-titre-cta apparition">
        Que vous soyez professionnel voulant proposer vos services ou citoyen
        cherchant de l'aide — DIAPALEMA est pour vous.
      </p>
      <div class="formulaire-inscription apparition">
        <input type="tel" id="champ-telephone" class="champ-telephone" placeholder="Votre numéro de téléphone" />
        <button class="bouton-inscription" id="bouton-inscription">S'inscrire</button>
      </div>
    </div>
  </section>

  
  <?php include "includes/pied-page.php"; ?>

  
  <div id="modal">
    <div class="contenu-modal">
      <button class="bouton-fermer-modal" onclick="fermerModal()">✕</button>
      <h3 id="modal-titre" style="font-size:18px; font-weight:700; margin-bottom:20px; color:#0d1f0f">Contacter</h3>
      <div class="profil-modal">
        <div class="avatar-modal" id="modal-avatar">🔧</div>
        <div>
          <div class="nom-modal" id="modal-nom">Nom</div>
          <div class="metier-modal" id="modal-metier">Métier</div>
        </div>
      </div>
      <div class="infos-modal">
        <div class="info-modal-item">
          <div class="info-modal-label">Distance</div>
          <div class="info-modal-valeur" id="modal-distance">—</div>
        </div>
        <div class="info-modal-item">
          <div class="info-modal-label">Arrivée estimée</div>
          <div class="info-modal-valeur" id="modal-temps">—</div>
        </div>
      </div>
      <div class="actions-modal">
        <button class="bouton-appeler-modal" onclick="appelerPro()">📞 Appeler maintenant</button>
        <button class="bouton-message-modal" onclick="fermerModal(); afficherNotification('💬 Message envoyé !')">💬 Message</button>
      </div>
    </div>
  </div>

  
  <div id="notification"></div>

  
  <script src="js/diapalema.js"></script>

</body>
</html>

