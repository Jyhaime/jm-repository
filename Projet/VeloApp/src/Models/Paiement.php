<?php

class Articles
{
    private $category_id;
    private $type;
    private $carte_bleu_cb_id;
    private $dateCb ;

    public function __construct(
        int $category_id, 
        string $type, 
        int $carte_bleu_cb_id, 
        string $dateCb)

    {
        $this->category_id = $category_id;
        $this->type = $type;
        $this->carte_bleu_cb_id = $carte_bleu_cb_id;
        $this->dateCb  = $dateCb;
    }



    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

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

    /**
     * Get the value of carte_bleu_cb_id
     */ 
    public function getCarte_bleu_cb_id()
    {
        return $this->carte_bleu_cb_id;
    }

    /**
     * Set the value of carte_bleu_cb_id
     *
     * @return  self
     */ 
    public function setCarte_bleu_cb_id($carte_bleu_cb_id)
    {
        $this->carte_bleu_cb_id = $carte_bleu_cb_id;

        return $this;
    }

        /**
         * Get the value of dateCb
         */ 
        public function getDateCb()
        {
                return $this->dateCb;
        }

        /**
         * Set the value of dateCb
         *
         * @return  self
         */ 
        public function setDateCb($dateCb)
        {
                $this->dateCb = $dateCb;

                return $this;
        }
}