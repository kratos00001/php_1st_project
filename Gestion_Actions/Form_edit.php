<?php

// Gestion_Actions/form_edit.php
require_once('../Acces_BD/visiteur.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $visiteur = Rechercher($id);
}

include('../IHM/form_edit.php');

?>
