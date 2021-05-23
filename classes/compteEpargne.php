<?php

/**
 * 
 * Compte avec taux dinteret
 */

class CompteEpargne extends Compte
{

private $taux_interets;


/**
 * constructeur du compte epargne
 *
 * @param string $nom nom du titulaire
 * @param float $montant moantant du solde a louverture
 * @param integer $taux taux d'interet
 */
public function __construct(string $nom, float $montant, int $taux)
{
    //on  transfezre les valeur necessaires au constructeur parent
      
    parent::__construct($nom,$montant);
 
    $this->taux_interets = $taux ;
    
}



/**
 * Get the value of taux_interets
 */ 
public function getTauxInterets():int
{
return $this->taux_interets;
}

/**
 * Set the value of taux_interets
 *
 * @return  self
 */ 
public function setTauxInterets(int $taux_interets):self
{
    if($taux_interets >=0){

       $this->taux_interets = $taux_interets; 
    }


return $this;
}


public function verserInterets()
{
  $this->solde= $this->solde +($this->solde * $this->taux_interets/100);

}


}