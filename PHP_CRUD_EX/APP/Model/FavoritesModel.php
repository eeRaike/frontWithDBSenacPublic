<?php 

class FavoriteModel{

public $usersId;
public $gamesId;
public $rows;
public $exists;


public function favoritesModel_Save(){

    include 'DAO/FavoritesDAO.php';

    $dao = new FavoritesDAO();

    $dao->FavoritesDAO_Insert($this);
}


public function favoritesModel_List(int $userId){

    include 'DAO/FavoritesDAO.php';

    $dao = new FavoritesDAO();

    $this->rows = $dao->FavoritesDAO_Select($userId);


}

public function favoritesModel_Exists(int $idUser,int $idGame){

    include_once 'DAO/FavoritesDAO.php';
    
    $dao = new FavoritesDAO();

    $this->exists = $dao->FavoritesDAO_Exists($idUser,$idGame);

    

}

public function favoritesModel_Delete(){

    include 'DAO/FavoritesDAO.php';

    $dao = new FavoritesDAO();

    $dao->FavoritesDAO_Delete($this->usersId,$this->gamesId);
}

}


?>