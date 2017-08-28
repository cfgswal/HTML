<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi primera pagina web</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
</head>

<body>

<   B   > TABLA DE MULTIPLICAR> </B>
<  Tabla   bordear = "1"  >
<    ?php 

Para ($ cabecera = 1; $ cabecera <= 10; $ cabecera ++){
echo ("<th>");
echo $cabecera;
echo ("</th>");
}
echo ("</tr>");
for ($x=1;$x<=10;$x++){
echo ("<tr>");
echo ("<th>");
echo $x;
echo ("</th>");
for($y=1;$y<=10;$y++){
$multiplicacion = $x*$y;
Echo ( "<td>" );
Echo ( "  $ multiplicacion);multiplicac
echo ("</td>");
}
echo ("</tr>");
}
?>
</ Table>
</ Body>
</html>
