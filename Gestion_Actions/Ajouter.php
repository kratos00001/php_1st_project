<?php

// Gestion_Actions/ajouter.php
require_once('../Acces_BD/visiteur.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    Ajouter(['nom' => $nom, 'prenom' => $prenom, 'email' => $email]);

    header("Location: ../IHM/affichage.php");
    exit();
}

?>
