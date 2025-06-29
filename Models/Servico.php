<?php

class Servico {
  private $id;
  private $nome;
  private $valor;
  private $descricao;

  public function __construct($nome = null, $valor = null, $descricao = null) {
    $this->nome = $nome;
    $this->valor = $valor;
    $this->descricao = $descricao;
  }

  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getNome() { return $this->nome; }
  public function setNome($nome) { $this->nome = $nome; }

  public function getValor() { return $this->valor; }
  public function setValor($valor) { $this->valor = $valor; }

  public function getDescricao() { return $this->descricao; }
  public function setDescricao($descricao) { $this->descricao = $descricao; }
}

?>
