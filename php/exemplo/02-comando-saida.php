<?php

    //echo 'olá, mundo! </br>';

   //echo print('');

    // echo $diaAtual = date('d');
    // echo $diaAtual - 1 ;

$dia = date('d') - 1;
$mes = date('m');
$ano = date('Y');
$data = mktime(0,0,0,$mes,$dia,$ano);
echo "ontem: ".date('d/m/Y',$data);

echo '$nome';

?>