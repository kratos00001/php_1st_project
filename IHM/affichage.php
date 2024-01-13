<!-- IHM/affichage.php -->
<?php
require_once('../Acces_BD/visiteur.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Liste des visiteurs</title>
    <style>
        /* Add some styling for better visibility */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Liste des visiteurs</h1>

    <a href="form_saisie.php">+</a>

    <?php
    $resultat = Lister();

    if ($resultat->rowCount() > 0):
    ?>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse e-mail</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($visiteur = $resultat->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?php echo $visiteur['id']; ?></td>
                            <td><?php echo $visiteur['nom']; ?></td>
                            <td><?php echo $visiteur['prenom']; ?></td>
                            <td><?php echo $visiteur['email']; ?></td>
                            <td><a href="../Gestion_Actions/form_edit.php?id=<?php echo $visiteur['id']; ?>">Edit</a></td>
                            <td><a href="../Gestion_Actions/supprimer.php?id=<?php echo $visiteur['id']; ?>">Sup</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p>Il n'y a aucun visiteur enregistré.</p>
    <?php endif; ?>

</body>
</html>
