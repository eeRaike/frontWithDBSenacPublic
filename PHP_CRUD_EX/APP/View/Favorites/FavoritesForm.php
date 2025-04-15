<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE Favorite</title>
</head>
<body>


<form action="/fav/form/save" method="post">

<select name="selectGame" id="selectGame">
   <?php foreach($modelGames->rows as $item):?>
        <option value="<?=$item->id?>"><?=$item->gamesName?></option>
    <?php endforeach?>
</select>

<button type="submit">Send</button>

</form>




    
</body>
</html>