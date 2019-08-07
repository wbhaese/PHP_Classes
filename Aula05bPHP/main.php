<?php
  require_once 'ContaBanco.php';

  $c1 = new ContaBanco('001','CP','José',50,true);
  $c1->setNumConta('001');
  $c1->setTipo('CP');
  $c1->setDono('José');
  $c1->setSaldo(50);
  $c1->setStatus(true);

  $c2 = new ContaBanco();
  $c2->setNumConta('002');
  $c2->setTipo('CP');
  $c2->setDono('Maria');
  $c2->setSaldo(500);
  $c2->setStatus(True);

  $c3 = new ContaBanco;
  $c3->abrirConta('003','CP','André');

  //Testando métodos
  $c3->consultarConta();
  $c3->depositar(500);
  $c3->sacar(300);
  $c3->pagarMensalidade();

  print "";

  print_r($c1);
  print_r($c2);
  print_r($c3);
	?>