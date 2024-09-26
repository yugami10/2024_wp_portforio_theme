"use strict";
window.onload = function () {
    const spinner = document.querySelector('.loading_wrapper');
    setTimeout(() => {
        spinner === null || spinner === void 0 ? void 0 : spinner.classList.add('loaded');
    }, 2000);
};
