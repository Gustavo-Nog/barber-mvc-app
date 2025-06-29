<?php
require_once __DIR__ . '/../session_start.php';
require_once __DIR__ . '/../Models/Agendamento.php';
require_once __DIR__ . '/../Models/DAO/AgendamentoDAO.php';

class AgendamentoController {
    private $agendamentoDAO;

    public function __construct() {
        $this->agendamentoDAO = new AgendamentoDAO();
    }

    public function index() {
        $agendamentos = $this->agendamentoDAO->listarTudo();
        require __DIR__ . '/../View/agendamentos/mostrar_tudo.php';
    }

    public function show($id) {
        $agendamento = $this->agendamentoDAO->buscar($id);
        require __DIR__ . '/../View/agendamentos/registro.php';
    }

    public function create() {
        require __DIR__ . '/../View/agendamentos/novo.php';
    }

    public function store() {
        $agendamento = new Agendamento();
        $agendamento->setClienteId($_POST['cliente_id']);
        $agendamento->setServicoId($_POST['servico_id']);
        $agendamento->setData($_POST['data']);
        $agendamento->setHorario($_POST['horario']);
        $agendamento->setDuracao($_POST['duracao']);
        $agendamento->setStatus($_POST['status']);

        $this->agendamentoDAO->inserir($agendamento);

        $_SESSION['flash_success'] = "Agendamento cadastrado com sucesso!";
        header('Location: index.php?classe=Agendamento&metodo=index');
        exit;
    }

    public function edit($id) {
        $agendamento = $this->agendamentoDAO->buscar($id);
        require __DIR__ . '/../View/agendamentos/editar.php';
    }

    public function update() {
        $agendamento = new Agendamento();
        $agendamento->setId($_POST['id']);
        $agendamento->setClienteId($_POST['cliente_id']);
        $agendamento->setServicoId($_POST['servico_id']);
        $agendamento->setData($_POST['data']);
        $agendamento->setHorario($_POST['horario']);
        $agendamento->setDuracao($_POST['duracao']);
        $agendamento->setStatus($_POST['status']);

        $this->agendamentoDAO->alterar($agendamento);

        $_SESSION['flash_success'] = "Agendamento atualizado com sucesso!";
        header('Location: index.php?classe=Agendamento&metodo=index');
        exit;
    }

    public function delete($id) {
        $agendamento = new Agendamento();
        $agendamento->setId($id);
        $this->agendamentoDAO->excluir($agendamento);

        $_SESSION['flash_success'] = "Agendamento excluído com sucesso!";
        header('Location: index.php?classe=Agendamento&metodo=index');
        exit;
    }
}
