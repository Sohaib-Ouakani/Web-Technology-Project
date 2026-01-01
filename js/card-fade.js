document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.to(".card-animate", {
        scrollTrigger: {
        trigger: ".card-animate",
        start: "top 85%",
        toggleActions: "play none none reverse"
        },
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.2, 
        ease: "power3.out"
    });
    
    gsap.to(".card-animate img", {
        scrollTrigger: {
        trigger: ".card-animate",
        start: "top 80%",
        toggleActions: "play none none reverse"
        },
        scale: 1,
        opacity: 1,
        duration: 1,
        stagger: 0.2,
        ease: "back.out(1.2)"
    });

    gsap.to(".admin-card", {
        scrollTrigger: {
        trigger: ".admin-card",
        start: "top 85%",
        toggleActions: "play none none reverse"
        },
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: "power3.out"
    });
    
    gsap.to(".admin-card p", {
        scrollTrigger: {
        trigger: ".admin-card",
        start: "top 80%",
        toggleActions: "play none none reverse"
        },
        scale: 1,
        opacity: 1,
        duration: 0.6,
        stagger: 0.2,
        ease: "back.out(1.5)"
    });
});