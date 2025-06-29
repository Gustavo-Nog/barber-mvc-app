<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Editar Compra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: Arial, sans-serif;
      color: #0d47a1;
      padding-top: 70px; /* espaço para navbar fixa */
    }
    .navbar {
      background-color: #1976d2;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1030;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .nav-link:hover {
      text-decoration: underline;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
    }
    label {
      font-weight: 600;
    }
    form {
      max-width: 600px;
      margin: 0 auto 50px auto;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(92, 107, 192, 0.3);
    }
    .btn-primary {
      background-color: #5c6bc0;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #1976d2;
    }
    .btn-secondary {
      margin-left: 10px;
    }
  </style>
</head>
<body>
<?php require __DIR__ . '/../layout/header.php'; ?>


<h2>Editar Compra</h2>
<form action="index.php?classe=Compra&metodo=update" method="POST" novalidate>
  <input type="hidden" name="id" value="<?= htmlspecialchars($compra->getId()) ?>" />

  <div class="mb-3">
    <label for="cliente_id" class="form-label">ID do Cliente</label>
    <input type="number" id="cliente_id" name="cliente_id" class="form-control" value="<?= htmlspecialchars($compra->getClienteId()) ?>" required />
  </div>

  <div class="mb-3">
    <label for="produto_id" class="form-label">ID do Produto</label>
    <input type="number" id="produto_id" name="produto_id" class="form-control" value="<?= htmlspecialchars($compra->getProdutoId()) ?>" required />
  </div>

  <div class="mb-3">
    <label for="data" class="form-label">Data</label>
    <input type="date" id="data" name="data" class="form-control" value="<?= htmlspecialchars($compra->getData()) ?>" required />
  </div>

  <div class="mb-3">
    <label for="horario" class="form-label">Horário</label>
    <input type="time" id="horario" name="horario" class="form-control" value="<?= htmlspecialchars($compra->getHorario()) ?>" required />
  </div>

  <div class="mb-3">
    <label for="qtd" class="form-label">Quantidade</label>
    <input type="number" id="qtd" name="qtd" class="form-control" value="<?= htmlspecialchars($compra->getQtd()) ?>" min="1" required />
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
  <a href="index.php?classe=Compra&metodo=index" class="btn btn-secondary">Voltar</a>
</form>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
