<?php  
$nombre = $_GET['nombre'];
$edad = $_GET ['edad'];
$ciudad = $_GET ['ciudad'];
$continente = $_GET ['continente'];
$mayoria_edad = 65;
$menor_de_edad = 18;


if ($edad >= $mayoria_edad){
    echo "$nombre es adulto mayor";
} elseif ($edad < $menor_de_edad) {
    echo " $nombre es menor de edad";
} else {
    echo " $nombre es adulto";
}

if ($continente != "Latinoamerica del sur") {
    echo " y no es latino";
} else {
    echo ", es latino y de $ciudad";
}
?>
