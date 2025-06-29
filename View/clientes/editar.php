<?php require_once __DIR__ . '/../../session_start.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Editar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: Arial, sans-serif;
      color: #0d47a1;
      padding: 30px;
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
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
    }
    label {
      font-weight: 600;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>

  <h2>Editar Cliente</h2>
  <form action="index.php?classe=Cliente&metodo=update" method="POST" class="row g-3">
    <input type="hidden" name="id" value="<?= htmlspecialchars($cliente->getId()) ?>" />

    <div class="col-md-6">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($cliente->getNome()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf" value="<?= htmlspecialchars($cliente->getCpf()) ?>" required />
    </div>

    <div class="col-md-4">
      <label for="dt_nasc" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" value="<?= htmlspecialchars($cliente->getDt_nasc()) ?>" required />
    </div>

    <div class="col-md-4">
      <label for="whatsapp" class="form-label">Whatsapp</label>
      <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= htmlspecialchars($cliente->getWhatsapp()) ?>" required />
    </div>

    <div class="col-md-4">
      <label for="logradouro" class="form-label">Logradouro</label>
      <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= htmlspecialchars($cliente->getLogradouro()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="num" class="form-label">Número</label>
      <input type="text" class="form-control" id="num" name="num" value="<?= htmlspecialchars($cliente->getNum()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="bairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" value="<?= htmlspecialchars($cliente->getBairro()) ?>" required />
    </div>

    <div class="col-12 text-end">
      <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
  </form>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
