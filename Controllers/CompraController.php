<?php

require_once './Models/Compra.php';
require_once './Models/DAO/CompraDAO.php';

class CompraController {
  private $compra;
  private $compraDAO;

  public function __construct() {
    $this->compra = new Compra();
    $this->compraDAO = new CompraDAO();
  }

  public function index() {
    $compras = $this->compraDAO->listarTudo();
    session_start();
    $_SESSION['POST'] = $compras;
    require './View/compras/mostrar_tudo.php';
  }

  public function show($id) {
    $compra = $this->compraDAO->buscar($id);
    session_start();
    $_SESSION['POST'] = $compra;
    require './View/compras/registro.php';
  }

  public function create() {
    require_once './Models/DAO/ProdutoDAO.php'; // ou onde estiver o DAO de produtos
    $produtoDAO = new ProdutoDAO();
    $produtos = $produtoDAO->listarTudo(); // método que lista todos os produtos
    require './View/compras/novo.php';
  }

  public function store() {
    require_once './Models/DAO/ProdutoDAO.php';
    $produtoDAO = new ProdutoDAO();

    if (!$produtoDAO->buscar($_POST['produto_id'])) {
        // Produto inválido, exibir mensagem de erro
        session_start();
        $_SESSION['erro'] = "Produto inválido. Por favor, selecione um produto válido.";
        header('Location: index.php?classe=Compra&metodo=create');
        exit;
    } 

    $this->compra->setClienteId($_POST['cliente_id']);
    $this->compra->setProdutoId($_POST['produto_id']);
    $this->compra->setQtd($_POST['qtd']);
    $this->compra->setData($_POST['data']);
    $this->compra->setHorario($_POST['horario']);
    $this->compraDAO->inserir($this->compra);
    header('Location: index.php?classe=Compra&metodo=index');
  }

  public function edit($id) {
    $compra = $this->compraDAO->buscar($id);
    session_start();
    $_SESSION['POST'] = $compra;
    require './view/compras/editar.php';
  }

  public function update() {
    $this->compra->setId($_POST['id']);
    $this->compra->setClienteId($_POST['cliente_id']);
    $this->compra->setProdutoId($_POST['produto_id']);
    $this->compra->setQtd($_POST['qtd']);
    $this->compra->setData($_POST['data']);
    $this->compra->setHorario($_POST['horario']);
    $this->compraDAO->alterar($this->compra);
    header('Location: index.php?classe=Compra&metodo=index');
  }

  public function delete($id) {
    $this->compra->setId($id);
    $this->compraDAO->excluir($this->compra);
    header('Location: index.php?classe=Compra&metodo=index');
  }
}
