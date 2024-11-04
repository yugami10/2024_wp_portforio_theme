<?= wp_footer() ?>

<?php if (is_page() || is_archive()) : ?>
<footer class="footer static_page">
<?php else : ?>
<footer class="footer before_load">
<?php endif; ?>
    <div class="footer__content">
        <p>© 2024 baba</p>
    </div>
</footer>
