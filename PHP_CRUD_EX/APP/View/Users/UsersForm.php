<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE User</title>
</head>
<body>

    <h1>Register New User</h1>

    <form class="container" action="/user/form/save" method="post">
        
        <label for="inputName">Name:</label>
        <input type="text" class="form-control" id="usersName" name="inputName">

        <label for="inputEmail">Email:</label>
        <input type="text" class="form-control" id="usersEmail" name="inputEmail">
        
        <button class="btn btn-success" type="submit">Send</button>

    </form>

</body>
</html>