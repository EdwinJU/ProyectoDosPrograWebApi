<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	
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
        <h1 class="centrar" >Edición Contacto</h1>
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
        <label for="exampleInputName">Nombre</label>
        <input id="name" type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="exampleLastName">Apellido</label>
        <input id="lastname" type="text" class="form-control"  name="lastname">
      </div>
      <div class="form-group">
        <label for="exampleUser">Email</label>
        <input id="email"  type="text" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="examplePhone">Teléfono</label>
        <input id="phone" type=text size="15" class="form-control" name="phone">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Puesto</label>
        <input id="position"  type="text" class="form-control"  name="position" >
      </div> 
      <div class="form-group">
        <label for="exampleInputPassword1">Cliente</label>
        <select class="btn btn-default dropdown-toggle" name="Client" id="client_id">
       
        </select>
      </div>
      <a id="update" type="submit" class="btn btn-success" onclick="updateContact()">
      Update
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
            <p class="">Edit Contact</p>
        </footer>
    </div>
             <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){
    var id= "<?php echo $_GET["id"]  ?>";

    $.ajax({
      url: "http://localhost:3000/contacts/"+id,
      type: "get",
      datatype: 'application/json',
      success:function(response){
        document.getElementById("name").value = response.name;
        document.getElementById("lastname").value = response.lastname;
        document.getElementById("email").value = response.email;
        document.getElementById("phone").value = response.phone;
        document.getElementById("position").value = response.position;
        
      }
    });
  });
  </script>


  <script>
  function updateContact(){
    
     var id= "<?php echo $_GET["id"]  ?>";
     var name=  $('#name').val();
     var lastname = $('#lastname').val();
     var email = $('#email').val();
     var phone =   $('#phone').val();
     var position = $('#position').val();
      var client_id =   $('#client_id').val();

       var parametros={
        "name": name,
        "lastname": lastname,
        "email": email,
        "phone": phone,
        "position": position,
        "client_id": client_id
    };

    $.ajax({
      data:JSON.stringify(parametros),
      datatype: "application/json",
      url:"http://localhost:3000/contacts/"+id,
      type:"patch",
      success:function(response){
        alert("Registrado");
        window.location.replace("http://localhost/ConsumirApi/contacIndex.php");
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