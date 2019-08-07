<?php

class Caneta{
  public $modelo;  
  private $ponta;
  public $cor;
  protected $carga;
  protected $tampada;
  protected $tampadaAtivo;
  public $statusTampa;

  public function Caneta($m, $c, $p){
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
  }

  public function __construct(){
    $this->cor = "Azul";
    $this->tampar();
  }

  public function getModelo(){
    return $this->modelo;
  }

  public function setModelo($m){
    $this->modelo = $m;
  }

  public function getPonta(){
    return $this->ponta;
  }

  public function setPonta($p){
    $this->ponta = $p;
  }

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
    $this->statusTampa = 'tampada';
  }

  public function destampar(){
    $this->tampada = false;
    $this->tampadaAtivo = 'não';
    $this->statusTampa = 'destampada';
  }

}

?>