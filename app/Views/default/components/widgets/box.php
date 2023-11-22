<!-- small box -->
<div class="small-box bg-<?= isset($box_color) ? $box_color : 'info' ?>">
    <div class="inner">
        <h3><?= isset($box_title) ? $box_title : '' ?></h3>
        <p><?= isset($box_text) ? $box_text : '' ?></p>
    </div>
    <div class="icon">
        <i class="ion ion-<?= isset($box_icon) ? $box_icon : 'bag' ?>"></i>
    </div>
    <a href="<?= isset($box_link) ? $box_link : '#' ?>" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
</div>
