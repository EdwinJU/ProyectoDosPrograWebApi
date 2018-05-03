<!DOCTYPE html>
<html>
<head>
	<title>Reuniones</title>
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
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        <div class="">
        <h1 class="centrar" >Edición Reunión</h1>
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
      </div>   
       <div class="form-group">
        <label for="exampleInputName">Nombre</label>
        <input id="meeting_title" type="text" class="form-control" name="meeting_title">
      </div>
      <div class="form-group">
        <label for="exampleLastName">Fecha</label>
        <input id="meeting_date" type="datatime" class="form-control" name="meeting_date">
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Usuario</label>
        <select id="user_id" class="btn btn-default dropdown-toggle" name="Usuario">
        
        </select>
      <div class="form-group">
        <label for="examplePhone">Es virtual</label>
         <select id="virtual" class="btn btn-default dropdown-toggle" name="virtual">
        <option value="true">Sí</option>
        <option value="false">No</option>
        </select>
      </div>
     <a id="update" type="submit" class="btn btn-success" onclick="updateMeeting()">
      Update
   </a>
    </form>
  </div>
</div> 
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    <div class="container body-content">
        <hr />
        <footer>
            <p class="">Meeting Edit</p>
        </footer>
    </div>
          <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<script>
  $(document).ready(function(){
    var id= "<?php echo $_GET["id"]  ?>";

    $.ajax({
      url: "http://localhost:3000/meetings/"+id,
      type: "get",
      datatype: 'application/json',
      success:function(response){
        document.getElementById("meeting_title").value = response.meeting_title;
        document.getElementById("meeting_date").value = response.meeting_date;
        document.getElementById("virtual").value = response.virtual;
        
      }
    });
  });
  </script>


  <script>
  function updateMeeting(){
    
     var id= "<?php echo $_GET["id"]  ?>";
     var meeting_title=  $('#meeting_title').val();
     var meeting_date = $('#meeting_date').val();
     var user_id = $('#user_id').val();
     var virtual =   $('#virtual').val();
    

       var parametros={
        "meeting_title": meeting_title,
        "meeting_date": meeting_date,
        "user_id": user_id,
        "virtual": virtual
    };

    $.ajax({
      data:JSON.stringify(parametros),
      datatype: "application/json",
      url:"http://localhost:3000/meetings/"+id,
      type:"patch",
      success:function(response){
        alert("Registrado");
        window.location.replace("http://localhost/ConsumirApi/meetingIndex.php");
      },dataType:"json",
      contentType:"application/json"
      
      });
  }
  
</script>

<script>
  
$(document).ready(function(){

  $.ajax({
    url:"http://localhost:3000/users",
    type:"get",
    datatype: 'application/json',
    success:function(response){

      for (var i=0; i < response.length; i++) {
        var option = "<option value='"+response[i].id+"'>"+response[i].name+"</option>";
          $("#user_id").append(option);
          //$('select').formSelect();
        }
      }
       });
    });
  
</script>

</body>
</html>