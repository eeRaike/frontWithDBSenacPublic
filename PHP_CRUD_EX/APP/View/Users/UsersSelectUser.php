<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Select The User for This Session</h1>

<form action="/save" method="post">

<select class="form-select" name="selectUser" id="selectUser">
   <?php foreach($modelUsers->rows as $item):?>
        <option value="<?=$item->id?>"><?=$item->usersName?></option>
    <?php endforeach?>

</select>

<button class="btn btn-success" type="submit">Send</button>

</form>



    
</body>
</html>