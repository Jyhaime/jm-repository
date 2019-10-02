<?php

class Villes
{
    private $villes_id;
    private $nom;
    private $code_postale;
    private $pays_pays_id;

    public function __construct(
        int $villes_id, 
        string $nom, 
        string $code_postale, 
        int $pays_pays_id)

    {
        $this->villes_id = $villes_id;
        $this->nom = $nom;
        $this->code_postale = $code_postale;
        $this->pays_pays_id = $pays_pays_id;
    }



    /**
     * Get the value of villes_id
     */ 
    public function getVilles_id()
    {
        return $this->villes_id;
    }

    /**
     * Set the value of villes_id
     *
     * @return  self
     */ 
    public function setVilles_id($villes_id)
    {
        $this->villes_id = $villes_id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of code_postale
     */ 
    public function getCode_postale()
    {
        return $this->code_postale;
    }

    /**
     * Set the value of code_postale
     *
     * @return  self
     */ 
    public function setCode_postale($code_postale)
    {
        $this->code_postale = $code_postale;

        return $this;
    }

    /**
     * Get the value of pays_pays_id
     */ 
    public function getPays_pays_id()
    {
        return $this->pays_pays_id;
    }

    /**
     * Set the value of pays_pays_id
     *
     * @return  self
     */ 
    public function setPays_pays_id($pays_pays_id)
    {
        $this->pays_pays_id = $pays_pays_id;

        return $this;
    }
}