<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops ForEach</title>
</head>
<body>
    <?php 

        //Array associativo
        $funcionarios = array(
           array('Nome'=> 'João', 'Salario' => 2500, 'data nascimento' => '26/01/2023'), 
           array('Nome'=> 'Maria', 'Salario' => 3000), 
           array('Nome'=> 'Julia', 'Salario' => 2200)
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        //Array normal
        /*
        foreach($funcionario as $indice => $nome_funcionario){
            echo "ID: $indice Nome: $nome_funcionario <br />";
        }
        */

        //Array associativo + foreach encadeado
        foreach($funcionarios as $indice => $funcionario){
            //print_r($funcionario);

            foreach($funcionario as $indice2 => $valor){
                echo "$indice2 - $valor <br />";

            }
            echo '<hr>';

        }

    ?>
</body>
</html>