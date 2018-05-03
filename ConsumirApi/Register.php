<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
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
    <h1 class="centrar" >Registro</h1>
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
        <input id="name" type="text" class="form-control" placeholder="name" name="name">
      </div>
      <div class="form-group">
        <label for="exampleLastName">Apellido</label>
        <input id="lastname" type="text" class="form-control" placeholder="lastname" name="lastname">
      </div>
      <div class="form-group">
        <label for="examplePhone">Username</label>
        <input id="username" type=text size="15" class="form-control" placeholder="username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleUser">Contraseña</label>
        <input id="password"  type="password" class="form-control" placeholder="password" name="password">
      </div>
       <div class="form-group">
        <label for="exampleUser">Tipo Usuario</label>
        <input id="user_type"  type="text" class="form-control" placeholder="user_type" name="user_type">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Repetir Contraseña</label>
        <input id="pass"  type="password" class="form-control" placeholder="Repetir Contraseña" name="ConfirmPassword">
      </div>
      <a id="create" type="submit" class="btn btn-success" onclick="saveUserAjax()">
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
            <p class="">Register User</p>
        </footer>
    </div>
    <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
     <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>
  function saveUserAjax(){
    
     var name = $('#name').val();
     var lastname = $('#lastname').val();
     var username =   $('#username').val();
     var password = $('#password').val();
     var user_type = $('#user_type').val();

       var parametros={
        "name": name,
        "lastname": lastname,
        "username": username,
        "password": password,
        "user_type": user_type
    };

    $.ajax({
      data:JSON.stringify(parametros),
      datatype: "application/json",
      url:"http://localhost:3000/users",
      type:"post",
      success:function(response){
        alert("Registrado");
        window.location.replace("http://localhost/ConsumirApi/userIndex.php");
      },dataType:"json",
      contentType:"application/json"
      
      });
  }
  
</script>
<script>
    function cerrar(){
      window.location.replace("http://localhost/ConsumirApi/principal.php?cerrar=exit");
    }
  </script>

</body>
</html>