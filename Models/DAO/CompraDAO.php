<?php

require_once './Models/Compra.php';
require_once './Core/Conexao.php';

class CompraDAO {
  private $conexao;

  public function __construct() {
    $this->conexao = Conexao::conectar();
  }

  public function listarTudo() {
    $sql = "SELECT * FROM compras";
    $resp = $this->conexao->query($sql);
    $dados = $resp->fetchAll(PDO::FETCH_ASSOC);
    $compras = [];

    foreach ($dados as $d) {
      $c = new Compra();
      $c->setId($d['id']);
      $c->setClienteId($d['cliente_id']);
      $c->setProdutoId($d['produto_id']);
      $c->setQtd($d['qtd']);
      $c->setData($d['data']);
      $c->setHorario($d['horario']);
      $compras[] = $c;
    }

    return $compras;
  }

  public function buscar($id) {
    $sql = "SELECT * FROM compras WHERE id = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $d = $stmt->fetch(PDO::FETCH_ASSOC);

    $c = new Compra();
    $c->setId($d['id']);
    $c->setClienteId($d['cliente_id']);
    $c->setProdutoId($d['produto_id']);
    $c->setQtd($d['qtd']);
    $c->setData($d['data']);
    $c->setHorario($d['horario']);
    return $c;
  }

  public function inserir($compra) {
    $sql = "INSERT INTO compras (cliente_id, produto_id, qtd, data, horario) 
            VALUES (:cliente_id, :produto_id, :qtd, :data, :horario)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':cliente_id', $compra->getClienteId());
    $stmt->bindValue(':produto_id', $compra->getProdutoId());
    $stmt->bindValue(':qtd', $compra->getQtd());
    $stmt->bindValue(':data', $compra->getData());
    $stmt->bindValue(':horario', $compra->getHorario());
    return $stmt->execute();
  }

  public function alterar($compra) {
    $sql = "UPDATE compras SET cliente_id=:cliente_id, produto_id=:produto_id, qtd=:qtd, data=:data, horario=:horario 
            WHERE id=:id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $compra->getId());
    $stmt->bindValue(':cliente_id', $compra->getClienteId());
    $stmt->bindValue(':produto_id', $compra->getProdutoId());
    $stmt->bindValue(':qtd', $compra->getQtd());
    $stmt->bindValue(':data', $compra->getData());
    $stmt->bindValue(':horario', $compra->getHorario());
    return $stmt->execute();
  }

  public function excluir($compra) {
    $sql = "DELETE FROM compras WHERE id = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $compra->getId());
    return $stmt->execute();
  }
}
