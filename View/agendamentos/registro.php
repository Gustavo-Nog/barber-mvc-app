<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Detalhes do Agendamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    body { background-color: #e3f2fd; font-family: Arial, sans-serif; }
    .navbar { background-color: #1976d2; }
    .navbar-brand, .nav-link { color: white !important; }
    .nav-link:hover { text-decoration: underline; }
    h2 { margin-top: 30px; color: #0d47a1; }
    .card { margin-top: 20px; }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>

  <h2 class="text-center">Detalhes do Agendamento</h2>
  <div class="card mx-auto" style="max-width: 500px;">
    <div class="card-body">
      <h5 class="card-title">ID: <?= $agendamento->getId() ?></h5>
      <p><strong>Cliente ID:</strong> <?= $agendamento->getClienteId() ?></p>
      <p><strong>Serviço ID:</strong> <?= $agendamento->getServicoId() ?></p>
      <p><strong>Data:</strong> <?= $agendamento->getData() ?></p>
      <p><strong>Horário:</strong> <?= $agendamento->getHorario() ?></p>
      <p><strong>Duração:</strong> <?= $agendamento->getDuracao() ?> minutos</p>
      <p><strong>Status:</strong> <?= ucfirst($agendamento->getStatus()) ?></p>
    </div>
  </div>

  <div class="mt-3 text-end">
    <a href="index.php?classe=Agendamento&metodo=index" class="btn btn-secondary">Voltar</a>
    <a href="index.php?classe=Agendamento&metodo=edit&id=<?= $agendamento->getId() ?>" class="btn btn-primary">Editar</a>
  </div>

<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
