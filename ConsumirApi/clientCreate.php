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
          <h1 class="centrar" >Registrar Cliente</h1>
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
                <label for="exampleInputName">Name</label>
                <input id="name" type="text" class="form-control" placeholder="name" name="name">
              </div>
              <div class="form-group">
                <label for="exampleLastName">Legal Document</label>
                <input id="legal_document" type="text" class="form-control" placeholder="legal_document" name="legal_document">
              </div>
              <div class="form-group">
                <label for="examplePhone">Web Page</label>
                <input id="web_page" type=text size="15" class="form-control" placeholder="web_page" name="web_page">
              </div>
              <div class="form-group">
                <label for="exampleUser">Address</label>
                <input id="address"  type="text" class="form-control" placeholder="address" name="address">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input id="phone"  type="text" class="form-control" placeholder="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Sector</label>
                <select id="sector" class="btn btn-default dropdown-toggle" name="sector">
                  <option value="Educación">Educación</option>
                  <option value="Industria">Industria</option>
                  <option value="Agricultura">Agricultura</option>
                  <option value="Manufactura">Manufactura</option>
                  <option value="Servicios">Servicios</option>
                  <option value="Otros">Otros</option>
                </select>
              </div>
              <a id="create" type="submit" class="btn btn-success" onclick="saveClientAjax()">
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
        <p class=""></p>
      </footer>
    </div>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script>
  function saveClientAjax(){
    
     var name = $('#name').val();
     var legal_document = $('#legal_document').val();
     var web_page =   $('#web_page').val();
     var address = $('#address').val();
     var phone = $('#phone').val();
     var sector = $('#sector').val();

       var parametros={
        "name": name,
        "legal_document": legal_document,
        "web_page": web_page,
        "address": address,
        "phone": phone,
        "sector": sector,
    };

    $.ajax({
      data:JSON.stringify(parametros),
      datatype: "application/json",
      url:"http://localhost:3000/clients",
      type:"post",
      success:function(response){
        alert("Registrado");
        window.location.replace("http://localhost/ConsumirApi/clientIndex.php");
      },dataType:"json",
      contentType:"application/json"
      
      });
  }
  
</script>

  </body>
</html>