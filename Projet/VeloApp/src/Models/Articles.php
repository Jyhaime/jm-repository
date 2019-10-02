<?php


class Articles
{
    private $article_id;
    private $nom_article ;
    private $ref ;
    private $description ;
    private $prix ;
    private $TVA ;
    private $stock_id;

    public function __construct(
        int $article_id, 
        string $nom_article , 
        int $ref , 
        string $description , 
        int $prix , 
        int $TVA , 
        int $stock_id)

    {
        $this->article_id = $article_id;
        $this->nom_article  = $nom_article ;
        $this->ref  = $ref ;
        $this->description  = $description ;
        $this->prix  = $prix ;
        $this->TVA  = $TVA ;
        $this->stock_id = $stock_id;
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
     * Get the value of nom_article
     */ 
    public function getNom_article()
    {
        return $this->nom_article;
    }

    /**
     * Set the value of nom_article
     *
     * @return  self
     */ 
    public function setNom_article($nom_article)
    {
        $this->nom_article = $nom_article;

        return $this;
    }

    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set the value of ref
     *
     * @return  self
     */ 
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of TVA
     */ 
    public function getTVA()
    {
        return $this->TVA;
    }

    /**
     * Set the value of TVA
     *
     * @return  self
     */ 
    public function setTVA($TVA)
    {
        $this->TVA = $TVA;

        return $this;
    }

    /**
     * Get the value of stock_id
     */ 
    public function getStock_id()
    {
        return $this->stock_id;
    }

    /**
     * Set the value of stock_id
     *
     * @return  self
     */ 
    public function setStock_id($stock_id)
    {
        $this->stock_id = $stock_id;

        return $this;
    }

}    