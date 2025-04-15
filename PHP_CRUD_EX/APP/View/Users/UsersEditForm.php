<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT User</title>
</head>
<body>

    <h1>Edit User</h1>

    <form action="/user/edit/save" method="post">
        
        <label for="inputId">Id:</label>
        <!-- value ta pegando o id diretamente da url por isso funciona, o resto, eu tenho que pegar do banco de dados mesmo -->
        <input class="form-control" type="text" readonly id="id" name="inputId" value="<?= $_GET['id']?>"> 

        <label for="inputName">Name:</label>
        <input class="form-control" type="text" id="usersName" name="inputName" value="<?=$model->usersName ?>">

        <label for="inputEmail">Email:</label>
        <input class="form-control" type="text" id="usersEmail" name="inputEmail" value="<?=$model->usersEmail ?>">
        
        <button class="btn btn-success" type="submit">Send</button>

    </form>

</body>
</html>