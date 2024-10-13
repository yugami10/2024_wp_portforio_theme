console.log(132111)

// import { test } from "./loading.js"

/**
 * ハンバーガーメニュー^🍔^
 * @param e
 * @returns
 */
function clickHamburgerMenu (e: MouseEvent): void {
    // 🍔要素を取得（ぶっちゃけ、querySelector呼ぶだけで終わる...）
    let hamburger = e.target as Element | null
    if (hamburger?.classList.contains('hamburger_menu__line')) {
        hamburger = document.querySelector('.hamburger_menu')
    }
    if (hamburger == null) {
        return
    }

    // ハンバーガーメニューの🍔ばってん変更🍔
    switchClickHamburgerDesign(hamburger)
}

/**
 * ハンバーガーメニューの🍔ばってん変更🍔
 * @param hamburger
 */
function switchClickHamburgerDesign(hamburger: Element): void {
    if (hamburger.classList.contains('click')) {
        hamburger.classList.remove('click')
    } else {
        hamburger.classList.add('click')
    }
}

/**
 * 最初の一回だけ行いたい処理
 */
document.addEventListener('DOMContentLoaded', () => {
    const hamburger: HTMLElement | null = document.querySelector('.hamburger_menu')
    if (hamburger != null) {
        hamburger.addEventListener('click', clickHamburgerMenu)
    }
})
