<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ Users</title>
</head>
<body>
    <table class="table table-dark table-striped">
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>Email:</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($model->rows as $item):?>
            <tr>
                <!-- tem que ser os mesmos que ta no banco de dados aparentemente? Ou talvez eu tenha definido algo errado; Mas funciona :D -->
                <td><?=$item->id?></td>
                <td><?=$item->usersName?></td>
                <td><?=$item->usersEmail?></td>
                <td><a href="/user/delete?id=<?=$item->id?>"><button class="btn btn-outline-danger">Delete</button></a></td>
                <td><a href="/user/edit?id=<?=$item->id?>"><button class="btn btn-outline-primary">Edit</button></a></td>
                <td><a href="/user/favs?id=<?=$item->id?>"><button class="btn btn-outline-success">List Favorites</button></a></td>
                <td></td>
            </tr>
            <?php endforeach?>
    </table>
    
</body>
</html>