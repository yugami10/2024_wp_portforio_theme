<?= get_header() ?>

<?= includeLoading(false) ?><?php //ここにローディング？？？ ?>

<!-- gsapの練習用コンテンツ -->
<!-- <div class="horizontal-content">
    横に移動する内容
</div> -->

<main>
    <?= includeMainVisual() ?><?php //メインビジュアル ?>

    <div class="section-wrapper">
        <?= includeAbilistySection() ?><?php // 「できること」セクション ?>
        <?= includeResultSection() ?><?php // 「実績」セクション ?>
        <?= includeSelfIntroductionSection() ?><?php // 「自己紹介」セクション ?>
        <?= includeContactSection() ?><?php // 「お問い合わせ」セクション ?>

        <!-- わかめ？？？？？？？？？？ -->
        <div class="wakame-group">
            <?php for ($wakame_i=0; $wakame_i<2; $wakame_i++): ?>
                <div class="wakame-wrapper">
                    <img src="<?= get_template_directory_uri() . "/images/wakame.png" ?>" alt="背景のわかめ" />
                </div>
            <?php endfor; ?>
        </div>
    </div>
</main>

<?= get_footer() ?>
