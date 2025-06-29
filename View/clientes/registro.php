<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Detalhes do Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

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
    .card {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>

  <h2 class="text-center">Detalhes do Cliente</h2>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?= $cliente->getNome() ?></h5>
      <p><strong>CPF:</strong> <?= $cliente->getCpf() ?></p>
      <p><strong>Data de Nascimento:</strong> <?= $cliente->getDt_nasc() ?></p>
      <p><strong>Whatsapp:</strong> <?= $cliente->getWhatsapp() ?></p>
      <p><strong>Endereço:</strong> <?= $cliente->getLogradouro() ?>, <?= $cliente->getNum() ?> - <?= $cliente->getBairro() ?></p>
    </div>
  </div>

  <div class="mt-3 text-end">
    <a href="index.php?classe=Cliente&metodo=index" class="btn btn-secondary">Voltar</a>
    <a href="index.php?classe=Cliente&metodo=edit&id=<?= $cliente->getId() ?>" class="btn btn-primary">Editar</a>
  </div>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
