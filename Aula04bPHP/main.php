<?php
  require_once 'Caneta.php';

  $c1 = new Caneta("BIC", "Verde", 0.5);
  $c2 = new Caneta("Teste","Vermelha",0.8);

  //$c1->setModelo();
  //$c1->setPonta(0.5);
  //$c1-> cor = "Verde";

  print "Tenho caneta {$c1->getModelo()} de ponta {$c1->getPonta()}, ela possui a cor {$c1->cor}. Ela está {$c1->statusTampa} ";

  print_r($c1);
  print_r($c2);
	?>