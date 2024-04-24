<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia do seu zé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
     include ("menu.php");
    ?>
    <H1>Farmacia</H1>
    <hr>
    <h1>Processamento de Vendas</h1>
    
    <form method="post" action = "desconto.php">
        <fieldset>
    <legend>Farmacias Paracetaloka - Processamento de vendas com PHP</legend>
    <DIV>
        <p>Forneça o valor da compra do cliente: <input type="text" name = "ValorCli"></p>
        <p>Faixa etária do cliente:</p>
        <DIV>
        <input type="radio" name="Op" value=1>
        <label for = "Menos">Menos de 55 anos</label>
        </DIV>
        <DIV>
        <input type="radio" name="Op" value=2>
        <label for = "Entre">Entre de 55 a 70 anos(inclusive)</label>
        </DIV>
        <DIV>
        <input type="radio" name="Op" value=3>
        <label for = "Mais">Mais de 70 anos</label>
        </DIV>
        <div>
        <input type="checkbox" name="permi">
        <label for = "permi"> marque que opção se o cliente pegou a compra com cartão</label>
        <br>
        <input type="submit" value="Processar dados da compra">
        </div>

        </fieldset>
    </DIV>
    </form>
   
</body>
</html>