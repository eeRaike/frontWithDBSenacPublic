<?php

class GamesController{

    public static function createGamesForm(){


        include 'View/Games/GamesForm.php';

    }

    

    public static function gamesController_Save(){

        include 'Model/GamesModel.php';

        
        
        $model = new GameModel();
        
        $model->gamesName = $_POST['inputName']; // "usersName" é uma propriedade da model,
        $model->gamesPrice = $_POST['inputPrice']; // "usersEmail" é uma propriedade da model,
        $model->gamesLaunchDt = $_POST['inputLaunchDt']; // "usersEmail" é uma propriedade da model,
        
        // var_dump($model);
        // exit;
        
        $model->gamesModel_Save();
        header("Location: /game");
    }

    public static function gamesController_List(){

        include 'Model/GamesModel.php';
        include 'Model/FavoritesModel.php';

        // $modelExist = new FavoriteModel();
        // var_dump($modelExist);
        // $modelExist->favoritesModel_TESTING(10,10);
        // session_start(); 
        if (isset($_SESSION['sessionUser'])) { 
            $sUser = $_SESSION['sessionUser']; 
        }
        
        $model = new GameModel();
        $model->gamesModel_List();
        // var_dump($model);
        // exit;

        include 'View/Games/GamesList.php';



    }

    public static function gamesController_ListForFav(){

        include 'Model/GamesModel.php';

        $modelGames = new GameModel();
        $modelGames->gamesModel_List();
        // var_dump($model);
        // exit;

        // include 'View/Favorites/FavoritesForm.php';
        return $modelGames;
        


    }

    public static function gamesController_Delete(){

        include 'Model/GamesModel.php';

        $model = new GameModel();
        $model->gamesModel_Delete($_GET['id']);


        header("Location: /game");


    }

    public static function gamesController_Edit(){

        include 'Model/GamesModel.php';

        $model = new GameModel();

        $model->gamesId = $_POST['inputId'];
        $model->gamesName = $_POST['inputName'];
        $model->gamesPrice = $_POST['inputPrice'];
        $model->gamesLaunchDt = $_POST['inputLaunchDt'];


        $model->gamesModel_Edit();
        header("Location: /game");

    }

    public static function gamesController_FillEditForm(){

        include 'Model/GamesModel.php';

        $model = new GameModel();
        $model = $model->gamesModel_FillEditForm((int) $_GET['id']);

        include 'View/Games/GamesEditForm.php';

    }

    public static function gamesController_Populate(){

        include 'Model/GamesModel.php';

        $model = new GameModel();
        $model->gamesModel_Populate();


    }



}

?>