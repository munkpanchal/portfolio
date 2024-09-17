import gsap from "gsap";
import { ScrollTrigger } from "gsap/all";
import { default as SplitType } from "split-type";

const myText = new SplitType("#hero-heading");
console.log(myText);
gsap.registerPlugin(ScrollTrigger);

function preloader() {
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);
        const tl = gsap.timeline();

        const height = window.innerHeight;
        tl.delay(2);

        const dur = 0.6;

        tl.to(".letters:first-child", {
            x: () => -innerWidth * 3,
            scale: 10,
            duration: dur,
            ease: "power2.inOut",
        });
        tl.to(".letters:last-child", {
            x: () => innerWidth * 3,
            duration: dur,
            scale: 10,
            delay: -dur,
            ease: "power2.inOut",
        });

        tl.to(".preloader", {
            opacity: "0",
            duration: 0.4,
        });
        tl.to(".char", {
            y: 0,
            stagger: 0.02,
            duration: 0.3,
            delay: 0.1,
        });

        tl.to(".preloader", {
            display: "none",
        });
        tl.to(".hero-para", {
            scale: 1,
            opacity: 1,
            duration: dur,
            ease: "power2.inOut",
            delay: -dur,
        });

        tl.fromTo(
            ".logo",
            {
                y: -100,
            },
            {
                y: 0,
            }
        );
        tl.from(".hamburger", {
            y: -100,
            stagger: 0.02,
            duration: dur,
            delay: 0.1,
        });
        tl.from(".menu-item", {
            y: -100,
            stagger: 0.02,
            duration: 0.3,
            delay: 0.2,
            reversed: true,
        });

        tl.to(".hero-button", {
            scale: 1,
            opacity: 1,
            duration: dur,
            ease: "power2.inOut",
        });
        // tl.to(".website-logo", {
        //     clipPath: "polygon(0 0, 100% 0, 100% 50%, 100% 100%, 0 100%, 0% 50%)",
        //     duration: 1,
        //     ease: "power2.inOut",
        // });

        tl.play();
    });
}

preloader();
