<?php
require_once "./Core/Conexao.php";
require_once "./Models/Cliente.php";

class ClienteDAO {
  private $conexao;

  public function __construct() {
    $this->conexao = Conexao::conectar();
  }

  public function listarTudo() {
    $sql = "SELECT * FROM clientes";
    $stmt = $this->conexao->query($sql);
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $clientes = [];

    foreach ($dados as $d) {
      $c = new Cliente();
      $c->setId($d['id']);
      $c->setNome($d['nome']);
      $c->setCpf($d['cpf']);
      $c->setDt_nasc($d['dt_nasc']);
      $c->setWhatsapp($d['whatsapp']);
      $c->setLogradouro($d['logradouro']);
      $c->setNum($d['num']);
      $c->setBairro($d['bairro']);
      $clientes[] = $c;
    }

    return $clientes;
  }

  public function inserir($cliente) {
    $sql = "INSERT INTO clientes (nome, cpf, dt_nasc, whatsapp, logradouro, num, bairro) 
            VALUES (:nome, :cpf, :dt_nasc, :whatsapp, :logradouro, :num, :bairro)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':nome', $cliente->getNome());
    $stmt->bindValue(':cpf', $cliente->getCpf());
    $stmt->bindValue(':dt_nasc', $cliente->getDt_nasc());
    $stmt->bindValue(':whatsapp', $cliente->getWhatsapp());
    $stmt->bindValue(':logradouro', $cliente->getLogradouro());
    $stmt->bindValue(':num', $cliente->getNum());
    $stmt->bindValue(':bairro', $cliente->getBairro());
    return $stmt->execute();
  }

  public function buscar($id) {
    $sql = "SELECT * FROM clientes WHERE id = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $d = $stmt->fetch(PDO::FETCH_ASSOC);

    $c = new Cliente();
    $c->setId($d['id']);
    $c->setNome($d['nome']);
    $c->setCpf($d['cpf']);
    $c->setDt_nasc($d['dt_nasc']);
    $c->setWhatsapp($d['whatsapp']);
    $c->setLogradouro($d['logradouro']);
    $c->setNum($d['num']);
    $c->setBairro($d['bairro']);
    return $c;
  }

  public function alterar($cliente) {
    $sql = "UPDATE clientes 
            SET nome = :nome, cpf = :cpf, dt_nasc = :dt_nasc, whatsapp = :whatsapp, logradouro = :logradouro, num = :num, bairro = :bairro 
            WHERE id = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $cliente->getId());
    $stmt->bindValue(':nome', $cliente->getNome());
    $stmt->bindValue(':cpf', $cliente->getCpf());
    $stmt->bindValue(':dt_nasc', $cliente->getDt_nasc());
    $stmt->bindValue(':whatsapp', $cliente->getWhatsapp());
    $stmt->bindValue(':logradouro', $cliente->getLogradouro());
    $stmt->bindValue(':num', $cliente->getNum());
    $stmt->bindValue(':bairro', $cliente->getBairro());
    return $stmt->execute();
  }

  public function excluir($cliente) {
    $sql = "DELETE FROM clientes WHERE id = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $cliente->getId());
    return $stmt->execute();
  }
}
