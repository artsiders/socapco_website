document.addEventListener("DOMContentLoaded", () => {
    anime.timeline({
        easing: 'easeOutExpo',
    })
    .add({
        targets: ".btn.section-btn.smoothScroll",
        width: ['0px', '1000px'], 
    })
})