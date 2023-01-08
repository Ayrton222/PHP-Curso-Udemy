<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel Constant</title>
</head>
<body>

    <?php
        //Para criar constant em PHP é necessario usar o define()

        //define() Espera 2 parametros

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        //Recuperando a variavel constan

         echo BD_URL;
    ?>
    
</body>
</html>