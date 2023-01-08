<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Manipular Array</title>
</head>
<body>
    <?php 

        //verifica se o parametro é um array
       // is_array();
       /*
        $array = array('notebook','teclado');
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim é um array';
        }else{
            echo 'Não é um array';
        }

        */

        //retorna todas as chaves de um array
        //array_keys();

        /*
        $array = array(1 => 'a', 7 => 'b', 18 => 'c');

        $chaves_array = array_keys($array);
        
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';

        */
        
        //ordena um array e reajusta seus indices
        //sort();

        /*
        $array = array('mouse','cabo HDMI', 'gabinete','fonte atx','notebook','teclado');

        sort($array);

        echo '<pre>';
        print_r($array);
        echo '</pre>';

        */
        //ordena um array preservando seus indices
        //asort();

        /*
        $array = array('mouse','cabo HDMI', 'gabinete','fonte atx','notebook','teclado');

        asort($array);

        echo '<pre>';
        print_r($array);
        echo '</pre>';

        */
        
        //conta a quantidade de eleemntos de um array
        //count();

        /*
        $array = array('mouse','cabo HDMI', 'gabinete','fonte atx','notebook','teclado');
        echo count($array);
*/

        //funde um ou mais array
        //array_merge();

        /*
        $array1 = array('osx', 'windows');
        $array2 = ['linux'];
        $array3 = ['solaris'];

        $novo_array = array_merge($array1,$array2,$array3);

        echo '<pre>';
        print_r($novo_array);
        echo '</pre>';
        */

        /*
        //divide uma string baseada em um delimitador
        //explode();

        $string = '26/04/2018';
        $array_retorno = explode('/', $string);
        echo '<pre>';
        print_r($array_retorno);
        echo '</pre>';
        */

        //Junta elementos de um array em uma string
        //implode();

        $array = ['a','b','x','y'];
        $string_retorno = implode(',',$array);

        echo '<pre>';
        print_r($string_retorno);
        echo '</pre>';
    ?>
</body>
</html>