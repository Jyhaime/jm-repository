<?php


class Adresse
{
    private $adresse_id;
    private $numeros;
    private $rue;
    private $villes_villes_id;

    public function __construct(
        int $adresse_id,
        string $numeros,
        string $rue,
        string $villes_villes_id)
    
    {
        $this->adresse_id = $adresse_id;
        $this->numeros = $numeros;
        $this->rue = $rue;
        $this->villes_villes_id = $villes_villes_id;
    }



    /**
     * Get the value of adresse_id
     */ 
    public function getAdresse_id()
    {
        return $this->adresse_id;
    }

    /**
     * Set the value of adresse_id
     *
     * @return  self
     */ 
    public function setAdresse_id($adresse_id)
    {
        $this->adresse_id = $adresse_id;

        return $this;
    }

    /**
     * Get the value of numeros
     */ 
    public function getNumeros()
    {
        return $this->numeros;
    }

    /**
     * Set the value of numeros
     *
     * @return  self
     */ 
    public function setNumeros($numeros)
    {
        $this->numeros = $numeros;

        return $this;
    }

    /**
     * Get the value of rue
     */ 
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set the value of rue
     *
     * @return  self
     */ 
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get the value of villes_villes_id
     */ 
    public function getVilles_villes_id()
    {
        return $this->villes_villes_id;
    }

    /**
     * Set the value of villes_villes_id
     *
     * @return  self
     */ 
    public function setVilles_villes_id($villes_villes_id)
    {
        $this->villes_villes_id = $villes_villes_id;

        return $this;
    }
}