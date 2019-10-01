<?php // code commun a tous les dispatchers
define('ROOT', '/');
define('WEBROOT', ''); // On inclut les fichiers de Core 
require(ROOT.'core/model.php'); 
require(ROOT.'core/controller.php'); //echo 'Connexion a la BDD'; 
require(ROOT.'controllers/parc.php'); // On initialise le controleur 
$controller = new parc();
?>