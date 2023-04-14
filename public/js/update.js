function actualizarTabla(){
    console.log("inicio update");
    $.ajax({
        url: "../views/dataAlumnos.php",
        success: function(data){
            $("#tabla").html(data);
        }
    });
}


window.onload = function() {
    setInterval(actualizarTabla, 4000);
  };