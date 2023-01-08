<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <?php 

        //funcao void
        function exibirBoasVindas(){
            echo 'Bem vindo ao PHP <br />';
        }

        exibirBoasVindas();

        //funcao com retorno

        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;

            return $area;
        }

        echo calcularAreaTerreno(30,50)
    ?>
</body>
</html>