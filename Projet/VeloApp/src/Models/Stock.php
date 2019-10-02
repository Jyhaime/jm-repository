<?php

class Stock 
{
    protected $stock_id;
    protected $quantiteE;
    protected $quantiteS ;
    protected $dateE;
    protected $prdateSoperty;
    protected $velos_velos_id;

    private function __construct(
        int $stock_id, 
        int $quantiteE, 
        int $quantiteS, 
        string $dateE, 
        string $dateS, 
        int $velos_velos_id)

    {
        $this->stock_id = $stock_id;
        $this->quantiteE = $quantiteE;
        $this->quantiteS = $quantiteS;
        $this->dateE = $dateE;
        $this->dateS = $dateS;
        $this->velos_velos_id = $velos_velos_id;
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

    /**
     * Get the value of quantiteE
     */ 
    public function getQuantiteE()
    {
        return $this->quantiteE;
    }

    /**
     * Set the value of quantiteE
     *
     * @return  self
     */ 
    public function setQuantiteE($quantiteE)
    {
        $this->quantiteE = $quantiteE;

        return $this;
    }

    /**
     * Get the value of quantiteS
     */ 
    public function getQuantiteS()
    {
        return $this->quantiteS;
    }

    /**
     * Set the value of quantiteS
     *
     * @return  self
     */ 
    public function setQuantiteS($quantiteS)
    {
        $this->quantiteS = $quantiteS;

        return $this;
    }

    /**
     * Get the value of dateE
     */ 
    public function getDateE()
    {
        return $this->dateE;
    }

    /**
     * Set the value of dateE
     *
     * @return  self
     */ 
    public function setDateE($dateE)
    {
        $this->dateE = $dateE;

        return $this;
    }

    /**
     * Get the value of prdateSoperty
     */ 
    public function getPrdateSoperty()
    {
        return $this->prdateSoperty;
    }

    /**
     * Set the value of prdateSoperty
     *
     * @return  self
     */ 
    public function setPrdateSoperty($prdateSoperty)
    {
        $this->prdateSoperty = $prdateSoperty;

        return $this;
    }

    /**
     * Get the value of velos_velos_id
     */ 
    public function getVelos_velos_id()
    {
        return $this->velos_velos_id;
    }

    /**
     * Set the value of velos_velos_id
     *
     * @return  self
     */ 
    public function setVelos_velos_id($velos_velos_id)
    {
        $this->velos_velos_id = $velos_velos_id;

        return $this;
    }
}