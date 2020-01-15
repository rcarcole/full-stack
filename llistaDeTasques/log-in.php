<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inici de sessió</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
<form class="" action="login.php" method="POST">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Correu</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="correu" placeholder="correu@exemple.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Contrasenya</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="contrasenya" placeholder="Contrasenya">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Recorda'm
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Accedir</button>
</form>
</body>
</html>

<!--
<form action="login.php" method="POST">
    Nom:<input type="text" name="correu"></br>
    Contrasenya:<input type="password" name="contrasenya"></br>
    <input type="submit" name="enviar" value="Enviar">

</form>

linea 18
id="exampleDropdownFormEmail2"

linea 22
id="exampleDropdownFormPassword2"

-->