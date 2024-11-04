"use strict";
// import gsap from 'gsap'
/** 使ってないよ^^ */
window.addEventListener('scroll', function () {
    const scrollValue = window.scrollY;
    // 波打ち効果を作るために sin 関数を使う
    const waveAmplitude = 60; // 波の振幅（高さ）
    const waveFrequency = 0.9; // 波の周波数
    // スクロールに応じて上下に波打つ動き
    const waveMovement = Math.sin(scrollValue * 3 * waveFrequency) * waveAmplitude;
});
gsap.to(".kurage-wrapper", {
    scrollTrigger: {
        trigger: ".kurage-wrapper",
        start: "top center",
        end: "top 20px",
        scrub: 4,
        // markers: true,
    },
    x: "100vw",
    ease: "power1.out",
});
const kurager_right = gsap.timeline({
    scrollTrigger: {
        trigger: ".kurage-wrapper-right",
        start: "top center",
        end: "top 20px",
        scrub: 4,
        // markers: true,
    },
});
kurager_right.fromTo(".kurage-wrapper-right", {
    x: 0,
}, {
    x: "-100vw"
});
const sakana_wrapper = document.querySelector('.sakana-wrapper');
const sakana = document.querySelector('.sakana-wrapper img');
const TL = gsap.timeline({ repeat: -1 });
TL.add(() => {
    sakana?.classList.add('reverse-x');
})
    .to(sakana_wrapper, { left: "calc(100vw - 200px)", duration: 1.5 })
    .add(() => {
    sakana?.classList.add('-rotate90');
})
    .to(sakana_wrapper, { top: "calc(100% - 400px)", duration: 1.5 })
    .add(() => {
    sakana?.classList.remove('-rotate90');
    sakana?.classList.remove('reverse-x');
})
    .to(sakana_wrapper, { left: "0vw", duration: 1.5 })
    .add(() => {
    sakana?.classList.add('rotate90');
})
    .to(sakana_wrapper, { top: "0vh", duration: 1.5 })
    .add(() => {
    sakana?.classList.remove('rotate90');
});
