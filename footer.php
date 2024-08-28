<footer class="footer">
    <!-- <div class="footer__left_pictures"></div> -->
    <div class="footer__content">
        <p>copyright</p>
    </div>
    <!-- <div class="footer__right_pictures"></div> -->
</footer>

<script>
    // 固定ページか判定(トップページと固定ページで色変えたいなと)
    const page = '<?= is_page() ?>'
    if (page) {
        document.querySelector('.footer').classList.add('static_page')
    }
</script>
