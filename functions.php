<?php


function my_enqueue_styles()
{
	wp_enqueue_style('destyle', get_stylesheet_directory_uri() . '/destyle.css');
	wp_enqueue_style('style', get_stylesheet_uri(), ['destyle'], false, 'all');
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/** 以下、wpとは関係ない関数 */

/**
 * メインビジュアルを読み込む
 *
 * @return void
 */
function includeMainVisual()
{
	include __DIR__ . '/page/front_page/main_visual.php';
}

/**
 * できることを読み込む
 *
 * @return void
 */
function includeAbilistySection()
{
	include __DIR__ . '/page/front_page/ability.php';
}

/**
 * 実績を読み込む
 *
 * @return void
 */
function includeResultSection()
{
	include __DIR__ . '/page/front_page/result.php';
}

/**
 * 自己紹介を読み込む
 *
 * @return void
 */
function includeSelfIntroductionSection()
{
	include __DIR__ . '/page/front_page/self_introduction.php';
}

/**
 * ご依頼についてを読み込む
 *
 * @return void
 */
function includeContactSection()
{
	include __DIR__ . '/page/front_page/contact.php';
}

/**
 * ボタンのtemplareを読み込む
 *
 * @param string $url
 * @param string $text
 * @return void
 */
function includeButton(string $url, string $text)
{
	include __DIR__ . '/parts/common/button.php';
}
