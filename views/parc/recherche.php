<h2><a>Affichage des Machines</a></h2>
<?php 
if (isset($record[0])) { //si il existe des machines
	echo "<table border=1 width=\"100%\">";
	$liste_indices=array_keys((array)$record[0]);
	echo "<tr>";
	while($indice=each($liste_indices))    {   
		 echo "<th>";   
		 echo $indice['value'];    
		 echo "</th>";   
	}
	echo "</tr>";

	foreach((array)$record as $cle_tableau=>$ligne)    {    
		 echo "<tr>";   
		 foreach($ligne as $cle=>$valeur)        {        
			echo "<td align=center>";        
			echo $valeur;        
			echo "</td>";       
		 }  
		 echo "</tr>";    
	}
	echo "</table>";
}
else {
	echo "Il n'existe pas de machines suivant vos critères.";
}	
 ?>