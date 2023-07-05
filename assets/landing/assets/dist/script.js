const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function(){
    const windowPosition = window.scrollY;
    navbar.classList.toggle('scrolling-active', windowPosition)
})