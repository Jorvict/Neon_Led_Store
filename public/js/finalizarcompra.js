
let formulario=document.getElementById("formulario")

let detalles=document.getElementById("detalles")



formulario.addEventListener("change",(e)=>{
console.log(e.target)
let y_content=document.getElementById("yape__content")
let t_content=document.getElementById("transferencia__content")
if(e.target.id==="yape"){

  t_content.classList.remove("display")
  y_content.classList.toggle("flex")

}


else if(e.target.id==="transferencia"){
  y_content.classList.remove("flex")

t_content.classList.toggle("display")


}



})












detalles.addEventListener("click",(e)=>{
  let resumen__total= document.getElementById("resumen__total")

console.log(resumen__total.classList)

  if(resumen__total.classList[3]==="display"){

    resumen__total.classList.remove("display")



  }


else{resumen__total.classList.add("display")}








})



addEventListener("scroll",()=>{

let animacion=document.getElementById("footer")
let distancia=animacion.getBoundingClientRect().top
let altura=window.innerHeight/1

if(distancia<=altura){


  let resumen__total= document.getElementById("resumen__total")

  console.log(resumen__total.classList)

    if(resumen__total.classList[3]==="display"){

      resumen__total.classList.remove("display")



    }















}

})
