<?= get_header() ?>

<?php
    $wp_query = new WP_Query();
    $my_posts = array(
        'post_type' => 'results',// 投稿タイプを設定
        'posts_per_page' => '10',// 表示する記事数を設定
    );
    $wp_query->query($my_posts);

    // カスタムフィールドのタイトル一覧を取得
    $titles = array_column(acf_get_field_groups(), 'title', 'key');
?>

<main class="main_archive">
    <div class="section-wrapper archive-page-color">
        <section class="result section-self-style-left">
            <h2 class="section-title text-align-center"><?= $titles['group_66dd39d36e75e'] ?></h2>
            <ul class="result__list">
            <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <!-- ループさせるコンテンツをここにいれる -->
                <li class="result__item">
                    <figure class="result__item_img_wrapper">
                        <a href="<?= the_field('url') ?>" target="_blank">
                            <img src="<?= the_field('site_top_img') ?>" alt="" />
                        </a>
                    </figure>
                    <dl class="result__item_explains">
                        <dt>担当作業</dt>
                        <dd><?= the_field('work_in_charge') ?></dd>
                        <dt>制作方法</dt>
                        <dd><?= the_field('production_method') ?></dd>
                    </dl>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>

            </ul>
        </section>
    </div>
</main>

<?= get_footer() ?>
