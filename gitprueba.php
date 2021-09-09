<?php  
$nombre = $_GET['nombre'];
$edad = $_GET ['edad'];
$ciudad = $_GET ['ciudad'];
$continente = $_GET ['continente'];
$mayoria_edad = 65;


if ($edad >= $mayoria_edad){
    echo "$nombre  es mayor de edad";
    } else
   { echo " $nombre  no es mayor de edad";}

    if ($continente != "Latinoamerica del sur")
        {echo " y no es latino";}
    else{
        echo ", es latino y de $ciudad";
        }



?>