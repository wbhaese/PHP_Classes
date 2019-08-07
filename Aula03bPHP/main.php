<?php
require_once 'Caneta.php';
	$c1 = new Caneta;
  
  $c1 -> modelo = "BIC Crystal";
  $c1 -> cor = "Azul";
  //$c1 -> ponta = 0.5;
  //$c1 -> carga = 99;
  

  $c1->rabiscar();
  $c1->tampar();
  echo $c1(cor);

  print_r($c1);
	?>