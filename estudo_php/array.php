<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 

        //array sequencial

        $lista_frutas = array('Banana','Maça','Morango','Uva');
        
        //Acrescentar item a um array ja criado
        $lista_frutas[] = 'Abacaxi';

        //tag html pre = deixa os array formatados
        echo '<pre>';
            var_dump($lista_frutas); //var_dump =  mostra o array, o tipo dele e o tamanho
        echo '</pre>';
        echo '<hr>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        echo '<hr>';

        //Array associativo

        //''indicando/associando" o seu indice
        $lista_frutas2 = array(
            'a' =>'Banana',
            'b' =>'Maça',
            'c' =>'Morango',
            'd' =>'Uva'
        );
        echo '<pre>';
        var_dump($lista_frutas2); //var_dump =  mostra o array, o tipo dele e o tamanho
    echo '</pre>';

    ?>
</body>
</html>