<?php 
include('config.php'); 
session_start(); 
// Itha mafammach user, yarja3 lel connexion
if(!isset($_SESSION['nom_user'])) { header("Location: connexion.php"); }
?>
<!DOCTYPE html>
<html>
<head><title>Gestion d'une Librairie</title></head>
<body>
    <h1>Gestion d'une Librairie</h1>
    <fieldset>
        <legend style="color: blue;">Utilisateur connecté</legend>
        <p style="text-align: right;"><b><?php echo $_SESSION['nom_user']; ?></b> (<a href="deconnexion.php">déconnexion</a>)</p>
    </fieldset>

    <h3>Liste des Catégories</h3>
    <table border="1" width="100%">
        <tr style="background: #eee;">
            <th>ID</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM categorie");
        while($row = mysqli_fetch_assoc($res)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['titre']}</td>
                    <td><a href='ListeLivres.php?id_cat={$row['id']}'>Liste des Livres</a></td>
                  </tr>";
        }
        ?>
    </table>
    <br><a href="AjoutLivre.php">Ajouter un Livre</a>
</body>
</html>