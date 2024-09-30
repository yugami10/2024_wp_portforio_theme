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
