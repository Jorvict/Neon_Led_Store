$(document).ready(function() {
    Listar();
    MontoTotal();
    ProductoTotal();
});

function Listar() {
    const id = $("#cliente").val();
    $.post("../../controladores/ajaxListaCompras.php?op=listar", {id:id}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<section class='basket-item'><form class='item-form'><section class='section-left'><figure class='img-container'><img class='img-producto' src='" + data[i]["imagen"] + "' alt='imagen de producto'></figure><div class='product-description'><h5 class='product-title'>" + data[i]["producto"] + "</h5><h4 class='product-name'>Tamaño:</h4><p class='product-id'>" + data[i]["tamano"] + "</p><div class='delete-button-container'><button type='button' class='btn-delete' onclick='Eliminar("+ data[i]["id"] +");'>Eliminar</button></div></div></section><section class='section-right'><div class='product-price'><span>S/" + data[i]["precio"] + "</span><label>(Oferta)</label></div><div class='product-quantity'><div class='container-quantity'><button type='button' class='decrease' onclick='DisminuirProducto("+ data[i]["id"] +","+ data[i]["precio"] +","+ data[i]["cantidad"] +")';>-</button><input type='number' class='quantity-value' value='" + data[i]["cantidad"] + "' min='0'><button type='button' class='increase' onclick='AumentarProducto("+ data[i]["id"] +","+ data[i]["precio"] +","+ data[i]["cantidad"] +")';>+</button></div></div></section></form></section>";
            }
            $(".basket-item-container").html(cadena);
        } 
    });
}

function MontoTotal() {
    const id = $("#cliente").val();
    $.post("../../controladores/ajaxListaCompras.php?op=montototal", {id:id}, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "null") {
    
        }else{
            const data = JSON.parse(respuesta);
            //console.log(data);
            $(".total-container").html("<p class='subtotal'>Sub-total productos</p><span class='total'>S/. "+data+" </span><input type='hidden' id='montototal' value='"+data+"'>");
        }
    });
}

function ProductoTotal() {
    const id = $("#cliente").val();
    $.post("../../controladores/ajaxListaCompras.php?op=productototal", {id:id}, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "null") {
        }else{
            const data = JSON.parse(respuesta);
            //console.log(data);
            $(".header-container").html("<h2 class='title products'>Bolsa de Compras ( "+data+" productos)</h2>");
        }
    });
}

function AumentarProducto(id,precio,cantidad) {
    //console.log(id);
    const datos = {
        id: id,
        precio:precio,
        cantidad:cantidad,
    };
    //console.log(datos);
    $.post("../../controladores/ajaxListaCompras.php?op=aumentarproducto",datos, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "Cambio+") {
            ProductoTotal();
            MontoTotal();
            Listar();
        }else{
            Alertas("Opps...", "Se producido un error", "error");
        }
    });
}

function DisminuirProducto(id,precio,cantidad) {
    const datos = {
        id: id,
        precio:precio,
        cantidad:cantidad,
    };
    //console.log(datos);
    $.post("../../controladores/ajaxListaCompras.php?op=disminuirproducto",datos, function(respuesta){
        console.log(respuesta);
        if (respuesta == "Cambio-") {
            ProductoTotal();
            MontoTotal();
            Listar();
        }else{
            if (respuesta == "cantidad0") {
                Alertas("Error", "La cantidad no puede ser 0, eliminar el producto si desea.", "error");
            }else{
                Alertas("Opps...", "Se producido un error", "error");
            }
            
        }
    });
}


function Eliminar(id){
    //console.log(id);
	Swal.fire({
		icon: "warning",
		title: "¿Desea eliminar este producto?",
		showCancelButton: true,
		confirmButtonColor:"#3085d6",
		cancelButtonColor:"#d33",
  		confirmButtonText:"Eliminar",
  		cancelButtonText:"Cancelar"
	}).then((result) => {
		if (result.isConfirmed) {
			$.post("../../controladores/ajaxListaCompras.php?op=eliminar", {id:id}, function(response){	
                //console.log(response);
                 
                window.location = '../../vistas/listacompras/listacompras.php';   
            });
		} 
	});	
};




//Alertas
function Alertas(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta);
}
