<div class="card">
    <div class="card-body">
        <h5 class="title"><?= isset($card_title) ? $card_title : '' ?></h5>

        <p class="card-text">
            <?= isset($card_text) ? $card_text : '' ?>
        </p>

        <?= isset($card_links) ? $card_links : '' ?>
    </div>
</div>
