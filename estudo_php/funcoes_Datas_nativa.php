<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <?php 

        //recuperar a data atual
       echo date('d/M/Y H:i');

       echo '<hr>';

        //Recuperar a timezone default da aplicação
        echo date_default_timezone_get() ;

        echo '<hr>';
        //Atualizar o timezone default da aplicação
        date_default_timezone_set('America/Sao_Paulo');

        echo '<hr>';

        echo date('d/M/Y H:i');
        echo '<hr>';
        //Calcular datas

        $data_inicial = '2021-04-24';
        $data_final = '2022-05-24';

        $time_inicial = strtotime($data_final); //Transformas datas textuais em segundos
        $time_final = strtotime($data_final);

        $diferenca_times =  abs($time_final - $time_inicial); //retorna o valor absouto do numero

        $segundos_dia = 24 * 60 * 60;

        echo 'Um dia tem: ' .$segundos_dia. 'segundos';
        echo '<hr>';

       $diferenca_datas =  $diferenca_times /  $segundos_dia;
 
       echo 'A diferença de dias é: '.$diferenca_datas;
 
    ?>
</body>
</html>