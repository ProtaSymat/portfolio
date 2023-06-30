<?php
  $pageTitle = "Détail du projet";
  include ('inc/header.php'); ?>
<body class="bg-secondary">
<a class="mobile-link" href="/projets.php" title="Revenir en arrière"><div class="btn-return">
      <i class="fa-sharp fa-solid fa-arrow-left"></i>
    </div></a>
  <section class="detail-project">
    <div class="project-title">
    <div>
  <h1><?php echo $projet['titre']; ?></h1>
  <?php if (empty($projet['website'])) : ?>
    <a title="Site Non disponible"><img src="/asset/image/img/crossed-eye.png"></a>
  <?php else : ?>
    <a target="_blank" title="Voir le projet" href="<?php echo $projet['website']; ?>"><img src="/asset/image/img/eye.png"></a>
  <?php endif; ?>
</div>
<p>Date de création du projet : <?php echo $projet['date']; ?></p>
</div>
    <div class="main-detail">
      <div class="img-section">
        <div class="image-section">
          <img class="big-img" src="<?php echo $projet['big-img']; ?>" alt="Image du projet">
        </div>
      </div>
    <div class="additional">
      <div class="additional-detail">
        <h6><?php echo $projet['soustitre']; ?></h6>
        <p><?php echo $projet['paragraphe']; ?></p>
        <p><?php echo $projet['technologie']; ?></p>
      </div>
      <div class="additional-images">
          <img src="<?php echo $projet['small-img-1']; ?>" alt="Image supplémentaire 1">
          <img src="<?php echo $projet['small-img-2']; ?>" alt="Image supplémentaire 2">
          <img src="<?php echo $projet['small-img-3']; ?>" alt="Image supplémentaire 3">
      </div>
    </div>
  </section>
</body>
<?php include('inc/footer.php'); ?>