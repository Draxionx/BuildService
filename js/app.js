

const header = document.querySelector("header");

/* Sticky NavBar */

function stickyNavbar() {
    header.classList.toggle("scrolled", window.scrollY > 0);
    console.log(window.scrollY > 0);
}

stickyNavbar();

window.addEventListener("scroll", stickyNavbar);