<?php
$nom      = isset($_GET['nom'])      ? $_GET['nom']      : '';
$prenom   = isset($_GET['prenom'])   ? $_GET['prenom']   : '';
$email    = isset($_GET['email'])    ? $_GET['email']    : '';
$genre    = isset($_GET['genre'])    ? $_GET['genre']    : '';
$quartiers = isset($_GET['quartiers']) ? $_GET['quartiers'] : '';
$message  = isset($_GET['message'])  ? $_GET['message']  : '';

$conn = mysqli_connect('localhost', 'root', '', 'meknesdb');

if (!$conn) {
    die("Echec : " . mysqli_connect_error());
}

$sql = "INSERT INTO opinions (nom, prenom, email, genre, quartiers, message) 
        VALUES ('$nom', '$prenom', '$email', '$genre', '$quartiers', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Enregistrement a été effectué avec succès...</h2>";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<a href="javascript:history.back()">Essayez à nouveau</a><br>
<a href="opinions.php">Voir les autres opinions</a>