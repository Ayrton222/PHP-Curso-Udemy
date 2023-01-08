<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops com Array</title>
</head>
<body>
    <?php 

        //Array associativo
        $registros = array(
            array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'),
            array('titulo' => 'Titulo noticia 2 ', 'conteudo' => 'Conteudo noticia 2'),
            array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'),
            array('titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteudo noticia 4')
        );

        //print_r($registros);

        $x = 0;

        echo '<h2> Comando While: </h2>';

        while($x < count($registros)){
            
            //print_r ($registros[$x]);
            echo '<h3>' .$registros[$x]['titulo'] . '</h3>';
            echo '<p>' .$registros[$x]['conteudo'] . '</p>';
            echo '<hr>';
            $x ++;
        }

        $x = 0;
        echo '<hr>';
        echo '<h2> Comando Do While: </h2>';

        do{ 
            echo '<h3>' .$registros[$x]['titulo'] . '</h3>';
            echo '<p>' .$registros[$x]['conteudo'] . '</p>';
            echo '<hr>';
            $x ++;

        }while($x < count($registros));

        echo '<hr>';
        echo '<h2> Comando For: </h2>';

       for( $x =0; $x < count($registros); $x++){
            echo '<h3>' .$registros[$x]['titulo'] . '</h3>';
            echo '<p>' .$registros[$x]['conteudo'] . '</p>';
            echo '<hr>';
       }

    ?>
</body>
</html>