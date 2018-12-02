<?php
require "Mazo.php";


function getCarta($tipo)
{
	
	global $mazo,$textoTotal;
	// sacarCarta($color,$palo,$figura,$alta)
	$texto="";
	switch ($tipo) {
    case 'U':
        $car = $mazo->sacarCarta(-1,-1,1,-1);
        $texto="tu carta es de puntos";
        break;
    case 'F':
        $car = $mazo->sacarCarta(-1,-1,0,-1);
        $texto="tu carta es figura";
        break;
	case 'R':
        $car=$mazo->sacarCarta(0,-1,-1,-1);
       	$texto="tu carta es roja";
         break;
	case 'N':
        $car=$mazo->sacarCarta(1,-1,-1,-1);
       	$texto="tu carta es negra";
        break;
    case 'P':
        $car= $mazo->sacarCarta(-1,2,-1,-1);
       	$texto="tu carta es de picas";
        break;
    case 'C':
        $car= $mazo->sacarCarta(-1,3,-1,-1);
       	$texto="tu carta es de corazones";
        break;
    case 'T':
        $car= $mazo->sacarCarta(-1,0,-1,-1);
       	$texto="tu carta es de treboles";
        break;
    case 'D':
        $car= $mazo->sacarCarta(-1,1,-1,-1);
        $texto="tu carta es de diamantes";
       break;
    case 'B';
        $car=$mazo->sacarCarta(-1,-1,-1,1);
       	$texto="tu carta es baja";
        break;
    case 'A':
        $car=$mazo->sacarCarta(-1,-1,-1,0);
       	$texto="tu carta es alta";
        break;
	}
	$_SESSION["preguntas"][]=$texto;
	$textoTotal.=$texto.",";
	return $car;
} 
function getVectorCartas($secuencia)
{
	global $textoTotal,$manoAux;
	$mano = Array();
	$mano[]= getCarta($secuencia[0]);
	$mano[]= getCarta($secuencia[1]);
	$mano[]= getCarta($secuencia[2]);
	$mano[]= getCarta($secuencia[3]);
	echo $textoTotal;
	$mano[]= getCarta($secuencia[4]);
	for ($i = 0; $i <  count($mano); $i++) 
	{
		$manoAux[$i]=$mano[$i];
	}
	shuffle($mano);
	for ($i = 0; $i <  count($mano); $i++) 
	{
		$carx= $mano[$i];
		if ($carx->valor==-1)
		{
			return Array();
		}
	}


	return $mano;
} 
function getSecuencia()
{
	global $vectorSecuencias;
	return $vectorSecuencias[rand(0, count($vectorSecuencias)-1)];
}
try
{

session_start();

// remove all session variables
session_unset(); 
// destroy the session 
//session_destroy(); 



	$vectorSecuencias= 
Array(
//RC 
"RCUBA",
"RCUAB",
"RCAUF",
"RCAFU",
"RUCBA",
"RUCAB",
"RUBCD",
"RUACD",
"RACUF",
"RACFU",
"RAUCD",
"RAFCD",
"URCBA",
"URCAB",
"URBCD",
"UARCD",
"UBRCD",
"UARCD",
"ARCUF",
"ARCFU",
"ARUCD",
"ARFCD",
"AURCD",
"AFRCD",
//RD
"RDUBA",
"RDUAB",
"RDAUF",
"RDAFU",
"RUDBA",
"RUDAB",
"RUBDC",
"RUADC",
"RADUF",
"RADFU",
"RAUDC",
"RAFDC",
"URDBA",
"URDAB",
"URBDC",
"UARDC",
"UBRDC",
"UARDC",
"ARDUF",
"ARDFU",
"ARUDC",
"ARFDC",
"AURDC",
"AFRDC",
//NP
"NPUBA",
"NPUAB",
"NPAUF",
"NPAFU",
"NUPBA",
"NUPAB",
"NUBPT",
"NUAPT",
"NAPUF",
"NAPFU",
"NAUPT",
"NAFPT",
"UNPBA",
"UNPAB",
"UNBPT",
"UANPT",
"UBNPT",
"UANPT",
"ANPUF",
"ANPFU",
"ANUPT",
"ANFPT",
"AUNPT",
"AFNPT",
//NT
"NTUBA",
"NTUAB",
"NTAUF",
"NTAFU",
"NUTBA",
"NUTAB",
"NUBTP",
"NUATP",
"NATUF",
"NATFU",
"NAUTP",
"NAFTP",
"UNTBA",
"UNTAB",
"UNBTP",
"UANTP",
"UBNTP",
"UANTP",
"ANTUF",
"ANTFU",
"ANUTP",
"ANFTP",
"AUNTP",
"AFNTP"
);
	//print_r($vectorSecuencias);
	$textoTotal="";
	$mazo = new Mazo();
	shuffle($mazo->mazo);


	
	$mano= Array();
	while(count($mano)==0)
	{
		$secuencia = getSecuencia();
		echo "secuencia: $secuencia \n";
		$mano = getVectorCartas($secuencia);
		//print_r($manoAux);
		//print_r($mano);
	}
	foreach ($manoAux as $car) 
	{
		$textoCarta=$car->valor;
		switch ($car->palo) {
    		case 0:
        	$textoCarta.=" picas";
        	break;
    		case 1:
        	$textoCarta.=" corazones";
        	break;
    		case 2:
        	$textoCarta.=" treboles";
        	break;
    		case 3:
        	$textoCarta.=" diamantes";
        	break;
        }
        $_SESSION["cartas"][]=$textoCarta;
	}
	echo "\n";
	foreach ($mano as $car) 
	{
		$textoCarta=$car->valor;
		switch ($car->palo) {
    		case 0:
        	$textoCarta.=" picas";
        	break;
    		case 1:
        	$textoCarta.=" corazones";
        	break;
    		case 2:
        	$textoCarta.=" treboles";
        	break;
    		case 3:
        	$textoCarta.=" diamantes";
        	break;
        }
        echo $textoCarta.",";
	}
	echo "\n";
	
print_r($_SESSION["cartas"]);
print_r($_SESSION["preguntas"]);
/*	//puntos, roja, corazones, alta
	
	$mano = Array();
	$mano[]=$mazo->sacarCarta(-1,-1,1,-1);
	$mano[]=$mazo->sacarCarta(0,-1,-1,-1);
	$mano[]=$mazo->sacarCarta(-1,3,-1,-1);
	$mano[]=$mazo->sacarCarta(-1,-1,-1,1);
	$mano[]=$mazo->sacarCarta(-1,-1,-1,0);
	print_r($mano);

	$mazo = new Mazo();
	shuffle($mazo->mazo);
	//puntos, roja, corazones, alta
	
	$mano = Array();
	$mano[]=$mazo->sacarCarta(-1,-1,1,-1);
	$mano[]=$mazo->sacarCarta(1,-1,-1,-1);
	$mano[]=$mazo->sacarCarta(-1,0,-1,-1);
	$mano[]=$mazo->sacarCarta(-1,-1,-1,0);
	$mano[]=$mazo->sacarCarta(-1,-1,-1,1);
	print_r($mano);

	$mazo = new Mazo();
	shuffle($mazo->mazo);
	//puntos, roja, corazones, alta
	
	$mano = Array();
	$mano[]=$mazo->sacarCarta(-1,-1,1,-1);
	$mano[]=$mazo->sacarCarta(1,-1,-1,-1);
	$mano[]=$mazo->sacarCarta(-1,-1,-1,0);
	$mano[]=$mazo->sacarCarta(-1,0,-1,-1);
	$mano[]=$mazo->sacarCarta(-1,2,-1,-1);
	print_r($mano);
*/
	//echo "\n queda final \n";

	//print_r($mazo->mazo);

}
catch(Exception $e) {
  echo 'HAY QUE EMPEZAR OTRA PESCA DE INICIO: ' .$e->getMessage();
}
?>