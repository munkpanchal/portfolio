import gsap from "gsap";

import Lenis from "lenis";
import { ScrollTrigger } from "gsap/all";

const lenis = new Lenis({
    lerp: 0.05, // Adjust lerp value as needed
    direction: "y", // Set direction to 'y' for vertical scrolling
    smoothWheel: true, //
});

let lastScrollTime = 0,
    throttleDelay = 0;
lenis.on("scroll", (e) => {
    // console.log(e);
    const now = Date.now();
    if (now - lastScrollTime >= throttleDelay) {
        ScrollTrigger.update();
        lastScrollTime = now;
    }
});

lenis.on("scroll", ScrollTrigger.update);

gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);
