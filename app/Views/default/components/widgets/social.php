<!-- Widget: user widget style 1 -->
<div class="card card-widget widget-user">
    <div class="widget-user-header bg-<?= $class ?>">
        <h3 class="widget-user-username"><?= $name ?></h3>
        <h5 class="widget-user-desc"><?= $slogan ?></h5>
    </div>
    <div class="widget-user-image">
        <img class="img-circle elevation-2" src="<?= $image ?>" alt="User Avatar">
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header"><?= $info['value']?></h5>
                    <span class="description-text"><?= $info['label']?></span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header"><?= $info['value2'] ?></h5>
                    <span class="description-text"><?= $info['label2'] ?></span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header"><?= $info['value3'] ?></h5>
                    <span class="description-text"><?= $info['label3'] ?></span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /.widget-user -->
