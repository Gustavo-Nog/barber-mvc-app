<?php require_once __DIR__ . '/../../session_start.php'; ?>


$servicos = $_SESSION['POST'];
unset($_SESSION['POST']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Serviços</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: Arial, sans-serif;
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
      color: #0d47a1;
      margin-bottom: 20px;
    }
    th {
      background-color: #1976d2;
      color: white;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>

</nav>

<div class="container">
  <h2 class="text-center">Lista de Serviços</h2>

  <?php if (isset($_SESSION['erro'])): ?>
    <div class="alert alert-danger text-center">
      <?= $_SESSION['erro'] ?>
    </div>
    <?php unset($_SESSION['erro']); ?>
  <?php endif; ?>

  <div class="mb-3 text-end">
    <a href="../../index.php?classe=Servico&metodo=create" class="btn btn-success">+ Novo Serviço</a>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <thead class="text-center">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($servicos as $s): ?>
        <tr class="text-center">
          <td><?= $s->getId() ?></td>
          <td><?= htmlspecialchars($s->getNome()) ?></td>
          <td>R$ <?= number_format($s->getValor(), 2, ',', '.') ?></td>
          <td><?= htmlspecialchars($s->getDescricao()) ?></td>
          <td>
            <a href="../../index.php?classe=Servico&metodo=show&id=<?= $s->getId() ?>" class="btn btn-info btn-sm">Ver</a>
            <a href="../../index.php?classe=Servico&metodo=edit&id=<?= $s->getId() ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="../../index.php?classe=Servico&metodo=delete&id=<?= $s->getId() ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este serviço?');">Excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
