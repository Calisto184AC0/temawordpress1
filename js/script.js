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