<section class="result section-self-style">
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
            <li>
                <?= $result_labels[$i] ?>
                <div style="height: 500px;">
                    <img src="<?= get_template_directory_uri() . "/images/jisseki_{$i}.png" ?>" alt="実績のポートフォリオサイト<?= $i ?>" />
                </div>
            </li>
        <?php endfor; ?>
    </ul>
    <?= includeButton(home_url('results'), 'もっと見る') ?>
</section>
