<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Multidimencionais</title>
</head>
<body>
    <?php 

    $lista_coisas = array();

    //array associativo
    $lista_coisas ['frutas'] = array(1 => 'Banana', 2 =>  'Maça', 3 =>  'Morango', 4 =>  'Uva');
    $lista_coisas ['pessoa'] = array(1 => 'João', 2 =>  'José', 3 => 'Maria'); 

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';

    //navegando sobre array

    echo $lista_coisas['frutas'][3];
    ?>
</body>
</html>