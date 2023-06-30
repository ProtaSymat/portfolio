<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'portfolio';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}
//ajouter dans inc/connexion.php
$id_projet = $_GET['id'];

// Requête pour récupérer les détails du projet avec l'ID correspondant
$query = "SELECT * FROM projet WHERE id = $id_projet";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Erreur de requête : ' . mysqli_error($conn));
}

// Vérifier si le projet existe
if (mysqli_num_rows($result) > 0) {
    $projet = mysqli_fetch_assoc($result);
    $title = $projet['titre'];

    // Inclure le HTML personnalisé avec les balises PHP pour afficher les valeurs
    include 'project-details-template.php';
} else {
    echo 'Le projet demandé n\'existe pas.';
}

mysqli_close($conn);
?>
