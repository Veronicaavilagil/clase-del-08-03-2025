<?php
//seleccionar 3 productos, arepa 3000, perro5000,hamburguesas 10000//
$producto = $_POST["producto" ];
$cantidad = $_POST[ "Cantidad"];

if($producto==1)
{
    $sub= $cantidad*3000;
}
if($producto==2)
{
    $sub= $cantidad*5000;
}
if( $producto==3)
{
    $sub= $cantidad*10000;
}
$iva = $sub *0.19;
$total = $sub + $iva;
 echo"subtotal:".$sub."<br>";
 echo "iva:" .$iva." <br>";
echo "total:" .$total." <br>";

?>
