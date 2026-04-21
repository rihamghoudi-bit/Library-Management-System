<?php 
include('config.php'); 
session_start();
$id_cat = $_GET['id_cat'];
?>
<!DOCTYPE html>
<html>
<head><title>Liste des Livres</title></head>
<body>
    <h1>Gestion d'une Librairie</h1>
    <fieldset>
        <legend style="color: blue;">Utilisateur connecté</legend>
        <p style="text-align: right;"><b><?php echo $_SESSION['nom_user']; ?></b> (<a href="deconnexion.php">déconnexion</a>)</p>
    </fieldset>

    <h3>Liste des Livres</h3>
    <table border="1" width="100%">
        <tr style="background: #eee;">
            <th>ID</th>
            <th>Titre</th>
            <th>Quantité</th>
        </tr>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM livre WHERE id_categorie = $id_cat");
        while($row = mysqli_fetch_assoc($res)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['titre']}</td>
                    <td>{$row['quantite']}</td>
                  </tr>";
        }
        ?>
    </table>
    <br><a href="accueil.php">Retour aux catégories</a>
</body>
</html>