//Alertas
function Alertas(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta);
}

function Personalizar() {
    /*Alertas("ADVERTENCIA", "Primero registrar o loguear para pedir a personalizar un diseño.", "warning");*/
    Swal.fire({
        title: 'ADVERTENCIA',
        text: 'Registrar o ingresar, antes de personalizar un diseño.',
        showCancelButton: true,
        confirmButtonText: `Ir a Personalizar`,
      }).then((result) => {
        if (result.isConfirmed) {
            window.location = '../vistas/login.php';
        } 
      });
}

/*
$("#personalizar").click(function(){
    Personalizar();
});*/

