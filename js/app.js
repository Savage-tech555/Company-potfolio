const btn = document.querySelector('i');
const menu = document.querySelector('.menu');

function bar()
{
   menu.classList.toggle('menu-toggle')
}

btn.addEventListener('click', bar);