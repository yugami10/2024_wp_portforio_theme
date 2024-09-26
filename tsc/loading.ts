window.onload = function() {
    const spinner = document.querySelector('.loading_wrapper')

    setTimeout(() => {
        spinner?.classList.add('loaded')
    }, 2000);
}
