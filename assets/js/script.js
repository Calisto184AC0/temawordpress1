// Esconder y mostrar el header
let header = document.getElementsByClassName('xlc-header')[0]
if (header != null) {
    let new_scroll_position = 0
    let last_scroll_position

    window.addEventListener("scroll", () => {
        last_scroll_position = window.scrollY
    
        if (
            new_scroll_position < last_scroll_position &&
            last_scroll_position > 80 && 
            new_scroll_position != 0
        ) {
            header.classList.remove("slideDown")
            header.classList.add("slideUp")
        } else if (new_scroll_position > last_scroll_position) {
            header.classList.remove("slideUp")
            header.classList.add("slideDown")
        }
    
        new_scroll_position = last_scroll_position
    })
}

// Header en movil
// TODO: Hacer que cuando se redimensione vuelva a tener el aspecto original, es decir, cuando se hace pqueño y se vuelve a hacer grande ya no aparecen los elementos

let responsive = () => {

    if (window.innerWidth > 576 || header.className.includes('xlc-header-responsive')) { return }

    // añadir una clase al header
    header.classList.add('xlc-header-responsive')

    // crear nuevo elemento para contener a las listas
    let container = header.getElementsByClassName('xlc-menu-responsive')[0]

    // mover todos los elementos necesarios excepto el logo y el boton
    let gridElement = header.getElementsByClassName('xlc-grid')[0]
    while (gridElement.childNodes.length > 4) {
        container.appendChild(gridElement.childNodes[2])
    }
}

window.onload = () => {
    responsive()
}

window.onresize = () => {
    responsive()
}

// Abrir menu

let OpenMenu = (e) => {
    e.parentNode.parentNode.getElementsByClassName('xlc-menu-responsive')[0].classList.add('xlc-open-transition')
    document.body.style.overflow = 'hidden'
} 

let CloseMenu = (e) => {
    e.parentNode.classList.remove('xlc-open-transition')
    document.body.style.overflow = 'auto'
}