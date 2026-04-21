<?php 
include('config.php'); 
session_start(); 

if(isset($_POST['btn_ajouter'])) {
    $titre = $_POST['titre'];
    $qte = $_POST['qte'];
    $id_cat = $_POST['categorie'];

    $sql = "INSERT INTO livre (titre, quantite, id_categorie) VALUES ('$titre', $qte, $id_cat)";
    if(mysqli_query($conn, $sql)) {
        header("Location: accueil.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Ajouter d'un Livre</title></head>
<body>
    <h1>Gestion d'une Librairie</h1>
    <fieldset>
        <legend style="color: blue;">Utilisateur connecté</legend>
        <p style="text-align: right;"><b><?php echo $_SESSION['nom_user']; ?></b> (<a href="deconnexion.php">déconnexion</a>)</p>
    </fieldset>

    <h3>Ajouter d'un Livre</h3>
    <form method="POST">
        <fieldset>
            <legend style="color: blue;">Identification :</legend>
            <p>Titre : <br><input type="text" name="titre" style="width: 100%;" required></p>
            <p>Quantité : <br><input type="number" name="qte" style="width: 100%;" required></p>
            <p>Catégorie : <br>
                <select name="categorie" style="width: 100%;">
                    <?php
                    $res = mysqli_query($conn, "SELECT * FROM categorie");
                    while($row = mysqli_fetch_assoc($res)) {
                        echo "<option value='{$row['id']}'>{$row['titre']}</option>";
                    }
                    ?>
                </select>
            </p>
        </fieldset>
        <div style="margin-top: 10px; text-align: center;">
            <button type="submit" name="btn_ajouter">Ajouter</button>
            <button type="reset">Annuler</button>
        </div>
    </form>
</body>
</html>