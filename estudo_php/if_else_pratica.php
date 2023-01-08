<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else Pratica</title>
</head>
<body>

    <?php
        
        $usuario_cartao = true;
        $valor_compra = 80;
        $valor_frete = 50;
        $recebeu_desconto_frete = true;
        if($usuario_cartao && $valor_compra >= 400){
            $valor_frete = 0;
        }else if ($usuario_cartao && $valor_compra >= 300){  //if encadeado
            $valor_frete = 10;
        }else if($usuario_cartao && $valor_compra >= 100){
            $valor_frete = 25;
        } else{
            $recebeu_desconto_frete = false;
        }
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui Cartao da loja?
        <?php 
            if($usuario_cartao){
                echo 'Sim';
            }else{
                echo 'Não';
            }  
        ?>
    </p>

    <p>Valor da compra: 
        <?php 
            echo $valor_compra;
        ?>
    </p>

    <p>Recebeu Desconto no frete?
        <?php 
            if($recebeu_desconto_frete == true){
                echo 'Sim';
            }else{
                echo 'Não';
            }  
        ?>
    </p>

    <p>Valor do frete: 
        <?php 
            echo $valor_frete;
        ?>
    </p>

    
</body>
</html>