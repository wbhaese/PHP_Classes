
Projeto controle reomoto

<?php
  require_once 'Lutador.php';

  $l = array();
  //First Fighter
  $l[0] = new Lutador('Pretty Boy','França',31,1.75,68.9,11,2,1);

  $l[0]->apresentar();
  echo '-----------------------------';
  $l[0]->status();
  print_r($l[0]);
  echo '-----------------------------';
  
  //second Fighter
  $l[1] = new Lutador('PutScript','Brasil',29,1.68,119,14,2,3);
  $l[1]->apresentar();
  echo '-----------------------------';
  //$l[1]->perderLuta();
  $l[1]->status();
  print_r($l[1]);

  //Third Fighter
  $l[2] = new Lutador('SnapShadow','EUA',35,1.65,80.9,13,4,2);
  $l[2]->apresentar();
  echo '-----------------------------';
  $l[2]->status();
  print_r($l[2]);

  //Fourth Fighter
  $l[3] = new Lutador('UFOCobol','Brasil',37,1.70,119.3,5,6,3);
  $l[3]->apresentar();
  echo '-----------------------------';
  $l[3]->perderLuta();
  $l[3]->status();
  print_r($l[3]);
  echo '-----------------------------';
   $l[3]->apresentar();
?>

 