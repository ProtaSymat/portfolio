<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'portfolio';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['your-name'];
    $prenom = $_POST['your-firstname'];
    $email = $_POST['your-email'];
    $sujet = $_POST['your-subject'];
    $message = $_POST['your-message'];

    $query = "INSERT INTO messages (nom, prenom, email, sujet, message) VALUES ('$nom', '$prenom', '$email', '$sujet', '$message')";

    if (mysqli_query($conn, $query)) {
        echo '<span class="message-yes">Données du formulaire insérées avec succès dans la base de données.</span>';
    } else {
        echo 'Erreur lors de l\'insertion des données du formulaire : ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<?php
  $pageTitle = "Formulaire de contact";
  include ('inc/header.php'); ?>
  <body class="bg-secondary">
  <section class="intro-div">
    <div class="text-light intro-text text-center">
      <div class="d-flex align-items-center justify-content-center drop-in">        
        <img class="img-mail" src="/asset/image/img/mail-img.png">
        <h6 class="contact-form">MESSAGE ME</h6>
      </div>
      <p class="whoami-desc">Besoin d'une réponse rapide ? Remplissez le formulaire ci-dessous et je vous répondrai dans les plus brefs délais. Votre satisfaction est ma priorité. À bientôt !</p>
    </div>
</section>
<div class="big-rect">
    <div class="small-rect">
    </div>
</div>
<form method="POST">
    <label>Nom</label>
        <input class="input-name" type="text" name="your-name" autocomplete="name" required>

    <label>Prénom</label>
        <input class="input-name" type="text" name="your-firstname" autocomplete="firstname" required>

    <label>Votre Adresse e-mail</label>
        <input class="input-name" type="email" name="your-email" autocomplete="email" required>

    <label>Sujet</label>
        <select class="input-other" name="your-subject" required>
            <option value="">Veuillez choisir un sujet</option>
            <option value="Collaboration professionnelle">Collaboration professionnelle</option>
            <option value="Demande de renseignements">Demande de renseignements</option>
            <option value="Proposition de projet">Proposition de projet</option>
            <option value="Feedback et témoignages">Feedback et témoignages</option>
            <option value="Opportunités professionnelles">Opportunités professionnelles</option>
        </select>

    <label>Votre message (optionnel)</label>
    <textarea class="input-other" name="your-message"></textarea>

    <input class="btn-submit" type="submit" value="ENVOYER">
</form>
  </body>
  <?php include('inc/footer.php'); ?>
