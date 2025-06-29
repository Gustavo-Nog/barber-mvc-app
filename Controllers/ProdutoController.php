<?php

require_once './Models/Produto.php';
require_once './Models/DAO/ProdutoDAO.php';

class ProdutoController {
  private $produto;
  private $produtoDAO;

  public function __construct() {
    $this->produto = new Produto();
    $this->produtoDAO = new ProdutoDAO();
  }

  public function index() {
    $produtos = $this->produtoDAO->listarTudo();
    session_start();
    $_SESSION['POST'] = $produtos;
    require './View/produtos/mostrar_tudo.php';
  }

  public function show($id) {
    $produto = $this->produtoDAO->buscar($id);
    session_start();
    $_SESSION['POST'] = $produto;
    require './View/produtos/registro.php';
  }

  public function create() {
    require './View/produtos/novo.php';
  }

  public function store() {
    $this->produto->setNome($_POST['nome']);
    $this->produto->setValor($_POST['valor']);
    $this->produto->setMarca($_POST['marca']);
    $this->produto->setCategoria($_POST['categoria']);
    $this->produtoDAO->inserir($this->produto);
    header('Location: index.php?classe=Produto&metodo=index');
  }

  public function edit($id) {
    $produto = $this->produtoDAO->buscar($id);
    session_start();
    $_SESSION['POST'] = $produto;
    require './view/produtos/editar.php';
  }

  public function update() {
    $this->produto->setId($_POST['id']);
    $this->produto->setNome($_POST['nome']);
    $this->produto->setValor($_POST['valor']);
    $this->produto->setMarca($_POST['marca']);
    $this->produto->setCategoria($_POST['categoria']);
    $this->produtoDAO->alterar($this->produto);
    header('Location: index.php?classe=Produto&metodo=index');
  }

  public function delete($id) {
    $this->produto->setId($id);
    $this->produtoDAO->excluir($this->produto);
    header('Location: index.php?classe=Produto&metodo=index');
  }
}

