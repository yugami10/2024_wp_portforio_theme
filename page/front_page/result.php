<?php
    $wp_query = new WP_Query();
    $my_posts = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'results',// 投稿タイプを設定
        'posts_per_page' => '3',// 表示する記事数を設定
    );
    $wp_query->query($my_posts);
?>

<section class="preview_result section-self-style">
    <h2 class="section-title">実績</h2>
    <ul class="preview_result__list">
        <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <li class="preview_result__item">
                <span><?= the_field('summary') ?></span>
                <a href="<?= the_field('url') ?>">
                    <figure class="preview_result__item_img_wrapper">
                        <img src="<?= the_field('site_top_img') ?>" alt="" />
                    </figure>
                </a>
            </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
    <?= includeButton(home_url('results'), 'もっと見る') ?>
</section>
