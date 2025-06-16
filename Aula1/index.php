<?php
# primeiro código
//echo "Olá Mundo!";
//imprime a mensagem Olá Mundo na tela
/* comentarios em linhas podem ser feitos com os simbolos # e //, já os comentários com mais de uma linha deve ser feitos com os sinais /* e */
//phpinfo();

//Variáveis  em PHP

$texto = "<h1>Sou aluno da TI36 no Senac Botucatu</h1>";
echo $texto;

$traco = "<br>============================================</br>";
echo $traco;
$nome = "Chaves";
$sobrenome = "del Ocho";
echo "Olá meu nome é $nome e meu sobrenome é $sobrenome";

/* EX. 1 - Crie um script PHP que declare três variaveis: $nome, $idade e $cidades e exiba uma mensagem que combine esses valores. */

echo $traco;

$nome = "Nathan";
$idade = "19";
$cidade = "Botucatu";

echo "Olá me chamo $nome tenho $idade anos e moro em $cidade";
echo $traco;

/*
operações Aritméticas no PHP:
    Soma:  +
    Subtração:  -
    Multiplicação:  *
    Divisão:  /
*/
$numero1 = 56;
$numero2 = 44;

$soma = $numero1 + $numero2;
echo "A soma entre $numero1 e $numero2 é $soma";
echo $traco;

/* EX.2 - Crie um Script PHP que declare duas variaveis númericas, $num1 e num2. Realize as operações de soma, Subtração, Multiplicação e divisão entre variaveis e exiba os resultados. */
$num1 = 10;
$num2 = 5;
$Soma = $num1 + $num2;
$subtração = $num1 - $num2;
$multiplicação = $num1 * $num2;
$divisao = $num1 / $num2;
echo "A soma entre $num1 e $num2 é $Soma";
echo $traco;
echo "A subtração entre $num1 e $num2 é $subtração";
echo $traco;
echo "A multiplicação entre $num1 e $num2 é $multiplicação";
echo $traco;
echo "A Divisao entre $num1 e $num2 é $divisao";

?>