<?php 
session_start(); 

if(isset($_POST['btn_login'])) {
    // Nkhazznu el esm elli ktebtou toul fil session
    $_SESSION['nom_user'] = $_POST['username']; 
    header("Location: accueil.php");
    exit();
}
// Hna lezem nsakkrou el PHP 9bal ma nabdou el HTML
?> 

<!DOCTYPE html>
<html>
<head><title>Se connecter</title></head>
<body style="font-family: Arial;">
    <div style="border: 1px solid black; width: 400px; padding: 20px; margin: 100px auto;">
        <h2 style="text-align: center; border-bottom: 1px solid black; padding-bottom: 10px;"><i>Se connecter</i></h2>
        <form method="POST">
            <p>Username: <input type="text" name="username" style="float: right; width: 200px;" required></p><br>
            <p>Mot de passe: <input type="password" name="password" style="float: right; width: 200px;" required></p><br><br>
            <button type="submit" name="btn_login" style="background-color: orange; color: white; border: none; padding: 10px 20px; cursor: pointer; display: block; margin: 0 auto; font-weight: bold;">Se Connecter</button>
        </form>
    </div>
</body>
</html>