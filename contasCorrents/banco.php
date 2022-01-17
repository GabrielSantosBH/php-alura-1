<?php
 // para importar usar  o  require_once 
 // &para a referencia da conta  
 

    function depositar ( $valor , $saldo ) {
        if( $valor > 0 ){
            $novoSaldo = $saldo + $valor ; 
            return $novoSaldo ; 
        }
        else{
            echo 'ERRO O Valor FOi Negativo ' ;
        }
    };

    function sacar ($valor , $saldo ){
        if( $valor > $saldo ){
            echo "Erro Vc não pode sacar esse valor  "  . PHP_EOL ;

        }
        else{
            $novoSaldo =   $saldo -  $valor;
            echo " saque feito com susseso "  .  PHP_EOL ;
            return $novoSaldo;
        }
    }

    $contasCorrente = [
        "gabriel" => [
            "cpf" => "111-222-333-444" ,
            "titular" => " gabriel santos freitad de oliveira ", 
            "saldo" =>  1000,
        ]
        ,
        "daneil" => [
            "cpf" => "111-222-333-444" ,
            "titular" => " gabriel santos freitad de oliveira ", 
            "saldo" =>  1000,
        ]

        ];

    echo " antes do saque " . $contasCorrente["gabriel"]["saldo"] . PHP_EOL ;
    $contasCorrente["gabriel"]["saldo"] = sacar(50,$contasCorrente['gabriel']["saldo"]);
    echo " depois  do saque " ,  $contasCorrente["gabriel"]["saldo"] . PHP_EOL  ; 


    $contasCorrente["gabriel"]["saldo"] = depositar(
        5000,
        $contasCorrente['gabriel']['saldo']
    );
    echo " saldo Da sua Conta " , $contasCorrente["gabriel"]["saldo"] . PHP_EOL ; 
    unset($contasCorrente['gabriel']); 
    foreach( $contasCorrente as $i => $conta);
    {
        echo " conta {$i} {$conta['titular']} "; 
    }; 


?>