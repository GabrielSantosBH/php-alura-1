<?php
        function exibirNoHtml (  $contas  ){

            ["titular" => $titular , "saldo" => $saldo ] = $contas;



            $html = "<li>  Titular : {$titular}  saldo: {$saldo}  </li>";
            echo $html;
        };


?>

