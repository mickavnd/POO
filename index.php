<?php

require_once'classes/compte.php';

require_once'classes/compteCourant.php';
require_once 'classes/compteEpargne.php';

$compte1= new CompteCourant('micka', 500,200);

$compte1->retire(200);
echo "<pre>";
var_dump($compte1);
echo "</pre>";

//on ecrit dans la propriete 


$compteEpargne = new CompteEpargne('marion',200,10);

echo "<pre>";
var_dump($compteEpargne);
echo"</pre>";

$compteEpargne->verserInterets();

echo "<pre>";
var_dump($compteEpargne);
echo"</pre>";



?>


























<!--   exo visibilité-->


<!--  <p>?=$compte1->voirSolde()?></p> -->


<?php
//$compte1= new compte('micka',300);
// $compte1 -> setTitulaire("mickael");
// echo"le tau dintert du compte est : "
;
 
// echo $compte1; -->

// $compte1->deposer(100);

// $compte1->retire(100); 


// //var_dump($compte1);
// echo $compte1-> getTitulaire()

// $compte2 =new compte('jerm') ;

// $compte2->solde =300;

//  var_dump($compte2);

//on depose de largent

