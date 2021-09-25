jQuery.validator.setDefaults({
    errorElement: 'span',
    errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.col-sm-10').append(error);
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    }
});


$("#form_crear, #form_actualizar").validate({
    rules: {
        nombre: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        descripcion: {
            required: true,
        },
        sexo: {
            required: true,
        },
        "roles[]": {
            required: true,
            minlength: 1
        }
    },
    messages: {
        "nombre": "El nombre es requerido",
        "email": "El email es requerido y debe ser valido",
        "sexo": "El sexo es requerido",
        "descripcion": "La descripcion es requerida",
        "roles[]": "Seleccione al menos uno de los Roles"
    }
});


$('#boton_crear').click(function(e) {
    e.preventDefault();
    if ($('#form_crear').valid()) {
        $("#crearModal").modal('show');
    }
});

$('#boton_actualizar').click(function(e) {
    e.preventDefault();
    if ($('#form_actualizar').valid()) {
        $("#actualizarModal").modal('show');
    }
});