<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1> Resultado</h1>
<?php

$Resp1 = $_POST['res1'];
$Resp2 = $_POST['res21'];
$Resp3 = $_POST['res31'];
$Resp4 = $_POST['res41'];
$Resp5 = $_POST['res51'];
if($Resp1 == 1)
{
    $resultado += 1;
}
if($Resp2 == 1)
{
    $resultado += 1;
}
if($Resp3 == 4)
{
    $resultado +=1;
}
if($Resp4 == 2)
{   
    $resultado +=1;
}
if($Resp5 == 3)
{
    $resultado += 1;
}
if($resultado == 5){
    echo"<h2>Parabéns!!!</h2>";
    echo"<h2>Você acertou $resultado de 5</h2>";
}
else{
echo "<h2>Você acertou $resultado de 5</h2>";
}
?>
<br>
<h2><a href= "index.php">Voltar</a></h2>
</body>
</html>
