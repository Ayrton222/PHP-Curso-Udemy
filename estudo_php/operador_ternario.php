<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Ternario</title>
</head>
<body>

    <?php
        
        $usuario_cartao = true;
        $valor_compra = 1180;
        $valor_frete = 50;
        $recebeu_desconto_frete = true;
       
        //Operador ternario Encadeado

        $valor_frete_aux = $usuario_cartao && $valor_compra >= 400 ? 0 : ($usuario_cartao && $valor_compra >= 300 ? 10 : ($usuario_cartao && $valor_compra >= 100 ? 25 : $valor_frete));

        $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

        $valor_frete = $valor_frete_aux;
       /*
        if($usuario_cartao && $valor_compra >= 400){
            $valor_frete = 0;
        }else if ($usuario_cartao && $valor_compra >= 300){  //if encadeado
            $valor_frete = 10;
        }else if($usuario_cartao && $valor_compra >= 100){
            $valor_frete = 25;
        } else{
            $recebeu_desconto_frete = false;
        }

        */
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui Cartao da loja?
       
       <?= 
            // <?= tag de impressao 
            //Operador ternario
            $usuario_cartao ? 'Sim' : 'Não';
        ?>

    </p>

    <p>Valor da compra: 
        <?php 
            echo $valor_compra;
        ?>
    </p>

    <p>Recebeu Desconto no frete?
        
        <?php
        $teste = $recebeu_desconto_frete ? 'Sim' : 'Não';
        echo $teste
        ?>
    </p>

    <p>Valor do frete: 
        <?php 
            echo $valor_frete;
        ?>
    </p>

    
</body>
</html>