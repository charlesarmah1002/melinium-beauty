const menuBtn = document.querySelector('.menu-toggle i')
const menu = document.querySelector('.menu')

menuBtn.addEventListener('click', ()=> {
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
})

function menuShut() {
    menuBtn.classList.remove('active');
    menu.classList.remove('active');
}

document.addEventListener('scroll', ()=> {
    menuBtn.classList.remove('active');
    menu.classList.remove('active');
})