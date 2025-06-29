<?php require_once __DIR__ . '/../../session_start.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Editar Agendamento</title>
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

  <h2>Editar Agendamento</h2>
  <form action="index.php?classe=Agendamento&metodo=update" method="POST" class="row g-3">
    <input type="hidden" name="id" value="<?= htmlspecialchars($agendamento->getId()) ?>" />

    <div class="col-md-6">
      <label for="cliente_id" class="form-label">ID do Cliente</label>
      <input type="number" name="cliente_id" id="cliente_id" class="form-control" value="<?= htmlspecialchars($agendamento->getClienteId()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="servico_id" class="form-label">ID do Serviço</label>
      <input type="number" name="servico_id" id="servico_id" class="form-control" value="<?= htmlspecialchars($agendamento->getServicoId()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="data" class="form-label">Data</label>
      <input type="date" name="data" id="data" class="form-control" value="<?= htmlspecialchars($agendamento->getData()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="horario" class="form-label">Horário</label>
      <input type="time" name="horario" id="horario" class="form-control" value="<?= htmlspecialchars($agendamento->getHorario()) ?>" required />
    </div>

    <div class="col-md-6">
      <label for="duracao" class="form-label">Duração (minutos)</label>
      <input type="number" class="form-control" id="duracao" name="duracao" required min="1" value="<?= htmlspecialchars($agendamento->getDuracao()) ?>" />
    </div>

    <div class="col-md-6">
      <label for="status" class="form-label">Status</label>
      <select class="form-control" id="status" name="status" required>
        <option value="pendente" <?= $agendamento->getStatus() === 'pendente' ? 'selected' : '' ?>>Pendente</option>
        <option value="concluido" <?= $agendamento->getStatus() === 'concluido' ? 'selected' : '' ?>>Concluído</option>
        <option value="cancelado" <?= $agendamento->getStatus() === 'cancelado' ? 'selected' : '' ?>>Cancelado</option>
      </select>
    </div>

    <div class="col-12 text-end">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
  </form>

<?php require __DIR__ . '/../layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
