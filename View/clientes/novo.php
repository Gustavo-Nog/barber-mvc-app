<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Barber2men - Novo Cliente</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  
  <style>
    /* ===== Estilos Gerais ===== */
    body {
      background-color: #e3f2fd;
      color: #0d47a1;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Navbar personalizada */
    .navbar-custom {
      background-color: #1976d2;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
      color: white;
    }
    .navbar-custom .nav-link:hover {
      color: #bbdefb;
    }

    /* Container do formulário */
    .container-form {
      margin-top: 40px;
      max-width: 600px;
      background: white;
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(25, 118, 210, 0.3);
    }

    h2 {
      margin-bottom: 25px;
      color: #0d47a1;
      text-align: center;
    }

    label {
      font-weight: 600;
    }

    .btn-primary {
      background-color: #1976d2;
      border-color: #1976d2;
    }
    .btn-primary:hover {
      background-color: #0d47a1;
      border-color: #0d47a1;
    }
  </style>
</head>

<body>
    <?php require __DIR__ . '/../layout/header.php'; ?>

    <h2>Novo Cliente</h2>
    <form method="post" action="../../index.php?classe=Cliente&metodo=store">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" id="nome" name="nome" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" id="cpf" name="cpf" class="form-control" maxlength="11" required>
      </div>
      <div class="mb-3">
        <label for="dt_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" id="dt_nasc" name="dt_nasc" class="form-control">
      </div>
      <div class="mb-3">
        <label for="whatsapp" class="form-label">WhatsApp</label>
        <input type="text" id="whatsapp" name="whatsapp" class="form-control">
      </div>
      <div class="mb-3">
        <label for="logradouro" class="form-label">Logradouro</label>
        <input type="text" id="logradouro" name="logradouro" class="form-control">
      </div>
      <div class="mb-3">
        <label for="num" class="form-label">Número</label>
        <input type="text" id="num" name="num" class="form-control">
      </div>
      <div class="mb-3">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" id="bairro" name="bairro" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </form>
    <?php require __DIR__ . '/../layout/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
