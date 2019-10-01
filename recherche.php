<?php // Dispatcher secondaire 
require('common.php'); 
extract($_POST); // Importe les variables dans la table des symboles. Permet de mettre le contenu de $_POST['addip'] dans la variable $addip
$controller->recherche($addip); // action du controleur
?>