<!DOCTYPE html>
<html>
<head>
  <title>INICIAR SESI&Oacute;N</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

  <div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
      <div class="modal-content">

        <div class="col-12 user-img">
          <img src="../img/face.png">
          <h4>Iniciar sesi&oacute;n</h4>
        </div>
        <div class="col-12 form-input">
        <form action="autentificar.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Email" name="txtUsuario">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter Password"name="txtPass">
            </div><button type="submit" class="btn btn-success">ACCEDER</button>            
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>