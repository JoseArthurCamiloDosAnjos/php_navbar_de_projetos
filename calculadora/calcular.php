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
    $numero1 = $_POST['Nu1'];
    $numero2 =$_POST['Nu2'];
    $result;
    $Op = $_POST['op'];
    switch($Op){
        case "Adi":
            $result = $numero1+$numero2;
            echo "<h2>O resutado é $result</h2>";
        break;
        case "Sub":
            $result = $numero1 - $numero2;
            echo "<h2>O resultado é $result</h2>";
        break;
        case "Mul":
            $result = $numero1 * $numero2;
            echo "<h2>O resultado é $result </h2>";
        break;
        case "Div":
            $result = $numero1 / $numero2;
            echo "<h2>O resultado é $result</h2>";
        break;
        default:
        echo "por favor, insira os valores";
        break;
            IF($Op = "Div" && $result = " 0")
            {
                echo "<h1>Não é possivel dividir por 0 </h1>";
            }
        
    

    }

?>
<a href= "index.php">Voltar</a>
</body>
</html>
