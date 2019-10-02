<?php

class Pays 
{
    private $pays_id;
    private $nom ;

    public function __construct(
        int $pays_id, 
        string $nom)

    {
        $this->pays_id = $pays_id;
        $this->nom  = $nom ;
    }

    

    /**
     * Get the value of pays_id
     */ 
    public function getPays_id()
    {
        return $this->pays_id;
    }

    /**
     * Set the value of pays_id
     *
     * @return  self
     */ 
    public function setPays_id($pays_id)
    {
        $this->pays_id = $pays_id;

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
}