$(inptSearch).keyup(function(e) {
    let search = $(inptSearch).val();
    $.ajax({
        url: './public/js/dataSearch.php',
        type: 'POST',
        data: { search },
        success: function(res) {
            console.log('soy la respuesta' + res);
        }
    })
    // $.ajax({
    //     url: "./public/js/dataSearch.php",
    //     method: "POST",
    //     data: { key1: search}
    //   }).done(function(response) {
    //     console.log("Data saved: " + response);
    //   }).fail(function(jqXHR, textStatus, errorThrown) {
    //     console.error("Request failedd: " + textStatus + ", " + errorThrown);
    //   });
})



  

// function actualizarTabla(){
//     console.log("inicio update");
//     $.ajax({
//         url: "../views/dataAlumnos.php",
//         success: function(data){
//             $("#tabla").html(data);
//         }
//     });
// }


// window.onload = function() {
//     setInterval(actualizarTabla, 4000);
//   };