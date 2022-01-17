<?php
// contas 

$cotasCorentes = [ 
   111222333444 => [
    "titular" => "gabriel",
    "saldo" =>  1000 
],
   222111333444 =>  [
    "titular" => "daniel",
    "saldo" =>  100
],
   333111222444 =>[
    "titular" => "pai",
    "saldo" =>  10004
],
   444222333111 => [
    "titular" => "mae",
    "saldo" =>  100005
]];

$cotasCorentes[424422233111] = [
    "titular" => "teddy ",
    "saldo"  => 1000000000,
];


//  regras 

foreach($cotasCorentes as $cpf =>  $conta   ){
    echo "esse cpf $cpf e de  $conta[titular]" . PHP_EOL ;
};

