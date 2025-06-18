<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>

<body>
    <?php

    $traco = "<br>============================================</br>";

    echo "<h2>Obtendo os tipos de dados com var_dump()</h2>";
    #$x = 5;
    $x = 19.019;
    #$x = "Oi";
    
    var_dump($x);
    echo $traco;

    echo "<h2>Constantes</h2>";
    echo "As constantes em PHP podem começar com uma letra ou underline, mas não tem o sinal '$' antes de seu nome<br>Para cirar uma constante utilizamos a função<strong> define()</strong></br>";
    define("CONSTANTE", "Oi :D");
    echo CONSTANTE;

    echo $traco;
    define("ANIMAIS1",array('cachorro','gato','pássaro','peixe'));
    echo ANIMAIS1[1]."<br>";
    echo ANIMAIS1[3]."<br>";
    var_dump(ANIMAIS1);
    echo $traco;
    echo "<h2>Exemplos com if</h2>";

    $divisor = 20;
    $quociente = 2;
    $resto = $divisor % $quociente;
    
    if ($resto == 0)
    {
        echo "O número $divisor é par <br>";
    }
    else
    {
        echo "O número $divisor é impar <br>";
    }

    $num = 30;
    /*
    if ($num < 20)
    {
        echo "O número $num é menor que 20 <br>";
    }
    else
    {
        echo "O número $num é maior que 20 <br>";
    }
    */

    echo $num = ($num < 20)? "Menor que 20 <br>": "Maior que 20 <br>";

    $num = 19;
    /*
    if ($num < 20)
    {
        echo "O número $num é menor que 20 <br>";
    }   
    elseif ($num > 20) 
    {
        echo "O número $num é maior que 20 <br>";
    }
    else
    {
        echo "O número $num é igual a 20 <br>";
    }
    */

    echo $num = ($num < 20)?"O número $num é menor que 20 <br>": 
                (($num >20)?"O número $num é maior que 20 <br>":
                "O número $num é igual a 20");
    echo $traco;

    $i = 1;
    
    while ($i <=19)
        {
        echo $i.($i != 20 ? "|" : "");
        $i++;
    }

    echo $traco;

    $num = 30;
    if ($num < 20)
    {
        echo "O número $num é menor que 20 <br>";
    }
    else
    {
        echo "O número $num é maior que 20 <br>";
    }

    ?>
</body>

</html>