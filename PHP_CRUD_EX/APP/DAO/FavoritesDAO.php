<?php


class FavoritesDAO{


    private $connection;
    
    public function __construct(){
        
        $dsn = "mysql:host=localhost:3306;dbname=db_games";

        $this->connection = new PDO($dsn, 'root','root');

    }


public function FavoritesDAO_Insert(FavoriteModel $model){


    $sql = "INSERT INTO Favorites(idUsers,idGames) VALUES (?,?)";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindValue(1,$model->usersId);
    $stmt->bindValue(2,$model->gamesId);

    $stmt->execute();

}

public function FavoritesDAO_Select(int $idUser){

    $sql = "SELECT * FROM Favorites INNER JOIN 
    Games ON Favorites.idGames = Games.id WHERE idUsers = ?";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindValue(1,$idUser);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);

}

public function FavoritesDAO_Exists(int $idUser,int $idGame){

    $sql = "SELECT * FROM Favorites WHERE idUsers = ? AND idGames = ?";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindValue(1,$idUser);
    $stmt->bindValue(2,$idGame);

    $stmt->execute();
    $test = $stmt->rowCount();
    
    if($test === 0){

        return 1;

    }
    return 0;
    // return 1;

}

public function FavoritesDAO_Delete(int $idUser,int $idGame){

    $sql = "DELETE FROM Favorites WHERE idUsers = ? AND idGames = ?;";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindValue(1,$idUser);
    $stmt->bindValue(2,$idGame);
    
    $stmt->execute();

}




}


?>

