<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting tipos</title>
</head>
<body>
    <?php 
        //gettype() -> Espera um parametro e retorna o seu tipo

        $valor = 10;
        $valor2 = (float) $valor;
        echo gettype($valor);

        //Mudando o tipo da variavel

        echo "<br />";
        

        echo gettype($valor2);

    ?>
</body>
</html>