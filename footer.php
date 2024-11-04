<?= wp_footer() ?>

<?php
    $is_loading = $args['is_loading'] ?? false;
?>

<footer class="footer before_load">
    <div class="footer__content">
        <p>© 2024 baba</p>
    </div>
</footer>

<script>
    <?php // 固定ページ・投稿ページか判定(トップページと他のページで色変えたいなと) ?>
    const page = '<?= is_page() ?>'
    const archive = '<?= is_archive() ?>'
    if (page || archive) {
        document.querySelector('.footer').classList.add('static_page')
    }
</script>
