// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin);
    // gsap code here!
});

gsap.to('.box', {
    scrollTrigger: '.box', // start the animation when ".box" enters the viewport (once)
    x: -100,
    duration: 1.0
});