<?= wp_footer() ?>

<?php if (is_front_page()) : ?>
<footer class="footer before_load">
<?php else : ?>
<footer class="footer">
<?php endif; ?>
    <!-- <div class="footer__left_pictures"></div> -->
    <div class="footer__content">
        <p>© 2024 baba</p>
    </div>
    <!-- <div class="footer__right_pictures"></div> -->
</footer>

<script>
    // 固定ページ・投稿ページか判定(トップページと他のページで色変えたいなと)
    const page = '<?= is_page() ?>'
    const archive = '<?= is_archive() ?>'
    if (page || archive) {
        document.querySelector('.footer').classList.add('static_page')
    }
</script>
