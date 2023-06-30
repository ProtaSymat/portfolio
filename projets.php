<?php
$host = 'localhost'; // Votre hôte de base de données
$username = 'root'; // Votre nom d'utilisateur de la base de données
$password = 'root'; // Votre mot de passe de la base de données
$database = 'portfolio'; // Le nom de votre base de données

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
?>

<?php
  $pageTitle = "Mes projets";
  include ('inc/header.php'); ?>
<body class="bg-secondary">
<section class="intro-div">
    <div class="text-light intro-text-projet text-center">
        <h6 class="contact" id="messenger"></h6>
        <p class="whoami-desc">Découvrez mon portfolio axé sur le front-end et le design. Explorez mes créations web et applications captivantes. Plongez dans mon univers visuel et laissez-vous inspirer par l'esthétique et la fonctionnalité.</p>
    </div>
</section>
<div class="big-rect">
    <div class="small-rect">
    </div>
</div>
<div class="space-project">
    <?php
    // ...
    $query = "SELECT * FROM projet";
    $result = mysqli_query($conn, $query);

    $projets = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $projets[] = $row;
    }
    ?>

    <?php
    foreach ($projets as $projet) {
        $id_projet = $projet['id'];
        $title = $projet['titre'];
        $subtitle = $projet['soustitre'];
        $paragraphe = $projet['paragraphe'];
        $thumbnail = $projet['thumbnail'];
        $bigimg = $projet['big-img'];
        $smallimg1 = $projet['small-img-1'];
        $smallimg2 = $projet['small-img-2'];
        $smallimg3 = $projet['small-img-3'];
        $eye = $projet['website'];
        $excerpt = $projet['excerpt'];

        include 'components/projet.php';
    }
    ?>
</div>
</body>
<?php include('inc/footer.php'); ?>