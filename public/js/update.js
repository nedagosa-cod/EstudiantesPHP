
// AL INICIAR EL DOCUMENTO CARGA LA BASE Y LA MUESTRA EN FRONT Y SE ACTUALIZA CADA 4 SEGUNDOS
$editar = false;
$(document).ready(function() {
    fetchTable();
    setInterval(function() {
        seconds++
        fetchTable();
    }, 4000)
})

// ELIMINA LA FILTA AL DAR CLICK AL BOTON DE LA FILA  
$(document).on('click', '.btn-delete', function(e) {
    if (confirm('ESTAS SEGURO DE QUERER ELIMINARLO?')) {
        let element = $(this)[0].parentElement.parentElement
        let id = $(element).attr('tableId')
        $.post('./server/controller_delete.php', {id}, function(res){
            fetchTable();
        })
    }
})

$(document).on('click', '.btn-update', function(e) {
    let element = $(this)[0].parentElement.parentElement
    let id = $(element).attr('tableId')
    $.post('./server/controller_userup.php', {id}, function(res){
        let rowAlumno = JSON.parse(res)
        $('userId').val(rowAlumno.id)
        $('#ins_nombre').val(rowAlumno.name)
        $('#ins_apellido').val(rowAlumno.lastName)
        $('#ins_edad').val(rowAlumno.age)
        $('#ins_email').val(rowAlumno.email)
        $('#ins_tel').val(rowAlumno.phone)
        $('#ins_curso').val(rowAlumno.course)
        $editar = true
        $('#userId').val(id)
    })
})

// BUSCA SI EXISTE EL DATO EN LA TABLA
$(inptSearch).keyup(function(e) {
    let search = $(inptSearch).val();
    if (search) {
        $.ajax({
            url: './server/dataSearch.php',
            type: 'POST',
            data: { search },
            success: function(res) {
                let data = JSON.parse(res)
                let template = ''
                data.forEach(element => {
                    template += `<p>• ${element.names}</p>`
                })
                $('#dataSearched').html(template)
            }
        })
    }
})

// SE ENVIAN LOS DATOS DEL FORMULARIO AL BACK
$(formRegister).submit(function(e) {
    const postData = {
        id: $('#userId').val(),
        name: $('#ins_nombre').val(),
        lastName: $('#ins_apellido').val(),
        age: $('#ins_edad').val(),
        email: $('#ins_email').val(),
        phone: $('#ins_tel').val(),
        course: $('#ins_curso').val()
    }

    let url = $editar === false ? './server/controller_register.php' : './server/controller_update.php'

    $.post(url, postData, function(res){
        $(alerta).html(res)
        $('#formRegister').trigger('reset')
        $editar = false
    })
    e.preventDefault();
})

// FUNCION PARA FETCH DE TABLA Y MOSTRARLA EN FRONT
function fetchTable () {
    $.ajax({
        url: './server/controller_table.php',
        type: 'GET',
        success: function(res) {
            $(tablaAlumnos).html(res);
        }
    })
}