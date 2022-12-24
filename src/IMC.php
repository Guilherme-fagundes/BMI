<?php
namespace Guilherme;

/**
 * Name: BMI
 * Description: Classe responsável por realizar o cálcula de IMC
 * @author Guilherme K. Fagundes <guilhermede4v94@gmail.com>
 * @copyright 2022 Guilherme K. Fagundes
 * 
 * 
 */
class BMI
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
     * @var float|int
     */
    private $weight;    
    /**
     * height
     *
     * @var float|int
     */
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
     * Obtem o resultado do calculo de IMC
     * 
     * @return  float
     */ 
    public function getResult(): float
    {
        return $this->result;
    }
    
    /**
     * calcImc
     *
     * Realiza o cálculo de IMC
     * 
     * @return void
     */
    public function calcImc()
    {
        $this->result = $this->weight / ($this->height * $this->height);
    }

    
}