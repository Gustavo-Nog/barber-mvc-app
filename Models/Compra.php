<?php

class Compra {
  private $id;
  private $cliente_id;
  private $produto_id;
  private $data;
  private $horario;
  private $qtd;

  public function __construct($cliente_id = null, $produto_id = null, $data = null, $horario = null, $qtd = null) {
    $this->cliente_id = $cliente_id;
    $this->produto_id = $produto_id;
    $this->data = $data;
    $this->horario = $horario;
    $this->qtd = $qtd;
  }

  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getClienteId() { return $this->cliente_id; }
  public function setClienteId($cliente_id) { $this->cliente_id = $cliente_id; }

  public function getProdutoId() { return $this->produto_id; }
  public function setProdutoId($produto_id) { $this->produto_id = $produto_id; }

  public function getData() { return $this->data; }
  public function setData($data) { $this->data = $data; }

  public function getHorario() { return $this->horario; }
  public function setHorario($horario) { $this->horario = $horario; }

  public function getQtd() { return $this->qtd; }
  public function setQtd($qtd) { $this->qtd = $qtd; }
}

?>
