<?php


class GameModel{


public $gamesId;
public $gamesName;
public $gamesPrice;
public $gamesLaunchDt;
public $rows;

//função que salva a data e envia para a DAO
public function gamesModel_Save(){
    //inclui a DAO na função para que possa ser chamada
    include 'DAO/GamesDAO.php';
    //cria uma varíavel será uma instancia da DAO;
    $dao = new GamesDAO();

    $dao->GamesDAO_Insert($this); //$this se refere à classe que tem as variaveis


}


public function gamesModel_List(){
    include 'DAO/GamesDAO.php';

    $dao = new GamesDAO();

    $this->rows = $dao->GamesDAO_Select();
    // var_dump($this->rows);
    // exit;
}

public function gamesModel_ListForFav(){
    include 'DAO/GamesDAO.php';

    $dao = new GamesDAO();

    $this->rows = $dao->GamesDAO_Select();
    // var_dump($this->rows);
    // exit;
}

public function gamesModel_Delete(int $id){
    
    include 'DAO/GamesDAO.php';

    $dao = new GamesDAO();

    $dao->GamesDAO_Delete($id);


}

public function gamesModel_Edit(){

    include 'DAO/GamesDAO.php';

    $dao = new GamesDAO();

    $dao->GamesDAO_Update($this);

}

public function gamesModel_FillEditForm(int $id){
    
    include 'DAO/GamesDAO.php';

    $dao = new GamesDAO();

    $obj = $dao->GamesDAO_FillEditForm($id);
    
    return $obj;


}


public function gamesModel_Populate(){

    include 'DAO/GamesDAO.php';

    $dao = new GamesDAO();

    $dao->GamesDAO_Populate();


}

}



?>