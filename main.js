const botao = document.querySelector('#botao')

botao.addEventListener('click', () => {
    window.scroll({top: window.innerHeight, behavior: "smooth"})
    
})

const botao2 = document.querySelector('#botao2')

botao2.addEventListener('click', () => {
    window.scroll({top: 3000, behavior: "smooth"})
    
})
const botao3 = document.querySelector('#botao3')

botao3.addEventListener('click', () => {
    window.scroll({ top: 3000 , behavior: "smooth"})
    
})
function menuToggle()  {
 let menu = document.getElementById("nav")
 if (menu.classList.contains('menu-opened') == true) {
     menu.classList.remove('menu-opened')
 } else {
    menu.classList.add('menu-opened' )
 }
}