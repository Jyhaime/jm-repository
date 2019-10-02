<?php

class Panier
{
    private $panier_id;
    private $article_id;
    private $prix_formule_id;

    public function __construct(
        int $panier_id, 
        int $article_id, 
        int $prix_formule_id)

    {
        $this->panier_id = $panier_id;
        $this->article_id = $article_id;
        $this->prix_formule_id = $prix_formule_id;
    }



    /**
     * Get the value of panier_id
     */ 
    public function getPanier_id()
    {
        return $this->panier_id;
    }

    /**
     * Set the value of panier_id
     *
     * @return  self
     */ 
    public function setPanier_id($panier_id)
    {
        $this->panier_id = $panier_id;

        return $this;
    }

    /**
     * Get the value of article_id
     */ 
    public function getArticle_id()
    {
        return $this->article_id;
    }

    /**
     * Set the value of article_id
     *
     * @return  self
     */ 
    public function setArticle_id($article_id)
    {
        $this->article_id = $article_id;

        return $this;
    }

    /**
     * Get the value of prix_formule_id
     */ 
    public function getPrix_formule_id()
    {
        return $this->prix_formule_id;
    }

    /**
     * Set the value of prix_formule_id
     *
     * @return  self
     */ 
    public function setPrix_formule_id($prix_formule_id)
    {
        $this->prix_formule_id = $prix_formule_id;

        return $this;
    }
}