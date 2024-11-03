"use strict";
document.addEventListener('DOMContentLoaded', DOMContentLoaded);
function DOMContentLoaded() {
    const spinner = document.querySelector('.loading_wrapper');
    const header = document.querySelector('header');
    const main = document.querySelector('main');
    const footer = document.querySelector('footer');
    setTimeout(() => {
        spinner?.classList.add('loaded');
        header?.classList.remove('before_load');
        main?.classList.remove('before_load');
        footer?.classList.remove('before_load');
    }, 2000);
}
