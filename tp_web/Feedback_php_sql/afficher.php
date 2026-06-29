    <?php
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $email = $_GET['email'];
    $genre = $_GET['genre'];
    $quartiers = $_GET['quartiers'];
    $message = $_GET['message'];
    echo "<ul>";
    echo "<li>Nom: $nom</li>";
    echo "<li>Prenom: $prenom</li>";
    echo "<li>Email: $email</li>";
    echo "<li>Genre: $genre</li>";
    echo "<li>Quartiers: $quartiers</li>";
    echo "<li>Votre message: $message</li>";
    echo "</ul>";
    ?>
    <a href="javascript:history.back()">Essayez à nouveau</a>