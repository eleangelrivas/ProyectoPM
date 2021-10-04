<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Proyecto PM</title>
  </head>
  <body>
    <div class="container">
      
      <div class="row">
        
      </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </body>

  <script>

    $(function(){
      console.log("Esta funcionando");
      cargar_ajax();
    });

    function cargar_ajax(){
      console.log("llega a la funcion ajax");
      // return;
      var datos = {"consultar_info":"este_es_el_valor","nombre":"Elenilson","edad":30};
      $.ajax({
          dataType: "json",
          method: "POST",
          url:'Conexion/Controlador.php',
          data : datos,
      }).done(function(json) {
        console.log("Estos datos retorna: ",json);
        if (json[0]=="error") {
          console.error("Ocurrio un error");
        }
      }).fail(function() {
          alert( "error" );
      }).always(function() {
        console.log( "complete" );
      });
    }
  </script>
</html>