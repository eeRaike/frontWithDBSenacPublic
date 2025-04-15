<?php 


class FavoritesController{





public static function FavoritesController_List(){


    $modelGames = GamesController::gamesController_ListForFav();
    // $modelUsers = UsersController::usersController_ListForFav();

    include 'View/Favorites/FavoritesForm.php';

}

public static function FavoritesController_Save(){

    include 'Model/FavoritesModel.php';

    session_start(); 
    $model = new FavoriteModel();

    $model->usersId = $_SESSION['sessionUser'];
    $model->gamesId = $_GET['id'];

    $model->favoritesModel_Save();

    header("Location: /game");


}

public static function FavoritesController_Delete(){

    include 'Model/FavoritesModel.php';

    session_start();
    $model = new FavoriteModel();

    $model->usersId = $_SESSION['sessionUser'];
    $model->gamesId = $_GET['id'];

    $model->favoritesModel_Delete();

    header("Location: /game");

}

public static function FavoritesController_ListFavGames(){

    include 'Model/FavoritesModel.php';

    $model = new FavoriteModel();

    $model->usersId = $_GET['id'];
    $model->favoritesModel_List($model->usersId);

    include 'View/Favorites/FavoritesList.php';


}

public static function FavoritesController_TESTING(){

    include 'Model/FavoritesModel.php';
    session_start();
    $temp = $_SESSION['sessionUser'];

    $modelExist = new FavoriteModel();
    $modelExist->favoritesModel_Exists($temp,20);
    echo $temp;
    
    include 'View/Favorites/FavoritesTestview.php';
}


}

?>