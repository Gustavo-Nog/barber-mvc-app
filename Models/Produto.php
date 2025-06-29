<?php

class Produto {
  private $id;
  private $nome;
  private $valor;
  private $marca;
  private $categoria;

  public function __construct($nome = null, $valor = null, $marca = null, $categoria = null) {
    $this->nome = $nome;
    $this->valor = $valor;
    $this->marca = $marca;
    $this->categoria = $categoria;
  }

  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getNome() { return $this->nome; }
  public function setNome($nome) { $this->nome = $nome; }

  public function getValor() { return $this->valor; }
  public function setValor($valor) { $this->valor = $valor; }

  public function getMarca() { return $this->marca; }
  public function setMarca($marca) { $this->marca = $marca; }

  public function getCategoria() { return $this->categoria; }
  public function setCategoria($categoria) { $this->categoria = $categoria; }
}

