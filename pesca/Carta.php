<?php
class Carta
{

    // 1 - 13
    public $valor = 0;
    // 0 picas, 1 corazones, 2 treboles, 3 diamantes
    public $palo = 0;
    
    public function esRoja()
    {
        return ($this->palo==0 || $this->palo==2);
    }
    public function getColor()
    {
        if (($this->palo==0 || $this->palo==2))
        {
            return 0; // negro
        }
        else
        {
            return 1; // rojo
        }
        
    }
    public function getFigura()
    {
        if ($this->valor>10)
        {
            return 1; // figura
        }
        else
        {
            return 0; // no figura
        }
        
    }
    public function getAlta()
    {
        if ($this->valor>7)
        {
            return 1; // alta
        }
        else if (($this->valor<4)&&($this->valor>1))
        {
            return 0; // baja
        }
        else 
        {
            return -2;
        }
        
    }
    public function esPicas()
    {
        return $this->palo==0;
    }
   public function esCorazones()
    {
        return $this->palo==1;
    }
   public function esTreboles()
    {
        return $this->palo==2;
    }
   public function esDiamantes()
    {
        return $this->palo==3;
    }
  public function esFigura()
    {
        return $this->valor>10;
    }
  public function esAlta()
    {
        return $this->valor>7;
    }
}
?>