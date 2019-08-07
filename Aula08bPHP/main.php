
Projeto controle reomoto

<?php
  require_once 'Lutador.php';
  require_once 'Luta.php';

  $l = array();
  //First Fighter
  $l[0] = new Lutador('Pretty Boy','França',31,1.75,68.9,11,2,1);
  
  //second Fighter
  $l[1] = new Lutador('PutScript','Brasil',29,1.68,68,14,2,3);
  //Third Fighter
  $l[2] = new Lutador('SnapShadow','EUA',35,1.65,80.9,13,4,2);
  //Fourth Fighter
  $l[3] = new Lutador('UFOCobol','Brasil',37,1.70,119.3,5,6,3); 

  echo '-----------------------------';
  
  $UEC01 = new Luta();

  $UEC01->marcarLuta($l[0], $l[1]);
  $UEC01->lutar();
  echo '-----------------------------';
  $l[0]->status();
  echo '-----------------------------';
  $l[1]->status();
?>

 