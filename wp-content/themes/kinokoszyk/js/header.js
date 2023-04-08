const header = document.querySelector('header');
const headerBtn = header.querySelector('button');
const headerNav = header.querySelector('nav');

let headerAktive = true

headerBtn.addEventListener('click', () => {
    if (headerAktive) {
        headerNav.style.left = "0%";
        headerBtn.textContent = "Close";
        headerAktive = false;
    } else {
        headerNav.style.left = "100%";
        headerBtn.textContent = "Menu";
        headerAktive = true;
    }
})