<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0437b86024.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Gestió d'usuaris</h1>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody id="taula">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  </tbody>
</table>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First</label>
    <input type="text" class="form-control" id="first" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last</label>
    <input type="text" class="form-control" id="last" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Handle</label>
    <input type="text" class="form-control" id="handle">
  </div>
  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
</form>


</div>


<script src="app.js"></script>
</body>
</html>


