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
<div class="row">
  <div class="col">
    <?= social(
      $user->name,
      $user->profession,
      base_url('assets/dist/img/user8-128x128.jpg'),
      'info',
      [
        'label' => 'Saldo',
        'value' => format($balance),
        'label2' => 'Faturamento',
        'value2' => format($totalDeposits),
        'label3' => 'Despesas Totais',
        'value3' => format($totalExits),
      ]
    ); ?>
  </div>
</div>
<form action="<?= base_url('client/update/'. $user->id_client) ?>" method="POST">
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
  
        <input type="text" class="form-control" id="name" value="<?= $user->name ?>">
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <input type="text" class="form-control" id="profession" value="<?= $user->profession ?>">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <button type="submit"  class="btn btn-warning w-100">Alterar</a>
      </div>
    </div>
  </div>
</form>
