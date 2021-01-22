let registrate = document.getElementById("registrate1")
let registrate2 = document.getElementById("registrate2")
let identificate = document.getElementById("identificate1")
let identificate2 = document.getElementById("identificate2")
let form2 = document.getElementById("form2")
let form = document.getElementById("form1")

identificate.addEventListener("click", (e) => {
    e.preventDefault()

    form2.classList.remove("ocultar")
    form.classList.remove("aparecer")
})

registrate2.addEventListener("click", (e) => {
    e.preventDefault()
    form.classList.add("aparecer")
    form2.classList.add("ocultar")

})