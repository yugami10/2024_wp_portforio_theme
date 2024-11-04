<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= bloginfo('name') ?></title>
    <meta name="description" content="<?= bloginfo('description') ?>" />

    <!-- noto sans font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <!-- CDN読込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <?= wp_head() ?>
</html>

<?php
    $is_loading = $args['is_loading'] ?? false;
?>

<?php if (is_front_page() && $is_loading) : ?>
<header class="before_load">
<?php else : ?>
<header>
<?php endif; ?>
    <div class="header">
        <div class="header__img_wrapper">
            <a href="<?= home_url() ?>">
                <img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="logo" />
            </a>
        </div>
        <div class="hamburger_menu">
            <div class="hamburger_menu__line"></div>
            <div class="hamburger_menu__line"></div>
            <div class="hamburger_menu__line"></div>
        </div>
        <div class="hamburger_modal hidden"></div>
        <nav class="header__nav">
            <ul>
                <li>
                    <?php if (is_archive('results')) : ?>
                        <span>実績</span>
                    <?php else : ?>
                        <a href="<?= home_url('results') ?>">実績</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if (is_page('contact')) : ?>
                        <span>お問い合わせ</span>
                    <?php else : ?>
                        <a href="<?= home_url('contact') ?>">お問い合わせ</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
    <div class="hamburger_content hidden">
        <nav class="hamburger_nav">
            <ul>
                <li>
                    <?php if (is_archive('results')) : ?>
                        <span>実績</span>
                    <?php else : ?>
                        <a href="<?= home_url('results') ?>">実績</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if (is_page('contact')) : ?>
                        <span>お問い合わせ</span>
                    <?php else : ?>
                        <a href="<?= home_url('contact') ?>">お問い合わせ</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>
