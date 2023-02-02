import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)
const cards = gsap.utils.toArray('.product-card')


gsap.to(".product-card", {
    scrollTrigger: {
        trigger: ".category-list-component",
        markers: false,
        scrub: true,
        start: "top 150",
        end: "bottom center",
        pin: true,
        toggleActions: "play pause reverse pause"
    },
    xPercent: -100 * (cards.length - 3 )
});

