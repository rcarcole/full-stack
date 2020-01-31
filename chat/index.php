<?php
?>

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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<!-- Afegit bootstrap i jquery (pel container)
    - millores possibles: en el text al teclejar "Enter" que envii com si fos clickant al "enviar" i que si volem fer un salt de linea en el text fer-ho amb "shift+enter"
                        
-->

<!--
<body>
    <div class="container">
        <h1>Conversació</h1>
    <textarea rows="8" cols="100" name="textTotal" id="textTotal"></textarea>
    <form>
        <label>Text</label>
        <textarea name="Texto" id="Texto"></textarea>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</div>

    <script src="app.js"></script>

</body>
</html>
-->

<body>
<div class="container">
    <h1>Conversació</h1>
  <div class="row">
    <div class="col">
    <form>
        <label>Text</label>
        <textarea name="Texto" id="Texto"></textarea>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    </div>
    <div class="col">
      
    </div>
    <div class="col">
    <textarea rows="8" cols="100" name="textTotal" id="textTotal"></textarea>
    </div>
  </div>
</div>

<script src="app.js"></script>

</body>
</html>