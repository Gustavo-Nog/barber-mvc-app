<?php require_once __DIR__ . '/../../session_start.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 20px;
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
      text-align: center;
    }
    table {
      background: white;
    }
    th {
      background-color: #1976d2;
      color: white;
    }
  </style>
</head>
<body>
<?php require __DIR__ . '/../layout/header.php'; ?>


<div class="container">
  <h2>Clientes Cadastrados</h2>

  <div class="mb-3 text-end">
    <a href="index.php?classe=Cliente&metodo=create" class="btn btn-success">+ Novo Cliente</a>
  </div>

  <table class="table table-bordered table-striped table-hover">
    <thead class="text-center">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data Nasc.</th>
        <th>Whatsapp</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($clientes as $c): ?>
        <tr class="text-center">
          <td><?= $c->getId() ?></td>
          <td><?= htmlspecialchars($c->getNome()) ?></td>
          <td><?= htmlspecialchars($c->getCpf()) ?></td>
          <td><?= htmlspecialchars($c->getDt_nasc()) ?></td>
          <td><?= htmlspecialchars($c->getWhatsapp()) ?></td>
          <td>
            <a href="index.php?classe=Cliente&metodo=show&id=<?= $c->getId() ?>" class="btn btn-info btn-sm">Ver</a>
            <a href="index.php?classe=Cliente&metodo=edit&id=<?= $c->getId() ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="index.php?classe=Cliente&metodo=delete&id=<?= $c->getId() ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este cliente?');">Excluir</a>
          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
