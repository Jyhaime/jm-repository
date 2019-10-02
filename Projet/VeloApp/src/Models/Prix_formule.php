<?php

class Prix_formule
{
    private $prix_id;
    private $nom;
    private $Temp;
    private $type;

    public function __construct(
        int $prix_id, 
        string $nom, 
        string $Temp, 
        string $type)

    {
        $this->prix_id = $prix_id;
        $this->nom = $nom;
        $this->Temp = $Temp;
        $this->type = $type;
    }



    /**
     * Get the value of prix_id
     */ 
    public function getPrix_id()
    {
        return $this->prix_id;
    }

    /**
     * Set the value of prix_id
     *
     * @return  self
     */ 
    public function setPrix_id($prix_id)
    {
        $this->prix_id = $prix_id;

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
     * Get the value of Temp
     */ 
    public function getTemp()
    {
        return $this->Temp;
    }

    /**
     * Set the value of Temp
     *
     * @return  self
     */ 
    public function setTemp($Temp)
    {
        $this->Temp = $Temp;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}