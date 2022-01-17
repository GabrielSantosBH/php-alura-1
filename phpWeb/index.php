<?php 
require_once "funcoes.php" ; 

// dados 
$contasCorrentes = [ 
    "11.22.33" => [ 
        "titular" => "gabriel santos freitas  de oliveira",
        "saldo" => 500,

    ]

    ,

    "22.33.44" => [
        "titular" => " daniel santos freitas de olivera",
        "saldo" =>  500 
    ]


    ];






?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina com php </title>
</head>
<body>
        <h1> Contas Correntes  </h1>

            <ul> 
                <?php foreach( $contasCorrentes as $cpf => $conta){ ?> 

                    <li>
                    
                    <h1> titular::  <?=  $conta['titular'] ?> </h1>
                    <p>  saldo :: <?= $conta['saldo']?></p> 
                    
                    
                    <li>
                  
                
                <?php } ?>
                
                
            


            </ul>
</body>
</html>