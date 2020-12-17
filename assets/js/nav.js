// navの固定に関するJSを記述
const body = document.querySelector('body');
const nav = document.querySelector('nav');
const navHight = nav.clientHeight + 'px';
const navPos = nav.offsetTop;

function scrollNav() {
    let value = this.scrollY;
    if(value > navPos) {
        nav.classList.add('is-fixed');
        body.style.marginTop = navHight;
    } else {
        nav.classList.remove('is-fixed');
        body.style.marginTop = '0px';
    }
}
window.onload = scrollNav;
window.onscroll = scrollNav;