<?= get_header() ?>

<!-- ここにローディング？？？ -->
<div class="loading_wrapper">
    <div class="loading_img">

    <!-- 練習用 -->
    <!-- <div class="loading_circle"></div> -->

        <!-- 本番用 -->
        <img src="<?= get_template_directory_uri() . '/images/spinningparrot.gif' ?>" />
    </div>
</div>

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
