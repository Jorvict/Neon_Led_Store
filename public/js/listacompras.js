
$("#agregar_carrito").click(function() {
    Comprar();
});

$(document).on('change', '#tamano', function() {
    var valor = $("#tamano").val();
    switch (valor) {

        case "standar":
                $("#precio").hide();
                $("#precioBD").show();
                $("#agregar_carrito").removeAttr("disabled","Desactive");
                //$("#tamano").removeClass("rojo");
            break;
    
        default:  
                Swal.fire({
                    icon: "warning",
                    title: "Si desea un tamaño personalizado, dirigirse a la pagina personalizar",
                    showCancelButton: true,
                    confirmButtonColor:"#3085d6",
                    cancelButtonColor:"#d33",
                    confirmButtonText:"Ir a Personalizar",
                    cancelButtonText:"Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace('../../vistas/personaliza.php');
                    } 
                });
                  
                $("#agregar_carrito").attr("disabled","Active");
                $("#precio").show();
                $("#precioBD").hide();
                //$("#tamano").removeClass("rojo");
            break;
    }

});


function Comprar() {

    const datos = {
        //producto: $('#producto').val(),
        producto: $('#producto').text(),
        precio:   $('#precio1').val(),
        //precio:   $('#precio').text(),
        tamano:   $('#tamano').val(),
        cantidad: $('#cantidad').val(),
        cliente:  $('#cliente').val(),
        imagen:   $('#imagen').attr("src"),
        
    };
    console.log(datos);
$.post("../../controladores/ajaxListaCompras.php?op=insertarcompras", datos, function(respuesta) {
        console.log(respuesta);
            //const data = JSON.parse(respuesta);
            //console.log(data[0]["cliente"]);
            if (respuesta == "guardado") {
                Alertas("Producto agregado al carrito", "", "success");
            }else{
                Alertas("Producto ya ingresado al carrito.", "", "error");
            }
        
    });
   
}

//Alertas
function Alertas(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta);
}

$(document).ready(function() {
    $("#precio").hide();
});