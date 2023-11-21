<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?= isset($card_title) ? $card_title : '' ?></h3>

        <p class="card-text">
            <?= isset($card_text) ? $card_text : '' ?>
        </p>

        <?= isset($card_links) ? $card_links : '' ?>
    </div>
</div>
