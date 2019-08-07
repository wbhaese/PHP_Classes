
Livros e leitores

<?php
  require_once 'Livro.php';
  require_once 'Pessoa.php';

  echo '-----------------------------';

  $p1 = new Pessoa('João','30','M');
  //$p1 -> fazerAniversario();
  $p2 = new Pessoa('Maria','25','F');
  echo '-----------------------------';

  $l1 = new Livro('Culinaria Vovó','Dª Benta','200',$p1);

  echo '-----------------------------';

  $l2 = new Livro('Medicina Alternativa','Dr. José','350',$p2);
  
  $l1 -> detalhes();
  echo '-----------------------------';
  $l2->detalhes();
  echo '-----------------------------';

  print_r($l1);
  print_r($l2);
  
  

  
?>

 