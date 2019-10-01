<?php
class Parc_model extends Model{ 
   var $table = 'ordinateurs'; //nom de la table
  
   //retrourne enregistrements en fonction de leur adresse IP
   function getByIP($ip){        
		return $this->query("SELECT id, ip, mac, nom, salle FROM ".$this->table." WHERE ip LIKE '".$ip."%' ORDER BY ip ASC");
   }
   
   //retrourne enregistrements en fonction de leur adresse IP
   function getNombrePCSalle(){        
		return $this->query("SELECT count(id) as nombre, salle FROM ".$this->table." GROUP BY Salle order by salle LIMIT 8");
   }
   
  }
 ?>