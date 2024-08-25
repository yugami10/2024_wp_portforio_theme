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
    <?= wp_head() ?>
</html>

<header class="header">
    <div class="header__img_wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="logo" />
    </div>
    <nav class="header__nav">
        <ul>
            <li>
                <a href="<?= home_url('result') ?>">実績</a>
            </li>
            <li>
                <a href="<?= home_url('contact') ?>"">お問い合わせ</a>
            </li>
        </ul>
    </nav>
</header>
