<?php
require_once 'Caneta.php';
	$c1 = new Caneta;
	$c1->cor = "Azul";
	$c1->ponta = 0.5;
  $c1->carga = 30;  
  $c1->destampar();

  print_r($c1);
  //$c1->rabiscar();
  $c2 = new caneta;
  $c2-> cor = "Vermelha";
  $c2-> ponta = 1;
  $c2-> carga = 50;
  //$c2 -> tampada = true;
  $c2->tampar();

  print_r($c2);

  echo "A caneca C2 tem cor ".$c2.cor;

  //print_r($c1); //exibe as característica
	?>