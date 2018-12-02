<?php
// Include class definition
require "Carta.php";

class Mazo
{
    public $mazo = Array();

// Constructor
    public function __construct(){


    	
    	// PICAS

		$car = new Carta;
		$car->valor=1;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=2;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=3;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=4;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=5;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=6;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=7;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=8;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=9;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=10;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=11;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=12;
		$car->palo=0;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=13;
		$car->palo=0;
		$this->mazo[]=$car;

		// CORAZONES

	 	$car = new Carta;
		$car->valor=1;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=2;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=3;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=4;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=5;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=6;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=7;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=8;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=9;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=10;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=11;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=12;
		$car->palo=1;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=13;
		$car->palo=1;
		$this->mazo[]=$car;

		// TREBOLES

		$car = new Carta;
		$car->valor=1;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=2;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=3;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=4;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=5;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=6;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=7;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=8;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=9;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=10;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=11;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=12;
		$car->palo=2;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=13;
		$car->palo=2;
		$this->mazo[]=$car;

		// DIAMANTES

		$car = new Carta;
		$car->valor=1;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=2;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=3;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=4;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=5;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=6;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=7;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=8;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=9;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=10;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=11;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=12;
		$car->palo=3;
		$this->mazo[]=$car;
		
		$car = new Carta;
		$car->valor=13;
		$car->palo=3;
		$this->mazo[]=$car;
    }
    
    public function dejarMazoContrario($color,$palo,$figura,$alta)
    {
    	//echo "dejarMazoContrario $color,$palo,$figura,$alta \n";

    	$count = count($this->mazo);
    	if ($color>-1)
    	{  		
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($color==$car->getColor())
    			{
					unset($this->mazo[$i]);
    			}
    		}
		}
    	else if ($palo>-1)
    	{
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($palo==$car->palo)
    			{
					unset($this->mazo[$i]);
    			}
    		}

    	}
   		else if ($figura>-1)
    	{
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($figura==$car->getFigura())
    			{
					unset($this->mazo[$i]);
    			}
    		}

    	}
   		else if ($alta>-1)
    	{
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if (($alta==$car->getAlta())||($car->getAlta()==-2))
    			{
					unset($this->mazo[$i]);
    			}
    		}

    	}
    	$this->mazo = array_values($this->mazo);
    }

public function sacarCarta($color,$palo,$figura,$alta)
{
    	$count = count($this->mazo);
    	if ($color>-1)
    	{  		
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($color==$car->getColor())
    			{
					unset($this->mazo[$i]);
					$this->mazo = array_values($this->mazo);
					$this->dejarMazoContrario($color,$palo,$figura,$alta);
    				return $car;
    			}
    		}
		}
    	else if ($palo>-1)
    	{
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($palo==$car->palo)
    			{
					unset($this->mazo[$i]);
					$this->mazo = array_values($this->mazo);
					$this->dejarMazoContrario($color,$palo,$figura,$alta);		
    				return $car;
    			}
    		}

    	}
   		else if ($figura>-1)
    	{
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($figura==$car->getFigura())
    			{
					unset($this->mazo[$i]);
					$this->mazo = array_values($this->mazo);
					$this->dejarMazoContrario($color,$palo,$figura,$alta);
    				return $car;
    			}
    		}

    	}
   		else if ($alta>-1)
    	{
			for ($i = 0; $i < $count; $i++) 
			{
    			$car=$this->mazo[$i];
    			if ($alta==$car->getAlta())
    			{
					unset($this->mazo[$i]);
					$this->mazo = array_values($this->mazo);
					$this->dejarMazoContrario($color,$palo,$figura,$alta);				
					return $car;
    			}
    		}

    	}
    	$car = new Carta;
		$car->valor=-1;
    	return $car;
    }

    // Destructor
    public function __destruct(){
       // echo 'The class "' . __CLASS__ . '" was destroyed.<br>';
    }

}
 
?>