<!DOCTYPE html>
<html>
<head>
	<title>Soporte</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/ConsumirApi/Register.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/ConsumirApi/clientIndex.php">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/ConsumirApi/contacIndex.php">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/ConsumirApi/meetingIndex.php">Reuniones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/ConsumirApi/supportIndex.php">Soporte</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" onclick="cerrar()">logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <br />
    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
           <div class="">
    <h1 class="centrar" >Registro Soporte</h1>
</div>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        <div class="container">
    <div id = caja>
       <div class="form-group">
        <label for="exampleInputName">Titulo</label>
        <input id="problem_title" type="text" class="form-control" placeholder="problem_title" name="problem_title">
      </div>
      <div class="form-group">
        <label for="exampleInputName">Detalle</label>
        <input id="detail" type="text" class="form-control" placeholder="detail" name="detail">
      </div>
      <div class="form-group">
        <label for="exampleInputName">Titulo</label>
        <input id="who_report" type="text" class="form-control" placeholder="who_report" name="who_report">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Cliente</label>
        <select id="client_id" class="btn btn-default dropdown-toggle" name="Cliente">
         
        </select>
      </div>   
      <div class="form-group">
        <label for="examplePhone">Estado</label>
         <select id="status" class="btn btn-default dropdown-toggle" name="status">
        <option value="Abierto">Abierto</option>
        <option value="En Proceso">En Proceso</option>
        <option value="En Proceso">En Espera</option>
        <option value="En Espera">Finalizado</option>
        </select>
      </div>
     <a id="create" type="submit" class="btn btn-success" onclick="saveSupportAjax()">
      Registrar
   </a>
  </div>
</div> 
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    <div class="container body-content">
        <hr />
        <footer>
            <p class="">Support Create</p>
        </footer>
    </div>
         <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>
  function saveSupportAjax(){
    
     var problem_title = $('#problem_title').val();
     var detail = $('#detail').val();
     var who_report =   $('#who_report').val();
     var client_id = $('#client_id').val();
          var status= $('#status').val();

  

       var parametros={
        "problem_title": problem_title,
        "detail": detail,
        "who_report": who_report,
        "client_id": client_id,
        "status": status
    };

    $.ajax({
      data:JSON.stringify(parametros),
      datatype: "application/json",
      url:"http://localhost:3000/tickets",
      type:"post",
      success:function(response){
        alert("Registrado");
        window.location.replace("http://localhost/ConsumirApi/supportIndex.php");
      },dataType:"json",
      contentType:"application/json"
      
      });
  }
  
</script>

<script>
  
$(document).ready(function(){

  $.ajax({
    url:"http://localhost:3000/clients",
    type:"get",
    datatype: 'application/json',
    success:function(response){

      for (var i=0; i < response.length; i++) {
        var option = "<option value='"+response[i].id+"'>"+response[i].name+"</option>";
          $("#client_id").append(option);
          //$('select').formSelect();
        }
      }
       });
    });
  
</script>

<script>
    function cerrar(){
      window.location.replace("http://localhost/ConsumirApi/principal.php?cerrar=exit");
    }
  </script>

</body>
</html>