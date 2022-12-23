<?php
namespace Guilherme;

/**
 * IMC
 */
class IMC
{
        
    /**
     * result
     *
     * @var mixed
     */
    private $result;
    /**
     * weight
     *
     * @var mixed
     */
    private $weight;
    private $height;
    
    /**
     * setWeight
     *
     * Informe o peso
     * 
     * @param  int|float $weight
     * 
     */
    public function setWeight($weight)
    {
         $this->weight = $weight;
    }
    
    /**
     * setHeight
     *
     * Informe a altura
     * 
     * @param  int|float $height
     * 
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Get result
     *
     * @return  mixed
     */ 
    public function getResult()
    {
        return $this->result;
    }

    public function calcImc()
    {
        $this->result = $this->weight / ($this->height * $this->height);
    }

    
}