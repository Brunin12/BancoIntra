<?php

function format($number)
{
  return 'R$ ' . number_format($number, 2, ',', '.');
}
$showExits = count($exits) > 0;
$showDeposits = count($deposits) > 0;
$totalExits = 0;
if (!empty($exits)) {
  foreach ($exits as $exit) {
    $totalExits += $exit->value;
  }
  $totalExits = ($totalExits);
}

$totalDeposits = 0;
if (!empty($deposits)) {
  foreach ($deposits as $deposit) {
    $totalDeposits += $deposit->value;
  }
  $totalDeposits = ($totalDeposits);
}

$balance = $user->balance;


?>
<div class="row mb-3">
  <div class="col">
    <?= box(
      'Saldo',
      format($balance),
      'cash',
      'success balance-box' 
    ) ?>
  </div>
  <div class="col">
    <?= box(
      'Faturamento',
      format($totalDeposits),
      'bag',
      'warning deposits-box' 
    ) ?>
  </div>
  <div class="col">
    <?= box(
      'Despesas Totais',
      format($totalExits),
      'card',
      'danger exits-box' 
    ) ?>
  </div>
</div>
<div class="row mb-3">
  <?php if ($showExits) : ?>
    <div class="col card mx-2 exits-col">
      <div class="card-header">
        Saídas
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>

      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Descrição</th>
              <th scope="col">Valor</th>
              <th scope="col">Data</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($exits as $exit) : ?>
              <tr id="row-exit-<?= $exit->id_movement ?>">
                <td><?= $exit->id_movement ?></td>
                <td><?= $exit->description ?></td>
                <td class="text-danger">-R$ <?= $exit->value ?></td>
                <td><?= $exit->date ?></td>
                <td>
                  <a href="<?= base_url("update/movement/{$exit->id_movement}") ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                  <div class="delete-deposit btn btn-danger btn-sm" data-id="<?= $exit->id_movement ?>"><i class="fas fa-trash"></i></div>

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($showDeposits) : ?>
    <div class="col card mx-2 deposits-col">

      <div class="card-header">
        Depositos
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>

      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Descrição</th>
              <th scope="col">Valor</th>
              <th scope="col">Data</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($deposits as $deposit) : ?>
              <tr id="row-deposit-<?= $deposit->id_movement ?>">
                <td><?= $deposit->id_movement ?></td>
                <td><?= $deposit->description ?></td>
                <td class="text-success">+R$ <?= $deposit->value ?></td>
                <td><?= $deposit->date ?></td>
                <td>
                  <a href="<?= base_url("update/movement/{$deposit->id_movement}") ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                  <div class="delete-deposit btn btn-danger btn-sm" data-id="<?= $deposit->id_movement ?>"><i class="fas fa-trash"></i></div>

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php endif; ?>
</div>
<div class="row">
  <div class="col">
    <a href="<?= base_url('register/movement') ?>" class="btn btn-primary w-100 mb-3 cadastrar">Cadastrar Movimentação</a>
  </div>
</div>