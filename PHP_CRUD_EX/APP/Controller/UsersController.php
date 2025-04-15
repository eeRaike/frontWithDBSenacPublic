<?php

class UsersController{

    public static function createUsersForm(){


        include 'View/Users/UsersForm.php';

    }

    

    public static function usersController_Save(){

        include 'Model/UsersModel.php';

        
        
        $model = new UserModel();
        
        $model->usersName = $_POST['inputName']; // "usersName" é uma propriedade da model,
        $model->usersEmail = $_POST['inputEmail']; // "usersEmail" é uma propriedade da model,
        
        // var_dump($model);
        // exit;
        
        $model->usersModel_Save();
        header("Location: /user");
    }

    public static function usersController_List(){

        include 'Model/UsersModel.php';

        $model = new UserModel();
        $model->usersModel_List();
        // var_dump($model);
        // exit;

        include 'View/Users/UsersList.php';



    }

    public static function usersController_ListForFav(){

        include 'Model/UsersModel.php';

        $modelUsers = new UserModel();
        $modelUsers->usersModel_List();
        // var_dump($model);
        // exit;

        // include 'View/Favorites/FavoritesForm.php';

        return $modelUsers;



    }

    public static function usersController_Delete(){

        include 'Model/UsersModel.php';

        $model = new UserModel();
        $model->usersModel_Delete($_GET['id']);


        header("Location: /user");


    }

    public static function usersController_Edit(){

        include 'Model/UsersModel.php';

        $model = new UserModel();

        $model->usersId = $_POST['inputId'];
        $model->usersName = $_POST['inputName'];
        $model->usersEmail = $_POST['inputEmail'];


        $model->usersModel_Edit();
        header("Location: /user");

    }

    public static function usersController_FillEditForm(){

        include 'Model/UsersModel.php';

        $model = new UserModel();
        $model = $model->usersModel_FillEditForm((int) $_GET['id']);

        include 'View/Users/UsersEditForm.php';

    }

    public static function usersController_Populate(){

        include 'Model/UsersModel.php';

        $model = new UserModel();
        $model->usersModel_Populate();


    }

}

?>