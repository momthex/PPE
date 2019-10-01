<?php 
class parc extends Controller {
     var $models = array('Parc_model');     
	 //Action index     
	 function index(){    
		$this->render('index');     //appel de la vue index.php
	 }
	 
	 function recherche($ip){         
		$d['record'] = $this->Parc_model->getByIP($ip); 		
		$this->set($d);        
		$this->render('recherche');    //appel de la vue recherche.php
	 } 
	 
	 //affichage du nombre de PC par salle (limité aux 8 premières)
	 function affiche(){         
		
		$d['record'] = $this->Parc_model->getNombrePCSalle();		 
		$nb_maximum = 0; //plus grand nombre de PC
		$val1=0; // nombre de PC dans une salle
		$val2=0; // numéro de la salle
		$tableau_PC = array(); //clé du tableau = n° de salle, valeur du tableau = nombre de PC dans la salle
		foreach($d['record'] as $cle=>$val) {
			$val1 = $val["nombre"]; 
			if ($val1 > $nb_maximum) {
				$nb_maximum = $val1;
			}
			$val2 = $val["salle"];
			$tableau_PC[$val2] = $val1; 
		}		

		$nombre_element = count($tableau_PC); //nombre d'élément dans le tableau
		
		$largeurImage = 450; 
		$hauteurImage = 400; 
		$image = imagecreate($largeurImage, $hauteurImage);         
		$blanc = imagecolorallocate($image, 255, 255, 255);  
		$noir = imagecolorallocate($image, 0, 0, 0);   
		$bleu = imagecolorallocate($image, 100, 100, 255);      

		// trait horizontal pour représenter l'axe des salles     
		imageline($image, 10, $hauteurImage-10, $largeurImage-10, $hauteurImage-10, $noir); 
		// Affichage du numéro des salles 
		for ($j=1; $j<=$nombre_element; $j++) { 
			imagestring($image, 0, $j*40, $hauteurImage-10, $j, $noir); 
		} 
		 
		// trait vertical représentant le nombre de PC 
		imageline($image, 10, 10, 10, $hauteurImage-10, $noir);

		// le nombre maximum de PC proportionnel à la hauteur de l'image
		$nb_maximum = $nb_maximum+1; //pour avoir un graphique un peu plus haut que le nombre maximum 
		// tracé des rectangles 
		for ($j=1; $j<=$nombre_element; $j++) { 
			$hauteurRectangle = round(($tableau_PC[$j]*$hauteurImage)/$nb_maximum); 
			imagefilledrectangle($image, $j*40-6, $hauteurImage-$hauteurRectangle, $j*40+8, $hauteurImage-10, $bleu); 
			imagestring($image, 0, $j*40-6, $hauteurImage-$hauteurRectangle-10, $tableau_PC[$j], $noir); 
		} 
		imagestring($image, 3, 0, 0, "Nombre de PC.", $noir);
		imagestring($image, 3, $largeurImage-100, $hauteurImage-30, "N° de salle.", $noir);
		imagepng($image, "./images/monimage.png");
		imagedestroy($image); 		 
		      
		 $this->render('affiche');   //appel de la vue affiche.php
	 } 
	 
	  function formulaire_recherche(){   
		$this->render('formulaire_recherche');    //appel de la vue formulaire_recherche.php
	  } 
}
 ?>