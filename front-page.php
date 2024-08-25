<?= get_header() ?>

<main>
    <?= includeMainVisual() ?><?php //メインビジュアル ?>

    <div class="section-wrapper">
        <?= includeAbilistySection() ?><?php // 「できること」セクション ?>
        <?= includeResultSection() ?><?php // 「実績」セクション ?>
        <?= includeSelfIntroductionSection() ?><?php // 「自己紹介」セクション ?>
        <?= includeContactSection() ?><?php // 「お問い合わせ」セクション ?>
    </div>
</main>

<?= get_footer() ?>
