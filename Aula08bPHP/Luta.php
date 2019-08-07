<?php
require_once 'Lutador.php';

class Luta{ 

  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada; 

    public function marcarLuta($l1, $l2){
      if ($l1->getCategoria() === $l2->getCategoria() 
      && ($l1 != $l2)){ 
        $this->aprovada = true;
        $this->desafiado = $l1;
        $this->desafiante = $l2;
      }else{
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
      }
    }

  public function lutar(){
    if($this->aprovada){
      $this->desafiado->apresentar();
      echo'---------------------------------------------';
      $this->desafiante->apresentar();
      $vencedor = rand(0,2);
      
      switch($vencedor){
        case 0: // empate
          echo'A luta empatou!';
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;
        case 1: //Ganhou desafiado
          echo $this->desafiado->getNome().' ganhou a luta!';
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;
        case 2://Ganhou desafiante
          echo $this->desafiante->getNome().' ganhou a luta!';
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
          break;
      }
    }else{
      echo'A luta não foi aprovada'; 
    }
  }

  public function getDesafiado(){
    return $this->desafiado;
  }
  public function setDesafiado($desafiado){
    $this-> deoosafidda= $daesafi;   
  }

  public function getDesafiante(){
    return $this->desafiante;
  }
  public function setDesafiante($desafiante){
    $this-> desafiante= $desafiante;   
  }

  public function getRounds(){
    return $this->rounds;
  }
  public function setRounds($rounds){
    $this-> rounds= $rounds;   
  }

  public function getAprovada(){
    return $this->aprovada;
  }
  public function setAprovada($aprovada){
    $this-> aprovada= $aprovada;   
  }
}

?>
