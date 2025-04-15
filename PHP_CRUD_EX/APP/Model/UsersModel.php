<?php


class UserModel{


public $usersId;
public $usersName;
public $usersEmail;
public $rows;

//função que salva a data e envia para a DAO
public function usersModel_Save(){
    //inclui a DAO na função para que possa ser chamada
    include 'DAO/UsersDAO.php';
    //cria uma varíavel será uma instancia da DAO;
    $dao = new UsersDAO();

    $dao->UsersDAO_Insert($this); //$this se refere à classe que tem as variaveis


}


public function usersModel_List(){
    include 'DAO/UsersDAO.php';

    $dao = new UsersDAO();

    $this->rows = $dao->UsersDAO_Select();
    // var_dump($this->rows);
    // exit;
}

public function usersModel_ListForFav(){
    include 'DAO/UsersDAO.php';

    $dao = new UsersDAO();

    $this->rows = $dao->UsersDAO_Select();
    // var_dump($this->rows);
    // exit;
}

public function usersModel_Delete(int $id){

    include 'DAO/UsersDAO.php';

    $dao = new UsersDAO();

    $dao->UsersDAO_Delete($id);


}

public function usersModel_Edit(){

    include 'DAO/UsersDAO.php';

    $dao = new UsersDAO();

    $dao->UsersDAO_Update($this);

}

public function usersModel_FillEditForm(int $id){
    
    include 'DAO/UsersDAO.php';

    $dao = new UsersDAO();

    $obj = $dao->UsersDAO_FillEditForm($id);
    
    return $obj;


}

public function usersModel_Populate(){

    include 'DAO/UsersDAO.php';

    $dao = new UsersDAO();

    $dao->UsersDAO_Populate();

}




}



?>