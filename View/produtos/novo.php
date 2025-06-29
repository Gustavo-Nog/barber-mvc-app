<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Novo Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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
    label {
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>


<div class="container mt-5">
  <h2>Novo Produto</h2>
  <form action="index.php?classe=Produto&metodo=store" method="POST" class="mt-4">

    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required maxlength="100" />
    </div>

    <div class="mb-3">
      <label for="valor" class="form-label">Valor (R$)</label>
      <input type="number" step="0.01" class="form-control" id="valor" name="valor" required min="0" />
    </div>

    <div class="mb-3">
      <label for="marca" class="form-label">Marca</label>
      <input type="text" class="form-control" id="marca" name="marca" maxlength="50" />
    </div>

    <div class="mb-3">
      <label for="categoria" class="form-label">Categoria</label>
      <input type="text" class="form-control" id="categoria" name="categoria" maxlength="50" />
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="index.php?classe=Produto&metodo=index" class="btn btn-secondary">Voltar</a>
  </form>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
