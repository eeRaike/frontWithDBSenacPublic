<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT Game</title>
</head>
<body>

    <h1>Edit Game</h1>
    <form action="/game/edit/save" method="post">
        
        <label for="inputId">Id:</label>
        <!-- value ta pegando o id diretamente da url por isso funciona, o resto, eu tenho que pegar do banco de dados mesmo -->
        <input class="form-control" type="text" id="id" name="inputId" value="<?= $_GET['id']?>" readonly> 

        <label for="inputName">Name:</label>
        <input class="form-control" type="text" id="gamesName" name="inputName" value="<?=$model->gamesName ?>">

        <label for="inputPrice">Preço:</label>
        <input class="form-control" type="text" id="Price" name="inputPrice" value="<?=$model->Price ?>">
        
        <label for="inputLaunchDt">Preço:</label>
        <input class="form-control" type="text" id="launchDate" name="inputLaunchDt" value="<?=$model->launchDate ?>">
        
        <button class="btn btn-success" type="submit">Send</button>

    </form>

</body>
</html>