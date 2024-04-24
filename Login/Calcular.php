<?php
$nome = $_POST['txtnome']; 
$ano = $_POST['txtano'];
$idade = 2024 - $ano;
$Dias = $idade * 365;
$Horas = $Dias * 24;
$Min = $Horas * 60;
$bpm =  $Min * 75;
echo "<H2>sua idade é$idade";
echo "Você viveu: $Dias Dias, $Horas Horas, $Min minutos, e seu coração bateu $bpm vezes";
                            

?>
<a href = "Index.php"> Voltar</a>