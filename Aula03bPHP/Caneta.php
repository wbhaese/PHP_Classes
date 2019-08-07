<?php

class Caneta{
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;
  protected $tampadaAtivo;

  public function rabiscar(){
    if ($this->tampada == true){
      echo "erro! não posso rabiscar";
    }else{
      echo'Estou rabiscando...';
    }    
  }

  public function tampar(){
    $this->tampada = true;
    $this->tampadaAtivo = 'Sim';
  }

  public function destampar(){
    $this->tampada = false;
    $this->tampadaAtivo = 'não';
  }

}

?>