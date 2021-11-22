var btn = document.querySelector('#btn')

function togglesidebar(){
   document.getElementById('menu').classList.toggle('active')
}

btn.addEventListener('click', togglesidebar)
