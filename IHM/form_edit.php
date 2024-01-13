<!-- IHM/form_edit.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modifier un visiteur</title>
</head>
<body>
    <h1>Modifier un visiteur</h1>

    <form method="post" action="../Gestion_Actions/modifier.php">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $visiteur['nom']; ?>" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $visiteur['prenom']; ?>" required><br>

        <label for="email">Adresse e-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo $visiteur['email']; ?>" required><br>

        <input type="hidden" name="id" value="<?php echo $visiteur['id']; ?>">
        <input type="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>
