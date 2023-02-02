import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)
const cards = gsap.utils.toArray('.product-card')


gsap.to(".product-card", {
    scrollTrigger: {
        trigger: ".category-list-component",
        markers: false,
        scrub: 1,
        start: "top 150",
        ease: "power1.out",
        end: () => "+=" + document.querySelector('.category-list-component').offsetWidth,
        pin: true,
        toggleActions: "play pause reverse pause",
        snap: 1 / (cards.length - 1)
    },
    xPercent: -100 * (cards.length - 3 )
});

