function Alertas(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta);
}

function Personalizar() {
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