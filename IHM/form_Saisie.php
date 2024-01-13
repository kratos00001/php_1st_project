<!-- IHM/form_saisie.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Saisie de visiteur</title>
</head>
<body>
    <h1>Saisie de visiteur</h1>
    <form action="../Gestion_Actions/ajouter.php" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="email" name="email" placeholder="Adresse e-mail">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
