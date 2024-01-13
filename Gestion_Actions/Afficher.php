<?php

// Gestion_Actions/afficher.php
require_once('../Acces_BD/visiteur.php');

$resultat = Lister();

include('../IHM/affichage.php');

?>
