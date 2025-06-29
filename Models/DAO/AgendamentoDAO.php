<?php
require_once "./Models/Agendamento.php";
require_once "./Core/Conexao.php";

class AgendamentoDAO {
  private $conexao;

  public function __construct() {
    $this->conexao = Conexao::conectar();
  }

  public function listarTudo() {
    $sql = "SELECT * FROM agendamentos";
    $res = $this->conexao->query($sql);
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    $agendamentos = [];

    foreach ($dados as $d) {
      $a = new Agendamento();
      $a->setId($d['id']);
      $a->setClienteId($d['cliente_id']);
      $a->setServicoId($d['servico_id']);
      $a->setData($d['data']);
      $a->setHorario($d['horario']);
    $a->setDuracao($d['duracao']);
    $a->setStatus($d['status']);

      $agendamentos[] = $a;
    }

    return $agendamentos;
  }

  public function buscar($id) {
    $sql = "SELECT * FROM agendamentos WHERE id = ?";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$id]);
    $d = $stmt->fetch(PDO::FETCH_ASSOC);

    $a = new Agendamento();
    $a->setId($d['id']);
    $a->setClienteId($d['cliente_id']);
    $a->setServicoId($d['servico_id']);
    $a->setData($d['data']);
    $a->setHorario($d['horario']);
    $a->setDuracao($d['duracao']);
    $a->setStatus($d['status']);


    return $a;
  }

  public function inserir($agendamento) {
    $sql = "INSERT INTO agendamentos (cliente_id, servico_id, data, horario, duracao, status) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->conexao->prepare($sql);
    return $stmt->execute([
      $agendamento->getClienteId(),
      $agendamento->getServicoId(),
      $agendamento->getData(),
      $agendamento->getHorario(),
      $agendamento->getDuracao(),
      $agendamento->getStatus()
    ]);
  }

    public function alterar($agendamento) {
        $sql = "UPDATE agendamentos SET cliente_id = ?, servico_id = ?, data = ?, horario = ?, duracao = ?, status = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([
            $agendamento->getClienteId(),
            $agendamento->getServicoId(),
            $agendamento->getData(),
            $agendamento->getHorario(),
            $agendamento->getDuracao(),
            $agendamento->getStatus(),
            $agendamento->getId() // <-- Aqui agora está certo!
        ]);
    }


  public function excluir($agendamento) {
    $sql = "DELETE FROM agendamentos WHERE id = ?";
    $stmt = $this->conexao->prepare($sql);
    return $stmt->execute([$agendamento->getId()]);
  }
}
