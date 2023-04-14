const crearBaseDatos = () => {

  const configDDBB = {
    'host': 'localhost',
    'user': 'root',
    'pass': '',
    'dbname': 'atento',
  }

  $.post('./server/createDB.php', configDDBB, function(res){
    console.log(res)
  })
}