<?php
  $pageTitle = "Qui suis-je ?";
  include ('inc/header.php'); ?>
<body class="bg-secondary body-presentation">
    <section class="d-flex intro-div">
    <div class="partie-logo">
        <img class="presentation-img" src="/asset/image/img/logo-ascii.png">
    </div>
    <div class="text-primary d-flex partie-texte">
      <div class="resume-box">
        <h6 class="intro-titre effect-shine drop-in">SYMAT</h6>
        <p class="intro-resume">Bonjour ! Je suis 
          <span class="anim-span" data-scroll id="highlight">Mathys</span>
          , developpeur <span class="anim-span" data-scroll id="highlight">
            front-end, </span>
            made in France. Passionné de <span class="anim-span" data-scroll id="highlight">cinéma, de web et de graphisme</span>, j'apporte ma touche personnelle et ma <span class="anim-span" data-scroll id="highlight">créativité</span> à chacun de mes projets.</br></br> Mon objectif est de créer des expériences web uniques où <span class="anim-span" data-scroll id="highlight">fonctionnalité et design</span>  se marient <span class="anim-span" data-scroll id="highlight">harmonieusement.</span></br></p>
        <div class="me-box">
            <div class="pres-icon">
              <a href="cv.php" target="_blank">
              <div class="pres-image-wrapper">
                <img src="/asset/image/img/pdf-img.png">
              </div>
              <div class="pres-info">
                <span class="pres-name">Mon CV HTML<i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></span>
              </div>
              </a>
            </div>
            <div class="pres-icon">
              <a href="mailto:giraultmathys@gmail.com">
              <div class="pres-image-wrapper">
                <img src="/asset/image/img/mail-img.png">
              </div>
              <div class="pres-info">
                <span class="pres-name">giraultmathys@gmail.com<i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></span>
              </div>
              </a>
            </div>
        </div>
      </div>
      <div class="tech-box">
        <p>MES TECHNOS</p>
        <div class="desc-tech">
          <img src="/asset/image/img/php-img.png">
          <p>PhP</p>
        </div>
        <div class="desc-tech">
          <img src="/asset/image/img/cakephp-img.png">
          <p>Framework CakePhP</p>
        </div>
        <div class="desc-tech">
          <img src="/asset/image/img/htmlcss-img.png">
          <p>HTML & CSS</p>
        </div>
        <div class="desc-tech">
          <img src="/asset/image/img/js-img.png">
          <p>Javascript</p>
        </div>
      </div>
    </div>
    </section>
</body>
<?php include('inc/footer.php'); ?>
