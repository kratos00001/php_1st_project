<?php

// Acces_BD/visiteur.php

require_once('Connexion.php');

function Ajouter($data) {
    global $bdd;

    $nom = $data['nom'];
    $prenom = $data['prenom'];
    $email = $data['email'];

    $sql = "INSERT INTO visiteurs (nom, prenom, email) VALUES (?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$nom, $prenom, $email]);
}

function Modifier($data) {
    global $bdd;

    $nom = $data['nom'];
    $prenom = $data['prenom'];
    $email = $data['email'];
    $id = $data['id'];

    $sql = "UPDATE visiteurs SET nom = ?, prenom = ?, email = ? WHERE id = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $id]);
}

function Supprimer($id) {
    global $bdd;

    $sql = "DELETE FROM visiteurs WHERE id = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
}

function Rechercher($id) {
    global $bdd;

    $sql = "SELECT * FROM visiteurs WHERE id = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);

    return $stmt->fetch();
}

function Lister() {
    global $bdd;

    $sql = "SELECT * FROM visiteurs ORDER BY id DESC";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    return $stmt;
}

?>
