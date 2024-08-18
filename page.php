<?php

get_header();

// ヘッダー読み込み
include_once __DIR__ . '/parts/header.php';

// 固定ページを読み込む
if (is_page('contact')) {
    include_once __DIR__ . '/parts/contact.php';
} elseif (is_page('result')) {
    include_once __DIR__ . '/parts/result.php';
} else {
    // no work
}

get_footer();
