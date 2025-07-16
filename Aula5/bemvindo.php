<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="javascript: history.go(-1)">Voltar</a> | <a href="index.php">Home</a><br>
    <?php
    //var_dump($_POST);
    
    echo "<p>Seja bom-vindo! <strong>" . $_POST["nome"] . "</strong><br>O e-mail digitado foi: " . $_POST["email"] . "</p>";
    ?>
</body>

</html>