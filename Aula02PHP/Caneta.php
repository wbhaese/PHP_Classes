<?php

class Caneta{
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  function rabiscar(){
    if ($this->tampada == true){
      echo "erro! não posso rabiscar";
    }else{
      echo'Estou rabiscando...';
    }    
  }

  function tampar(){
    $this->tampada = true;
  }

  function destampar(){
    $this->tampada = false;
  }

}

?>