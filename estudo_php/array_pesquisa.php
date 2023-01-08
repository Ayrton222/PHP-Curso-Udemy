<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Pesquisa</title>
</head>
<body>
    <?php 

    //in_array() - retorna true ou false do que esta sendo procuradoi
    //array_search - retorna o indice do valor pesquisado caso exista

    $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
    
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    //Verifica se existe no array
    echo in_array('Maça', $lista_frutas);
    echo '<br />';
    echo array_search('Uva', $lista_frutas);

    echo '<hr>';
    //Pesquisa em array Multidimensional

    //atribuindo valor
    $lista_coisas = array(
        'frutas' => $lista_frutas,
        'pessoa' => ['João', 'José','Maria']
    );

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('Uva', $lista_coisas['frutas']);

    ?>
</body>
</html>