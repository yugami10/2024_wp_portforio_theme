<?= get_header() ?>

<?= includeLoading(true) ?><?php //ここにローディング？？？ ?>

<main class="before_load">
    <?= includeMainVisual() ?><?php //メインビジュアル ?>

    <div class="section-wrapper front-page-color">
        <?php // クラゲぷかぷか ?>
        <div class="kurage-wrapper">
            <img class="pointer-non" src="<?= get_template_directory_uri() . "/images/kurage.png" ?>" alt="ぷかぷかするクラゲ" />
        </div>

        <?= includeAbilistySection() ?><?php // 「できること」セクション ?>
        <?= includeResultSection() ?><?php // 「実績」セクション ?>

        <?php // クラゲぷかぷか ?>
        <div class="kurage-wrapper-right">
            <img class="pointer-non" src="<?= get_template_directory_uri() . "/images/kurage.png" ?>" alt="ぷかぷかするクラゲ" />
        </div>

        <?= includeSelfIntroductionSection() ?><?php // 「自己紹介」セクション ?>
        <?= includeContactSection() ?><?php // 「お問い合わせ」セクション ?>

        <?php // およぐおさかなくん ?>
        <div class="sakana-wrapper">
            <img class="pointer-non" src="<?= get_template_directory_uri() . "/images/sakana.png" ?>" alt="泳ぐ魚" />
        </div>

        <?php // わかめ？？？？？？？？？？ ?>
        <div class="wakame-group">
            <?php for ($wakame_i = 0; $wakame_i < 2; $wakame_i++) : ?>
                <div class="wakame-wrapper">
                    <img class="pointer-non" src="<?= get_template_directory_uri() . "/images/wakame.png" ?>" alt="背景のわかめ" />
                </div>
            <?php endfor; ?>
        </div>
    </div>
</main>

<?= get_footer() ?>
