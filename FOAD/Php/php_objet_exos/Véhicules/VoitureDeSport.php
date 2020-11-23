<?php

/**
 * Class VoitureDeSport
 * @author jjeanniard@jonathan-jeanniard.fr
 * @license Unlicensed
 */
class VoitureDeSport extends Voiture
{
    public function __construct(string $marque, string $modele, string $marqueMoteur, int $vitessMax, int $poids = 1000)
    {
        parent::__construct($marque, $modele, $marqueMoteur, $vitessMax, $poids);

        if($this->getMarque() !== $this->moteur->getMarque()){
            throw new Exception("La marque de la voiture et du moteur sont different!");
        }
    }

    public function vitesseMax() : int
    {
        return $this->moteur->getVitessMax() - ($this->getPoids() * 0.05);
    }
}