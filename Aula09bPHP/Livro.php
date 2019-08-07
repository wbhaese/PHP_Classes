<?php 

  require_once 'Pessoa.php';
  require_once 'Publicacao.php';

  class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual = 1;
    private $aberto = true;
    private $leitor;

    public function Livro($titulo,$autor,$totPaginas,$nome){
      $this->titulo = $titulo;
      $this->autor = $autor;
      $this->totPaginas = $totPaginas;
      //$this->pagAtual = $pagAtual;
      //$this->aberto = $aberto;
      $this->leitor = $nome;//$this->getNome();
    }

    public function getTitulo(){
      return $this->titulo;
    }
    public function setTitulo($titulo){
      $this-> titulo = $titulo;   
    }
    
    public function getAutor(){
      return $this->autor;
    }
    public function setAutor($autor){
      $this-> autor = $autor;   
    }

    public function getTotPaginas(){
      return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
      $this-> totPaginas = $totPaginas; 
    }

    public function getPagAtual(){
      return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
      $this-> pagAtual = $pagAtual;   
    }

    public function getAberto(){
      return $this->aberto;
    }
    public function setAberto($aberto){
      $this-> aberto = true;   
    }

    public function getLeitor(){
      return $this->leitor;
    }
    public function setLeitor($leitor){
      $this-> leitor = $leitor;   
    }

    public function detalhes(){
      echo 'Informações do livro: - Nome: '.$this->getTitulo().' - Autor: '.$this->getAutor().' - Possui '.$this->getTotPaginas().' páginas, está '.$this->getAberto().' e o leitor atual é '.$this->leitor->getNome();
    }

    public function abrir(){
      $this->setAberto();
    }

    public function fechar(){
      $this->getAberto();
    }

    public function folhear($p){
      if ($this->getAberto() && $p <=$this->getTotPaginas()){// If is true, will leaf through
        $this->setPagAtual($p);
      }else{
        if ($p > $this->getTotPaginas()){
          echo 'Não é possível folhear pois o livro tem apenas '.$this->getTotPaginas();
        }else{
        echo 'Não é possível folhear pois o livro está '.$this->getAberto();
        }
      }
    }

    public function avancarPag(){
      if ($this->getAberto() && $this->getPagAtual() > $this->getTotPaginas()){// If is true, will leaf through
        $this->getPagAtual(+1) ;
      }else{
        if ($p > $this->getTotPaginas()){
          echo 'Não é possível folhear pois o livro tem apenas '.$this->getTotPaginas();
        }else{
        echo 'Não é possível avançar pois o livro está '.$this->getAberto();
        }
      }
    }

    public function voltarPag(){
      if ($this->getAberto() && $this->getPagAtual() >= 1){// If is true, will leaf through
        $this->getPagAtual(-1);
      }else{
        echo 'Não é possível voltar pois o livro está '.$this->getAberto();
      }
    }
  }



?>