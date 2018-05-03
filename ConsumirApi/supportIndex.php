<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Lista Reuniones</title>
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
            <a class="nav-link" href="http://localhost/ConsumirApi/contactIndex.php">Contactos</a>
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
 <div class="container">
 	<h1 class="text-center">Soporte</h1>
    <a href="http://localhost/ConsumirApi/supportCreate.php">Crear nuevo soporte</a>
    <br />
    <br />
 	<table class="table table-hover table-bordered">
    <tr class="info">
      <thead>
        <th class="active">
            Título
        </th>
        <th class="active">
            Detalle
        </th>
        <th class="active">
           Cliente
        </th>
        <th class="active">
           Usuario
        </th>
        <th class="active">
            Estado
        </th>
        <th class="active">Edición</th>
        <th class="active">Eliminación</th>
      </thead>
    </tr>
   <tbody id="tabla">
     
   </tbody>
 	</table>
 </div>
  <div class="container body-content">
        <hr />
        <footer>
            <p class="centrar">Support Tickets</p>
        </footer>
    </div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 
<script>
    function borrar(id){
      
        $.ajax({
        url: "http://localhost:3000/tickets/"+id,
        type:"delete",
        datatype:"application/json",
        success:function(response){
        alert("Eliminado");
        window.location.replace("http://localhost/ConsumirApi/supportIndex.php");
        }
      });      
    }
    </script>


<script>

   $(document).ready(function(){


    $.ajax({
      url:"http://localhost:3000/tickets",
      type:"get",
      datatype: 'application/json',
      success:function(response){
        
        for (var i = 0; i < response.length; i++) {
          var tr = "<tr>"+
                  "<td>"+response[i].problem_title+"</td>"+
                  "<td>"+response[i].detail+"</td>"+
                  "<td>"+response[i].who_report+"</td>"+
                  "<td>"+response[i].client_id+"</td>"+
                  "<td>"+response[i].status+"</td>"+
                  "<td><a class='btn green' href='supportEdit.php?id="+response[i].id+"'>Edit</a></td>"+
                  "<td><button class='btn red' onclick='borrar("+response[i].id+");'>Delete</button></td>"
                  +"</tr>";
          $("#tabla").append(tr);
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