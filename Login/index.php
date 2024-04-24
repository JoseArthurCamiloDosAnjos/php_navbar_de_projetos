<!DOCTYPE html>
<html lang="Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=]
    , initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
     include ("menu.html");
    ?>
    <h1>Calcule sua idade</h1>
    <hr>
    <form action ="Calcular.php" method="POST" >
        informe seu nome:<input type ="text" name="txtnome">
        informe seu ano de nascimento: <input type="text" name="txtano" >
        <input type = "submit" value="calcular">
        <input type="reset" value="Limpar">
    </form>
   
</body>
</html>