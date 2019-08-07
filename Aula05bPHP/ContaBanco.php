<?php
class ContaBanco{
  public $numConta = '0000';
  protected $tipo = 'CP';
  private $dono = 'Titular';
  private $saldo = 0;
  private $status = false;

//constructors
  public function __construct(){
    $this->numConta = 0001;
    $this->tipo='CP';
    $this->dono = 'Titular';
    $this->saldo = 0;
    $this->status = false;  
  }

  public function ContaBanco($nC, $t, $d, $sa, $st){
    $this->numConta = $nC;
    $this->tipo=$t;
    $this->dono = $d;
    $this->saldo = $sa;
    $this->status = $st;    
  }

//Getters and setters
  public function getNumConta(){
    return $this->numConta;
  }
  public function setNumConta($nC){
    $this->numConta = $nC;
  }

  public function getTipo(){
    return $this->tipo;
  }
  public function setTipo($t){
    $this->tipo = $t;
  }

  public function getDono(){
    return $this->dono;
  }
  public function setDono($d){
    $this->dono = $d;   
  }

  public function getSaldo(){
    return $this->saldo;
  }
  public function setSaldo($sa){
    $this->saldo = $sa;
  }

  public function getStatus(){
    return $this->status;
  }
  public function setStatus($st){
    $this->status = $st; 
  }
  //getters and setters

  //Methods

  //Opening account on the Bank
  public function abrirConta($nC, $t, $d){
      $this->numConta = $nC;
      $this->tipo=$t;
      $this->dono = $d;
      if ($t == 'CC'){
        $this->saldo = 50;
      }else{
        $this->saldo = 150;        
      }
      
      $this->status = true; 
      echo "Sua conta foi aberta com sucesso! Informações: Nome: {$this->dono}, Conta: {$this->numConta}, Tipo: {$this->tipo}, Saldo: {$this->saldo}.           "; 
  }

  //Closing account on the Bank
  public function fecharConta(){
    if ($this->saldo == 0){
      $this->numConta = '000';
      $this->tipo='';
      $this->dono='';
      $this->saldo=0;
      $this->status=false;
      echo 'Conta encerrada com sucesso';
    }else{
      echo "Não foi possível fechar a conta, pois o saldo é de {$this->saldo}";
    }
  }

  //Readind informations
  public function consultarConta(){    
    "Nome: {$this->dono}, Conta: {$this->numConta}, Tipo: {$this->tipo}, Saldo: {$this->saldo}.";
  }

  //depositing money
  public function depositar($sa){
    if($this->getStatus() == true){
      $this->setSaldo($this->getSaldo() + $sa);
      echo "Você depositou {$sa} e possui no momento {$this->getSaldo()}.   ";
    }else{
      echo "Não foi possível depositar, pois a conta não está ativa.   ";
    }
  }

  //Withdraing money
  public function Sacar($sac){
    if($this->getStatus() == true && $this->getSaldo() >= $sac){
      $this->setSaldo($this->getSaldo() - $sac);
      echo "Você sacou {$sac} e possui no momento {$this->getSaldo()}";
    }else if($this->getStatus() == true && $this->getSaldo() < $sac){
      echo "Seu saldo é de {$this->getSaldo()}, insuficiente para o saque. Escolha outro valor.";   
    }else{
      echo "Não foi possível realizar o saque pois a conta está initiva"; 
    }
  }

  public function pagarMensalidade(){    
    if($this->getStatus()){
      if($this->getTipo() == 'CP'){
        $pagamento = 12;
        $this->setSaldo($this->getSaldo() - $pagamento);
      }else{
        $pagamento = 20;
        $this->setSaldo($this->getSaldo() - $pagamento);
      }
    }else{
      echo 'Não foi possível realizar o pagamento pois a conta está inativa';
    }
  }

}

?>