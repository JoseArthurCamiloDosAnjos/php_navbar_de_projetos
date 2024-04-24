<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Poppy Playtime</title>
</head>
<body>
    <h1>Quiz de Poppy Play time</h1>
    <hr>
    <form action="Resultado.php" method="post">
        <h2> Como A mommy long legs morre?</h2>
        <center><img src = "mommy.jpeg"/></center>
        <div name = "pergunta1">
        <div>
            <input type="radio" id="res1" name="res1" value=1 />
            <label for="res1">Triturada</label>
        </div>
        <div>
            <input type="radio" id="res1" name="res1" value=2>
            <label for="res2">Queimada</label>
        </div>
        <div>
            <input type="radio" id="res1" name="res1" value=4>
            <label for="res3">Atropelada</label>
        </div>
        <div>
            <input type="radio" id="res1" name="res1" value=5>
            <label for="res4">Baleada</label>
        </div>
    </div>
        <h2> Qual o nome dele?</h2>
        <center><img src = "Dog.png"></center>
        <div name = "pergunta2">
        <div>
            <input type="radio" id= "res21" name = "res21" value = 2>
            <label for="res21">Bubba bubbaphant</label>
        </div>
        <div>
            <input type="radio" id="res21" name="res21" value=1 />
            <label for="res22">Dog Day</label>
        </div>
        <div>
            <input type="radio" id="res23" name = "res21" value = 3 >
            <label for="res21">Crafty Corn</label>
        </div>
        <div>
            <input type="radio" id="res24" name = "res21" value = 4>
            <label for="res21">Dog sun</label>
        </div>
        <input type="submit" value ="Enviar a resposta">
        <input type="reset" value ="Limpar">
    </div> 
    <h2> Qual nome desse prototipo?</h2>
        <center><img src = "prototipo.png"></center>
        <div name = "pergunta3">
        <div>
            <input type="radio" id= "res31" name = "res31" value = 2>
            <label for="res31">prototipo-mão</label>
        </div>
        <div>
            <input type="radio" id="res32" name="res31" value=1 />
            <label for="res31">prototipo-1821</label>
        </div>
        <div>
            <input type="radio" id="res31" name = "res31" value = 3 >
            <label for="res31">prototipo-2478</label>
        </div>
        <div>
            <input type="radio" id="res31" name = "res31" value = 4>
            <label for="res31">prototipo-1006</label>
        </div>
        <h2> Qual nome da musica que CG5 fez?</h2>
        <center><img src = "images.jpg"></center>
        <div name = "pergunta4">
        <div>
            <input type="radio" id= "res41" name = "res41" value = 2>
            <label for="res41">Sleep Well</label>
        </div>
        <div>
            <input type="radio" id="res42" name="res41" value=1 />
            <label for="res41">Sleep good bye</label>
        </div>
        <div>
            <input type="radio" id="res41" name = "res41" value = 3 >
            <label for="res41">Run</label>
        </div>
        <div>
            <input type="radio" id="res41" name = "res41" value = 4>
            <label for="res41">Poppy want play</label>
        </div>
        <h2> qual lugar poppy playtime se passa?</h2>
        <center><img src = "huggy.jpg"></center>
        <div name = "pergunta5">
        <div>
            <input type="radio" id= "res51" name = "res51" value = 2>
            <label for="res51">Assogueria</label>
        </div>
        <div>
            <input type="radio" id="res51" name="res51" value=1 />
            <label for="res51">Praça</label>
        </div>
        <div>
            <input type="radio" id="res51" name = "res51" value = 3 >
            <label for="res51">Creche</label>
        </div>
        <div>
            <input type="radio" id="res51" name = "res51" value = 4>
            <label for="res51">Cidade grande</label>
        </div>
        <input type="submit" value ="Enviar a resposta">
        <input type="reset" value ="Limpar">
    </div> 
    </form>
    <?php
     include ("menu.html");
    ?>
</body>
</html>