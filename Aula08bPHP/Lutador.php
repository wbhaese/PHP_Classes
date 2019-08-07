<?php
  class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
      $this-> nome = $nome; 
      $this-> nacionalidade = $nacionalidade; 
      $this-> idade = $idade;
      $this-> altura = $altura; 
      $this-> setPeso($peso);//We can set the information direcly, but for training we'll use this method
      $this-> vitorias = $vitorias; 
      $this-> derrotas = $derrotas; 
      $this-> empates = $empates;

    }

    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this-> nome= $nome;   
    }

    public function getNacionalidade(){
      return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
      $this-> nacionalidade = $nacionalidade;  
    }

    public function getIdade(){
      return $this->idade;
    }
    public function setIdade($idade){
      $this-> idade = $idade;   
    }

    public function getAltura(){
      return $this->altura;
    }
    public function setAltura($altura){
      $this-> altura = $altura;   
    }

    public function getPeso(){
      return $this->peso;
    }
    public function setPeso($peso){
      $this-> peso = $peso; 
      $this-> setCategoria();  
    }

    public function getVitorias(){
      return $this->vitorias;
      //echo '$this->vitorias';
    }
    public function setVitorias($vitorias){
      $this-> vitorias = $vitorias;   
    }

    public function getDerrotas(){
      return $this->derrotas;
    }
    public function setDerrotas($derrotas){
      $this-> derrotas = $derrotas;   
    }

    public function ganharLuta(){
      //$this->setVitorias(getVitorias() + 1);    
    }

    public function perderLuta(){
      $this->setDerrotas($this->derrotas + 1);    
    }

    public function getEmpates(){
      return $this->empates;
    }
    public function setEmpates($empates){
      $this-> empates = $empates;   
    }

    public function getCategoria(){
      return $this->categoria;
    }
    private function setCategoria(){
      if ($this->peso < 52.2){
        $this-> categoria = 'Inválido'; 
      }elseif ($this->peso <= 70.3){
        $this-> categoria = 'Leve'; 
      }elseif ($this->peso <= 83.9){
        $this-> categoria = 'Médio'; 
      }elseif ($this->peso <= 120.2){
        $this-> categoria = 'Pesado'; 
      } else{
        echo 'inválido';
      }   
    }

    public function apresentar(){
      echo 'Apresentando lutador: ';
      echo ' - Lutador: '.$this->getNome();
      echo ' - é um peso '.$this->getCategoria();
      echo ' - Origem: '.$this->getNacionalidade();
      echo ' - Idade: '.$this->getIdade();
      echo ' - Altura: '.$this->getAltura();
      echo ' - Pesando: '.$this->getPeso();
      echo ' - Ganhou: '.$this->getVitorias(). ' batalhas. ';
      echo ' - Perdeu: '.$this->getDerrotas();
      echo ' - Empatou '.$this->getEmpates();    
    }

    public function status(){
      echo 'Status: ';
      $this->getNome();
      echo ' - Categoria: '.$this->getCategoria();
      echo ' - Vitórias: '.$this->getVitorias();
      echo ' - Derrotas: '.$this->getDerrotas();
      echo ' - Empates: '.$this->getEmpates(); 
    }

    public function empatarLuta(){
      $this->setEmpates(getEmpates() + 1);    
    }
  }

?>