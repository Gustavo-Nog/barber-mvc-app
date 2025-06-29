<?php
require_once 'session_start.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Carregue os controllers necessários
require_once './Controller/ClienteController.php';
require_once './Controller/ServicoController.php';
require_once './Controller/ProdutoController.php';
require_once './Controller/AgendamentoController.php';
require_once './Controller/CompraController.php';
require_once './Controller/HomeController.php';

if (isset($_GET['classe']) && isset($_GET['metodo'])) {
    $classe = $_GET['classe'] . 'Controller';
    $metodo = $_GET['metodo'];

    if (class_exists($classe)) {
        $obj = new $classe();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $obj->$metodo($id);
        } else {
            $obj->$metodo();
        }
    } else {
        echo "Classe $classe não encontrada.";
    }
} else if (isset($_POST['classe']) && isset($_POST['metodo'])) {
    $classe = $_POST['classe'] . 'Controller';
    $metodo = $_POST['metodo'];

    if (class_exists($classe)) {
        $obj = new $classe();

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $obj->$metodo($id);
        } else {
            $obj->$metodo();
        }
    } else {
        echo "Classe $classe não encontrada.";
    }
} else {
    // Página inicial padrão
    $home = new HomeController();
    $home->index();
}
