

//----------------------------------------
let btn_plus = document.getElementsByClassName("plus")
let btn_close = document.getElementsByClassName("close")
let detalles = document.getElementsByClassName("detalles")
let btn_admin = document.getElementById("admin")
let btn_close_admin = document.getElementById("closeForm")
let content_admin = document.getElementById("content-admin")
console.log(btn_close.length)
let stateDetalles = false;
for (let i = 0; i < btn_plus.length; i++) {
    btn_plus[i].addEventListener("click", () => {
        // alert(`tocaste el boton ${i}`)
        console.log(detalles[i]);
        detalles[i].classList.add("show")
        // if (stateDetalles) {
        //     detalles[i].classList.remove("show")
        // } else {
        //     detalles[i].classList.add("show")
        // }

    })
    btn_close[i].addEventListener("click", () => {
        console.log(detalles[i]);
        detalles[i].classList.remove("show")
    })
}

btn_admin.addEventListener("click", () => {
    content_admin.classList.add("show")
})
btn_close_admin.addEventListener("click",()=>{
    content_admin.classList.remove("show")
})
//btn

let btn_responsive = document.getElementById("hamb");
let btn_close_menu = document.getElementById("closeMenu")
let back = document.getElementById("background")
let space = document.getElementsByClassName("espacio")
let sidebar = document.getElementById("sidebar");
let items = document.getElementsByClassName("menu-item")
let state_sidebar = false;

if (screen.width <= 768) {
    sidebar.classList.add("hide")
    // back.classList.add("show-background")
    space[0].classList.add("hide-space")
    space[1].classList.add("hide-space")
    space[2].classList.add("hide-space")
    // space[0].classList.add("hide-space")

    for (let i = 0; i < items.length; i++) {
        items[i].addEventListener("click", () => {
            sidebar.classList.add("hide")
            back.classList.remove("show-background")
            space[0].classList.add("hide-space")
            space[1].classList.add("hide-space")
            space[2].classList.add("hide-space")
        })
    }
}

btn_close_menu.addEventListener("click", () => {
    sidebar.classList.add("hide")
    back.classList.remove("show-background")
    space[0].classList.add("hide-space")
    space[1].classList.add("hide-space")
    space[2].classList.add("hide-space")
})
btn_responsive.addEventListener("click", () => {
    sidebar.classList.remove("hide")
    back.classList.add("show-background")
    space[0].classList.remove("hide-space")
    space[1].classList.remove("hide-space")
    space[2].classList.remove("hide-space")
})




