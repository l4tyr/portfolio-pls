<?php
?>
<nav id="barre-navigation">
  <a href="index.php" class="logo-nav">PL<span>.</span></a>

  <ul class="liens-nav">
    <li><a href="index.php#a-propos" <?php echo ($page_active === 'portfolio') ? 'class="actif"' : ''; ?>>À propos</a></li>
    <li><a href="index.php#competences" <?php echo ($page_active === 'portfolio') ? 'class="actif"' : ''; ?>>Compétences</a></li>
    <li><a href="index.php#projet" <?php echo ($page_active === 'portfolio') ? 'class="actif"' : ''; ?>>Projet</a></li>
    <li><a href="index.php#parcours" <?php echo ($page_active === 'portfolio') ? 'class="actif"' : ''; ?>>Parcours</a></li>
    <li><a href="diapalema.php" <?php echo ($page_active === 'diapalema') ? 'class="actif"' : ''; ?>>DIAPALEMA</a></li>
  </ul>

  <a href="index.php#contact" class="bouton-contact">Contact</a>

  
  <button class="hamburger" id="bouton-menu">
    <span></span>
    <span></span>
  </button>
</nav>

