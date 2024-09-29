window.addEventListener('scroll', function() {
    const scrollValue = window.scrollY;

    // GSAPを使って横に移動させる
    gsap.to(".horizontal-content", {
      x: scrollValue,
      ease: "power1.out",
      duration: 0.3 // スムーズなアニメーション
    });
  });
