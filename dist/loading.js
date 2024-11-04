"use strict";
document.addEventListener('DOMContentLoaded', DOMContentLoaded);
/**
 * 初期処理
 */
function DOMContentLoaded() {
    loading_proces();
}
/**
 * ローディングに関する全体の処理
 */
function loading_proces() {
    if (is_loading()) {
        loading_no_action();
    }
    else {
        loading_action();
    }
}
/**
 * ローディング画面を表示するか判定
 * @returns
 */
function is_loading() {
    const uri = new URL(window.location.href);
    return document.referrer.includes(uri.hostname);
}
/**
 * ローディングしないときの処理
 */
function loading_no_action() {
    const header = document.querySelector('header');
    const main = document.querySelector('main');
    const footer = document.querySelector('footer');
    header?.classList.remove('before_load');
    main?.classList.remove('before_load');
    footer?.classList.remove('before_load');
}
/**
 * ローディング処理
 */
function loading_action() {
    const spinner = document.querySelector('.loading_wrapper');
    const header = document.querySelector('header');
    const main = document.querySelector('main');
    const footer = document.querySelector('footer');
    spinner?.classList.remove('d-none');
    setTimeout(() => {
        spinner?.classList.add('loaded');
        header?.classList.remove('before_load');
        main?.classList.remove('before_load');
        footer?.classList.remove('before_load');
        setTimeout(() => {
            spinner?.classList.add('d-none');
        }, 1000);
    }, 2000);
}
