const menu = document.querySelector('nav');

function activeScroll(){
    menu.classList.toggle('ativo', scrollY > 50);
}

window.addEventListener('scroll', activeScroll);