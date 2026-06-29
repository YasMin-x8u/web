<?php
$genre =$_POST['genre'];
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$mdpConfirm = $_POST['mdpConfirm'];
$pays = $_POST['pays'];
echo"<ul>";
echo "<li> genre: $genre</li>";
echo "<li> nom: $nom</li>";
echo "<li> prenom: $prenom</li>";
echo "<li> age: $age</li>";
echo "<li> pseudo: $pseudo</li>";
echo "<li> mot de pass: $mdp</li>";
echo "<li> mot de pass confirm: $mdpConfirm</li>";
echo "<li> pays: $pays</li>";
echo"</ul>";
?>