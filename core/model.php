<?php /**  * Objet Model  * Permet les interactions avec la base de donnees  * */ 

class Model{   
 public $table;    
 public $id;     
 private static $base;
 private static $serveur='127.0.0.1';
 private static $bdd='parc_info'; //nom de la base de données  		
 private static $user='root' ;    		
 private static $mdp='' ;	
 
 public function __construct()
 {
		//connexion à la base de données
		Model::$base = mysqli_connect(Model::$serveur,Model::$user,Model::$mdp,Model::$bdd); 
 }
 
 public function __destruct(){
	Model::$base = null;
 }

/**      * Permet de recuperer plusieurs lignes dans la BDD      * @param $data conditions de recuperations      * */    
 public function find($data=array()){   
	$conditions = "1=1";   
	$fields = "*";           
	$limit = "";             
	$order = "id DESC"; 
	extract($data);    // Importe les variables dans la table des symboles.        
	if(isset($data["limit"])){ 
		$limit = "LIMIT ".$data["limit"]; 
	}          
	$sql = "SELECT ".$fields." FROM ".$this->table." WHERE ".$conditions." ORDER BY ".$order." ".$limit;           
	$req = mysqli_query(Model::$base, $sql) or die(mysqli_error(Model::$base)."<br/> => ".$sql);           
	$d = array(); 
	while($data = mysqli_fetch_assoc($req)){ 
		$d[] = $data;             
	}
	return $d;     
} 

 /**      * Permet de faire une requete complexe      * @param $sql Requete a effectuer      * */        
 public function query($sql){ 
  $req = mysqli_query(Model::$base, $sql) or die(mysqli_error(Model::$base)."<br/> => ".$sql);             
  $d = array();            
  while($data = mysqli_fetch_assoc($req)){               
	$d[] = $data;             
  } 
  return $d;        
 } 
 
  /**      * Permet de charger un model      * @param $name Nom du modele a charger      * */     
  static function load($name){        
	require("$name.php");        
	return new $name();     
  }
} ?>
 