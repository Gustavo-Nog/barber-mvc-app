<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Barber2men</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #e3f2fd;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #1976d2;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .nav-link:hover {
      text-decoration: underline;
    }
    h2 {
      margin-top: 30px;
      color: #0d47a1;
    }
    label {
      font-weight: bold;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Barber2men</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php?classe=Cliente&metodo=index">Clientes</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?classe=Servico&metodo=index">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?classe=Produto&metodo=index">Produtos</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?classe=Agendamento&metodo=index">Agendamentos</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?classe=Compra&metodo=index">Compras</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container pt-5" style="margin-top: 80px;">
