<?php
require_once __DIR__ . '/../session_start.php';
require_once __DIR__ . '/../Models/Cliente.php';
require_once __DIR__ . '/../Models/DAO/ClienteDAO.php';

class ClienteController {
    private $cliente;
    private $clienteDAO;

    public function __construct() {
        $this->cliente = new Cliente();
        $this->clienteDAO = new ClienteDAO();
    }

    public function index() {
        $clientes = $this->clienteDAO->listarTudo();
        require __DIR__ . '/../View/clientes/mostrar_tudo.php';
    }

    public function show($id) {
        $cliente = $this->clienteDAO->buscar($id);
        require __DIR__ . '/../View/clientes/registro.php';
    }

    public function create() {
        require __DIR__ . '/../View/clientes/novo.php';
    }

    public function store() {
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setCpf($_POST['cpf']);
        $this->cliente->setDt_nasc($_POST['dt_nasc']);
        $this->cliente->setWhatsapp($_POST['whatsapp']);
        $this->cliente->setLogradouro($_POST['logradouro']);
        $this->cliente->setNum($_POST['num']);
        $this->cliente->setBairro($_POST['bairro']);
        $this->clienteDAO->inserir($this->cliente);

        $_SESSION['flash_success'] = "Cliente cadastrado com sucesso!";
        header('Location: index.php?classe=Cliente&metodo=index');
        exit;
    }

    public function edit($id) {
        $cliente = $this->clienteDAO->buscar($id);
        require __DIR__ . '/../View/clientes/editar.php';
    }

    public function update() {
        $this->cliente->setId($_POST['id']);
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setCpf($_POST['cpf']);
        $this->cliente->setDt_nasc($_POST['dt_nasc']);
        $this->cliente->setWhatsapp($_POST['whatsapp']);
        $this->cliente->setLogradouro($_POST['logradouro']);
        $this->cliente->setNum($_POST['num']);
        $this->cliente->setBairro($_POST['bairro']);
        $this->clienteDAO->alterar($this->cliente);

        $_SESSION['flash_success'] = "Cliente atualizado com sucesso!";
        header('Location: index.php?classe=Cliente&metodo=index');
        exit;
    }

    public function delete($id) {
        $this->cliente->setId($id);
        $this->clienteDAO->excluir($this->cliente);

        $_SESSION['flash_success'] = "Cliente excluído com sucesso!";
        header('Location: index.php?classe=Cliente&metodo=index');
        exit;
    }
}
