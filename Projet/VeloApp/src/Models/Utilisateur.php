<?php

class Utilisateur
{
    private $utilisateur_id;
    private $nom;
    private $prenom;
    private $email;
    private $pass ;
    private $date_de_naissance ;
    private $telephone ;
    private $sexe;
    private $status;
    private $paiement_category_id;
    private $adresse_adresse_id;

    public function __construct(
        int $utilisateur_id, 
        string $nom, 
        string $prenom, 
        string $email, 
        string $pass , 
        string $date_de_naissance , 
        string $telephone , 
        string $sexe, 
        string $status, 
        int $paiement_category_id, 
        int $adresse_adresse_id)

    {
        $this->utilisateur_id = $utilisateur_id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->pass  = $pass ;
        $this->date_de_naissance  = $date_de_naissance ;
        $this->telephone  = $telephone ;
        $this->sexe = $sexe;
        $this->status = $status;
        $this->paiement_category_id = $paiement_category_id;
        $this->adresse_adresse_id = $adresse_adresse_id;
    }



    /**
     * Get the value of utilisateur_id
     */ 
    public function getUtilisateur_id()
    {
        return $this->utilisateur_id;
    }

    /**
     * Set the value of utilisateur_id
     *
     * @return  self
     */ 
    public function setUtilisateur_id($utilisateur_id)
    {
        $this->utilisateur_id = $utilisateur_id;

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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of date_de_naissance
     */ 
    public function getDate_de_naissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * Set the value of date_de_naissance
     *
     * @return  self
     */ 
    public function setDate_de_naissance($date_de_naissance)
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

        /**
         * Get the value of paiement_category_id
         */ 
        public function getPaiement_category_id()
        {
                return $this->paiement_category_id;
        }

        /**
         * Set the value of paiement_category_id
         *
         * @return  self
         */ 
        public function setPaiement_category_id($paiement_category_id)
        {
                $this->paiement_category_id = $paiement_category_id;

                return $this;
        }

    /**
     * Get the value of adresse_adresse_id
     */ 
    public function getAdresse_adresse_id()
    {
        return $this->adresse_adresse_id;
    }

    /**
     * Set the value of adresse_adresse_id
     *
     * @return  self
     */ 
    public function setAdresse_adresse_id($adresse_adresse_id)
    {
        $this->adresse_adresse_id = $adresse_adresse_id;

        return $this;
    }
}