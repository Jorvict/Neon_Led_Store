let registrate = document.getElementById("registrate1")
let registrate2 = document.getElementById("registrate2")
let identificate = document.getElementById("identificate1")
let identificate2 = document.getElementById("identificate2")
let form2 = document.getElementById("form2")
let form = document.getElementById("form1")

identificate.addEventListener("click", (e) => {
   e.preventDefault()
    
    form.classList.add("ocultar")
    form2.classList.add("aparecer")
})

registrate2.addEventListener("click",(e)=>{
e.preventDefault()
form2.classList.remove("aparecer")
form.classList.remove("ocultar")

})

