<?php

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ Games</title>
</head>
<body>
    <table class="table table-dark table-striped">
        <tr>
            <!-- <th>User:</th> -->
            <th>Jogo:</th>
            <th>Nome:</th>
            <th>Preço:</th>
            <th>Data de Lançamento:</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($model->rows as $item):?>
            <tr>
                <!-- tem que ser os mesmos que ta no banco de dados aparentemente? Ou talvez eu tenha definido algo errado; Mas funciona :D -->
                <!-- <td><?=$sUser?></td> -->
                <td><?=$item->id?></td>
                <td><?=$item->gamesName?></td>
                <td><?=$item->Price?></td>
                <td><?=$item->launchDate?></td>
                <td><a href="/game/delete?id=<?=$item->id?>"><button class="btn btn-outline-danger">Delete</button></a></td>
                <td><a href="/game/edit?id=<?=$item->id?>"><button class="btn btn-outline-primary">Edit</button></a></td>
                <!-- <td><a href="/fav/save?id=<?=$item->id?>"><button>Fav</button></a></td> -->
                <!-- <td><a href="/fav/delete?id=<?=$item->id?>"><button>UnFav</button></a></td> -->
                <?php
                $modelExist = new FavoriteModel();
                $modelExist->favoritesModel_Exists($sUser,$item->id);
                // var_dump($modelExist->exists);
                
                if($modelExist->exists === 1){
                    $testeEcho1 = '<td><a href="/fav/save?id=';
                    $usableId = $item->id;
                    $testeEcho2 = '"><button class="btn btn-outline-success">🤍</button></a></td>';
                    echo $testeEcho1 . $usableId . $testeEcho2;
                }else if($modelExist->exists === 0) {
                    $testeEcho1 = '<td><a href="/fav/delete?id=';
                    $usableId = $item->id;
                    $testeEcho2 = '"><button class="btn btn-outline-success">❤</button></a></td>';

                    echo $testeEcho1 . $usableId . $testeEcho2;

                }

                // echo $sUser . " espaço ". $item->id ;
                ?>
                
                
            </tr>
            <?php endforeach?>
    </table>
    
</body>
</html>