<?php

require_once './Models/Servico.php';
require_once './Core/Conexao.php';

class ServicoDAO {
  private $servico;
  private $conexao;

  public function __construct() {
    $this->servico = new Servico();
    $this->conexao = Conexao::conectar();
  }

  public function listarTudo() {
    $sql = "SELECT * FROM servicos";
    $resp = $this->conexao->query($sql);
    $dados = $resp->fetchAll(PDO::FETCH_ASSOC);
    $servicos = [];

    foreach ($dados as $dado) {
      $s = new Servico();
      $s->setId($dado['id']);
      $s->setNome($dado['nome']);
      $s->setValor($dado['valor']);
      $s->setDescricao($dado['descricao']);
      $servicos[] = $s;
    }

    return $servicos;
  }

  public function buscar($id) {
    $sql = "SELECT * FROM servicos WHERE id = :id";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindParam(':id', $id);
    $stmnt->execute();
    $dado = $stmnt->fetch(PDO::FETCH_ASSOC);

    $s = new Servico();
    $s->setId($dado['id']);
    $s->setNome($dado['nome']);
    $s->setValor($dado['valor']);
    $s->setDescricao($dado['descricao']);
    return $s;
  }

  public function inserir($servico) {
    $sql = "INSERT INTO servicos (nome, valor, descricao) VALUES (:nome, :valor, :descricao)";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindValue(':nome', $servico->getNome());
    $stmnt->bindValue(':valor', $servico->getValor());
    $stmnt->bindValue(':descricao', $servico->getDescricao());
    return $stmnt->execute();
  }

  public function alterar($servico) {
    $sql = "UPDATE servicos SET nome=:nome, valor=:valor, descricao=:descricao WHERE id=:id";
    $stmnt = $this->conexao->prepare($sql);
    $stmnt->bindValue(':id', $servico->getId());
    $stmnt->bindValue(':nome', $servico->getNome());
    $stmnt->bindValue(':valor', $servico->getValor());
    $stmnt->bindValue(':descricao', $servico->getDescricao());
    return $stmnt->execute();
  }

    public function excluir($id) {
        $sql = "DELETE FROM servicos WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();
    }


}
?>
