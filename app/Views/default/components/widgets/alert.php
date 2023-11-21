<div class="alert alert-<?= isset($alert_class) ? $alert_class : 'primary' ?> alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i><?= isset($alert_title) ? $alert_title : '' ?></h5>
    <?= isset($alert_text) ? $alert_text : '' ?>
</div>
