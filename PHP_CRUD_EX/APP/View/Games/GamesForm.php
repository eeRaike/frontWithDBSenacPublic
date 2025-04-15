<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE Game</title>
</head>
<body>

    <h1>Register New Game</h1>

    <form action="/game/form/save" method="post">
        
        <label for="inputName">Name:</label>
        <input class="form-control" type="text" id="gamesName" name="inputName">

        <label for="inputPrice">Preço:</label>
        <input class="form-control" type="number" id="Price" name="inputPrice">

        <label for="inputLaunchDt">Data de lançamento:</label>
        <input class="form-control" type="date" id="launchDate" name="inputLaunchDt">
        
        <button class="btn btn-success" type="submit">Send</button>

    </form>

</body>
</html>