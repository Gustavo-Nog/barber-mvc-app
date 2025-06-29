<?php
require_once './Models/Produto.php';
require_once './Core/Conexao.php';

class ProdutoDAO {
  private $conexao;

  public function __construct() {
    $this->conexao = Conexao::conectar();
  }

  public function listarTudo() {
    $sql = "SELECT * FROM produtos";
    $resp = $this->conexao->query($sql);
    $dados = $resp->fetchAll(PDO::FETCH_ASSOC);
    $produtos = [];

    foreach ($dados as $dado) {
      $p = new Produto();
      $p->setId($dado['id']);
      $p->setNome($dado['nome']);
      $p->setValor($dado['valor']);
      $p->setMarca($dado['marca']);
      $p->setCategoria($dado['categoria']);
      $produtos[] = $p;
    }

    return $produtos;
  }

  public function buscar($id) {
    $sql = "SELECT * FROM produtos WHERE id = :id";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindParam(':id', $id);
    $stmnt->execute();
    $dado = $stmnt->fetch(PDO::FETCH_ASSOC);

    $p = new Produto();
    $p->setId($dado['id']);
    $p->setNome($dado['nome']);
    $p->setValor($dado['valor']);
    $p->setMarca($dado['marca']);
    $p->setCategoria($dado['categoria']);

    return $p;
  }

  public function inserir($produto) {
    $sql = "INSERT INTO produtos (nome, valor, marca, categoria) VALUES (:nome, :valor, :marca, :categoria)";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindValue(':nome', $produto->getNome());
    $stmnt->bindValue(':valor', $produto->getValor());
    $stmnt->bindValue(':marca', $produto->getMarca());
    $stmnt->bindValue(':categoria', $produto->getCategoria());
    return $stmnt->execute();
  }

  public function alterar($produto) {
    $sql = "UPDATE produtos SET nome=:nome, valor=:valor, marca=:marca, categoria=:categoria WHERE id=:id";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindValue(':id', $produto->getId());
    $stmnt->bindValue(':nome', $produto->getNome());
    $stmnt->bindValue(':valor', $produto->getValor());
    $stmnt->bindValue(':marca', $produto->getMarca());
    $stmnt->bindValue(':categoria', $produto->getCategoria());
    return $stmnt->execute();
  }

  public function excluir($produto) {
    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindValue(':id', $produto->getId());
    return $stmnt->execute();
  }
}
