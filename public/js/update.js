$(document).ready(function() {
    $.ajax({
        url: './server/controller_table.php',
        type: 'GET',
        success: function(res) {
            $(tablaAlumnos).html(res);
        }
    })
})

// SOLUCION CON JQUERY CASI NO LO USO PERO ES MENOS COMPLICADO QUE CON JAVASCRIPT PURO COMO EL EJEMPLO DE ABAJO

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

$(formRegister).submit(function(e) {
    const postData = {
        name: $('#ins_nombre').val(),
        lastName: $('#ins_apellido').val(),
        age: $('#ins_edad').val(),
        email: $('#ins_email').val(),
        phone: $('#ins_tel').val(),
        course: $('#ins_curso').val()
    }
    $.post('./server/controller_register.php', postData, function(res){
        $(alerta).html(res)
        $('#formRegister').trigger('reset')
    })
    e.preventDefault();
})


// SOLUCION FUNCIONAL AL EJERCICIO CON JAVASCRIPT PURO QUE ES MI FUERTE - SIN JQUERY

// const inptSearch = document.getElementById('inptSearch');

// inptSearch.addEventListener('keyup', function(e) {
//   const search = inptSearch.value;
  
//   const xhr = new XMLHttpRequest();
//   xhr.open('POST', './public/js/dataSearch.php');
//   xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//   xhr.onreadystatechange = function() {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       console.log('soy la respuesta' + xhr.responseText);
//     }
//   };
  
//   xhr.send('search=' + encodeURIComponent(search));
// });
