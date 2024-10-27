<!-- <section class="result section-self-style">
    <h2 class="section-title">実績</h2>
    <ul class="result__list">
        <?php
            $result_labels = [
                1 => '家具サイト',
                2 => 'カフェ',
                3 => '旅行ブログ',
            ];
        ?>
        <?php for ($i=1; $i<=3; $i++) : ?>
            <li class="result__item">
                <span><?= $result_labels[$i] ?></span>
                <figure class="result__item_img_wrapper">
                    <img src="<?= get_template_directory_uri() . "/images/jisseki_{$i}.jpg" ?>" alt="実績のポートフォリオサイト<?= $i ?>" />
                </figure>
            </li>
        <?php endfor; ?>
    </ul>
    <?= includeButton(home_url('results'), 'もっと見る') ?>
</section> -->
<section class="preview_result section-self-style">
    <h2 class="section-title">実績</h2>
    <ul class="preview_result__list">
        <?php
            $preview_result_labels = [
                1 => '家具サイト',
                2 => 'カフェ',
                3 => '旅行ブログ',
            ];
        ?>
        <?php for ($i=1; $i<=3; $i++) : ?>
            <li class="preview_result__item">
                <span><?= $preview_result_labels[$i] ?></span>
                <figure class="preview_result__item_img_wrapper">
                    <img src="<?= get_template_directory_uri() . "/images/jisseki_{$i}.jpg" ?>" alt="実績のポートフォリオサイト<?= $i ?>" />
                </figure>
            </li>
        <?php endfor; ?>
    </ul>
    <?= includeButton(home_url('results'), 'もっと見る') ?>
</section>
