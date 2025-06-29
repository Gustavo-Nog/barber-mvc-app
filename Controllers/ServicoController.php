<?php

require_once __DIR__ . '/../Models/Servico.php';
require_once __DIR__ . '/../Models/DAO/ServicoDAO.php';


class ServicoController {
  private $servico;
  private $servicoDAO;

  public function __construct() {
    $this->servico = new Servico();
    $this->servicoDAO = new ServicoDAO();
  }

  public function index() {
    $servicos = $this->servicoDAO->listarTudo();
    session_start();
    $_SESSION['POST'] = $servicos;
    require __DIR__ . '/../View/servicos/mostrar_tudo.php';
  }

  public function show($id) {
    $servico = $this->servicoDAO->buscar($id);
    session_start();
    $_SESSION['POST'] = $servico;
    require './View/servicos/registro.php';
  }

  public function create() {
    require './View/servicos/novo.php';
  }

  public function store() {
    $this->servico->setNome($_POST['nome']);
    $this->servico->setValor($_POST['valor']);
    $this->servico->setDescricao($_POST['descricao']);
    $this->servicoDAO->inserir($this->servico);
    header('Location: index.php?classe=Servico&metodo=index');
  }

  public function edit($id) {
    $servico = $this->servicoDAO->buscar($id);
    session_start();
    $_SESSION['POST'] = $servico;
    require './View/servicos/editar.php';
  }

  public function update() {
    $this->servico->setId($_POST['id']);
    $this->servico->setNome($_POST['nome']);
    $this->servico->setValor($_POST['valor']);
    $this->servico->setDescricao($_POST['descricao']);
    $this->servicoDAO->alterar($this->servico);
    header('Location: index.php?classe=Servico&metodo=index');
  }

    public function delete($id) {
        session_start();
        try {
            $this->servicoDAO->excluir($id);
            header("Location: index.php?classe=Servico&metodo=index");
        } catch (PDOException $e) {
            $_SESSION['erro'] = "Não é possível excluir este serviço. Existem agendamentos vinculados a ele.";
            header("Location: index.php?classe=Servico&metodo=index");
        }
    }
}
