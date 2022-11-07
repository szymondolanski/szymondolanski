const btnOpen = document.querySelector('#open');
const btnClose = document.querySelector('#close');
const mobileMenu = document.querySelector('.main-menu-mobile');

btnOpen.addEventListener('click',()=>{
    mobileMeny.classList.add('show');
    btnClose.classList.add('show');
});
btnClose.addEventListener('click',()=>{
    mobileMeny.classList.remove('show');
    btnClose.classList.remove('show');
});


