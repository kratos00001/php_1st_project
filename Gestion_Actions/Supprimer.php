<?php

// Gestion_Actions/supprimer.php
require_once('../Acces_BD/visiteur.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    Supprimer($id);

    header("Location: ../IHM/affichage.php");
    exit();
}

?>
