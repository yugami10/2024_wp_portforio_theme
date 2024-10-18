console.log(132111)

// import { test } from "./loading.js"
let is_open_hamburger = false

/**
 * ハンバーガーメニュー^🍔^
 * @param e
 * @returns
 */
function clickHamburgerMenu (e: MouseEvent): void {
    is_open_hamburger = !is_open_hamburger
    switchOpenHamburgerMenu()
}

/**
 * ハンバーガーメニューの表示切替
 */
function switchOpenHamburgerMenu(): void
{
    const hamburger_menu = document.querySelector('.hamburger_menu') as Element
    const hamburger_modal = document.querySelector('.hamburger_modal') as Element
    const hamburger_content = document.querySelector('.hamburger_content') as Element

    if (is_open_hamburger) {
        hamburger_menu.classList.add('click')
        hamburger_modal.classList.remove('hidden')
        hamburger_content.classList.remove('hidden')
    } else {
        hamburger_menu.classList.remove('click')
        hamburger_modal.classList.add('hidden')
        hamburger_content.classList.add('hidden')
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
