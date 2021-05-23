
<?php
/**
 * Objet Compte bancaire
 */

abstract class Compte
{

    //proprieté

/**
 * titulaire du compte
 *
 * @var string
 */
 private $titulaire;
 /**
  * solde du compte
  *
  * @var float
  */
 protected $solde;

//constantes

 //methode Magique
 
/**
 * constructeur du compte bancaire
 *
 * @param string $nom du titulaire
 *  * @param float $montant du solde
 */
 public function __construct(string $nom,float $montant =100 )
 {
     //on attribue le nom a la  propriete titulaire de linstance créé
     $this->titulaire= $nom;
     $this->solde =$montant ;

 }




 public function __toString()
 {
     return $this->titulaire;
 }

 //accesseurs

 /**
  * getter de titulaire -retourne la valeur du titlaire
  *
  * @return string
  */
 public function getTitulaire():string
 {
     
    return $this->titulaire;
 }


 public function getSolde(): float
 {
 return $this->solde;
 }


//setter permet de modifier le nom


/**
 *modifie le nom du titulaire et retourn lobjet
 *
 * @param string $nom
 * @return compte
 */
public function setTitulaire(string $nom):self
{
    //on verifie si on a un titulaire
    if($nom !=""){
        $this->titulaire = $nom;
    }  
    return $this;
}

/**
 * retourne le solde du compt
 *
 * @param float $montant 
 * @return self
 */
public function setSolde(float $montant):self
{
    if($montant >= 0){
    $this->solde=$montant;
    }
    return $this;
}



/**
 * deposé de l'argent
 *
 * @param float $montant est positif
 * @return void
 */
 public function deposer( float $montant)
 {
  //on verifier si le montent est positif

  if($montant > 0){

   $this->solde +=$montant;
  }

 }

public function voirSolde()
{

return"bonjour $this->titulaire il te reste $this->solde ";

}

/**
 * retitr un montant du solde du compte
 *
 * @param float $montant a retie
 * @return void
 */
public function retire(float $montant)
{
//on verfiie le montant et le solde

if($montant > 0 && $this-> solde >=$montant){
    $this->solde -= $montant;
}else{

    echo"montant invalide ou solde insuffisant";
}
//  echo $this->decouvert();

}

// private function decouvert()
// {
//     if($this->solde<0){
//         return "vous etes a decouvert"; 
//     }else {
       
//         return "vous n'ete pas a decouvert";
//     }

// }






}