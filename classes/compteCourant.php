<?php


/**
 * compte bancaire herite (compte)
 * 
 * 
 */

class CompteCourant extends Compte
{


    private $decouvert;


/**
 * Constructeur de compte courant
 *
 * @param string $nom nom du titulaire
 * @param float $montant montant du solde a louverture
 * @param integer $decouvert decouvert autorisé
 */
    public function __construct(string $nom, float $montant ,int $decouvert)
    {

          //on transfere les information nécessaire au contructeur de comte

          parent::__construct($nom,$montant);


        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        Return $this->decouvert;
    }
    
    public function setDecouvert(int $montant): self
    {
        if ($montant>=0 ){
            $this->decouvert =$montant;
        }
        return $this;
    }



    public function retire(float $montant)
    {
        //on verifie si le decouvert permet le reté

        if ($montant > 0 && $this->solde -$montant >= -$this->decouvert){
            $this->solde -= $montant;

        }else{
            echo' solde  insuffisant';
        }
    }


}

