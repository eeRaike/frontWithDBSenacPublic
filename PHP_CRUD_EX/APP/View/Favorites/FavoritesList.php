<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ Favorites Where User</title>
</head>
<body>
    

    <table class="table table-dark table-striped">
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>Price:</th>
            <th>Launch Date:</th>
        </tr>
        <?php foreach($model->rows as $item):?>
        <tr>
            
            <td><?=$item->id?></td>
            <td><?=$item->gamesName?></td>
            <td><?=$item->Price?></td>
            <td><?=$item->launchDate?></td>
        </tr>
    <?php endforeach?>
    </table>



</body>
</html>