<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, Null e Empty</title>
</head>
<body>
    <?php 

    $funcionario1 = null;
    $funcionario2 = '';

    //is_null verifica se o valor é realmente null
    if(is_null($funcionario1)){
        echo 'Sim, a variavel $funcionario1 é null';
    }else{
        echo 'Não, a variavel $funcionario1 não  é null';
    }

    echo '<br />';

    if(is_null($funcionario2)){
        echo 'Sim, a variavel $funcionario2 é null';
    }else{
        echo 'Não, a variavel $funcionario2 não  é null';
    }

    echo '<hr>';

    //empty() verifica se a variavel esta ou nao vazia
    

    if(empty($funcionario1)){
        echo 'Sim, a variavel $funcionario1 é vazia';
    }else{
        echo 'Não, a variavel $funcionario1 não  é vazia';
    }

    echo '<br />';

    if(empty($funcionario2)){
        echo 'Sim, a variavel $funcionario2 é vazia';
    }else{
        echo 'Não, a variavel $funcionario2 não  é vazia';
    }

    ?>
</body>
</html>