const alienIsolation = new Audio("../static/audio/alien-isolation.mp3");
const pennywiseTheme = new Audio("../static/audio/pennywise.mp3");
const nunTheme = new Audio("../static/audio/nun.mp3");
const hellraiser = new Audio("../static/audio/hellraiser.mp3");
const alien = document.querySelector(".alien");
const pennywise = document.querySelector(".pennywise");
const valak = document.querySelector(".valak");
const cube = document.querySelector(".cube");

alien.addEventListener("click", () => {//
    if (alienIsolation.paused) {
        alienIsolation.play();
        pennywiseTheme.pause();
        nunTheme.pause();
        hellraiser.pause();
    } else {
        alienIsolation.pause();
    }
});

pennywise.addEventListener("click", () => {
    if (pennywiseTheme.paused) {
        pennywiseTheme.play();
        alienIsolation.pause();
        nunTheme.pause();
        hellraiser.pause();
    } else {
        pennywiseTheme.pause();
    }
})

valak.addEventListener("click", () => {
    if (nunTheme.paused) {
        nunTheme.play();
        alienIsolation.pause();
        pennywiseTheme.pause();
        hellraiser.pause();
    } else {
        nunTheme.pause();
    }
})

cube.addEventListener("click", () => {
    if (hellraiser.paused) {
        hellraiser.play();
        alienIsolation.pause();
        pennywiseTheme.pause();
        nunTheme.pause()
    } else {
        hellraiser.pause();
    }
})