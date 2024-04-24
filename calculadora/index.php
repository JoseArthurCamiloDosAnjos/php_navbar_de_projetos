<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
     include ("menu.html");
    ?>
    <h1>calculadora</h1>
    <hr>
    <h2> Escolha os numeros:</h2>
    <form action="calcular.php" method="post" >
        <p>Numero 1:</p><input type = "text" name = "Nu1"></p>
        <p>Numero 2:</p><input type ="text" name="Nu2"></p>
        <p>
            <select id="op" name="op">
                <option value = "Adi">Adição</option>
                <option value ="Sub">Subritação</option>
                <option value = "Mul">Multiplicação</option>
                <option value = "Div">Divisão</option>
            </select>
        <input type="submit" value="Calcular">
        <input type="reset" value="limpar">
        </p>
       
    </form>
    
</body>
</html>