<?php

add_theme_support('post-thumbnails');

/*
 * contact-form-7プラグインのpタグ自動追加判定関数を常にfalseにする対応
 * wp-config.phpでも可能だがプラグインのバージョンアップの影響を受けやすそうなため一旦こちらで。。
 * (結局バージョンアップの影響を受けないファイるっぽいから意味なかったけど...)
 * https://github.com/rocklobster-in/contact-form-7/compare/v5.8.5%E2%80%A6v5.8.6
 */
remove_filter('wpcf7_autop_or_not', 'wpcf7_autop_or_not');
add_filter( 'wpcf7_autop_or_not', fn () => false);

function my_enqueue_styles(): void
{
	wp_enqueue_style('destyle', get_stylesheet_directory_uri() . '/destyle.css');
	wp_enqueue_style('style', get_stylesheet_uri(), ['destyle'], false, 'all');

	// gsap library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/dist/gsap.js', array('gsap-js'), false, true );

	if (is_front_page()) {
		wp_enqueue_script_module('loading', get_template_directory_uri().'/dist/loading.js', [], []);
	}
	wp_enqueue_script_module('main', get_template_directory_uri().'/dist/main.js', [], []);
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
 * ローディングページを読み込む
 *
 * @return void
 */
/**
 * ローディングページを読み込む
 *
 * @param boolean $is_display
 * @return void
 */
function includeLoading(bool $is_display = true)
{
	if ($is_display) {
		include __DIR__ . '/page/front_page/loading.php';
	}
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
