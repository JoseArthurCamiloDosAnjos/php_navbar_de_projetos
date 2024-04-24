<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Farmacia<h1>
    <hr/>
    <?php 
    $Op = $_POST['Op'];
    $TxtClie = $_POST['ValorCli'];
    $Permi = isset($_POST['permi']);
    if($Op == 1)
    {
        echo "Valor colocado: $TxtClie";
        echo "<br>";
        echo "sem desconto";
        $valor = $TxtClie;
        echo "Valor total: $TxtClie";

    }
    else if ($Op == 2)
    {
        echo "Valor colocado: $TxtClie";
        echo "<br>";
        echo "Desconto de 5% aplicado";
        $valor = $TxtClie - $TxtClie * 5 / 100.0;
      
        
        
    }
    else if ($Op == 3)
    {
        echo "Valor colocado: $TxtClie";
        echo"<br>";
        echo "Desconto de 7%";
        $valor = $TxtClie - $TxtClie * 7 / 100.0;
        
    }
    if($Permi == true && $Op == 2)
    {
        echo "<br>";
        echo "modo de pagamento: Cartão";
        echo"<br>";
        echo"descontar mais 5%";

        $valor2 = $valor - $valor * 5 / 100.0;
        echo "<br>";
        
    }
    else if($Permi == true && $Op == 3)
    { 
        $valor2 = $valor - $valor * 5 / 100.0;
        echo "modo de pagamento: Cartão";
        echo"<br>";
        echo"descontar mais 5%";
        echo "<br>";
       
    }
    else if($Permi == true && $Op == 1)
    { 
        echo "modo de pagamento: Cartão";
        echo"<br>";
        echo"descontar mais 5%";
        $valor2 = $valor - $valor * 5 / 100.0;
        echo "<br>";
       
    }
    if($Permi == false)
    {
    echo "Valor total: $valor";
    }
    else
    {
        echo "Valor Total: $valor2";
    }
    ?>
    <h2><a href= "index.php">Voltar</a></h2>
</body>
</html>