    <?php


class GamesDAO{

    private $connection;

    public function __construct(){
        
        $dsn = "mysql:host=localhost:3306;dbname=db_games";

        $this->connection = new PDO($dsn, 'root','root');

    }

    public function GamesDAO_Insert(GameModel $model){

        //adicionar ao uma funcionalidade que apague todos os registros da tabela favorites
        //onde o id for igual ao do jogo
        $sql = "INSERT INTO Games(gamesName,Price,launchDate) VALUES (?,?,?)" ;

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $model->gamesName);
        $stmt->bindValue(2, $model->gamesPrice);
        $stmt->bindValue(3, $model->gamesLaunchDt);

        $stmt->execute();


    }

    
        public function GamesDAO_Select(){
    
            $sql = "SELECT * FROM Games";
    
            $stmt = $this->connection->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_CLASS);
    
        }
    
        public function GamesDAO_SelectForFav(){
    
            $sql = "SELECT id,gamesName FROM Games";
    
            $stmt = $this->connection->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_CLASS);
    
        }
    
    public function GamesDAO_Delete(int $id){

        $sql = "DELETE FROM Favorites WHERE idGames = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$id);
        $stmt->execute();


        $sql = "DELETE FROM Games WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$id);
        $stmt->execute();



    }


    //update proper, altera a data no banco de dados
    public function GamesDAO_Update(GameModel $model){
        

        $sql = "UPDATE Games SET gamesName = ?, Price = ?, launchDate = ? WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$model->gamesName);
        $stmt->bindValue(2,$model->gamesPrice);
        $stmt->bindValue(3,$model->gamesLaunchDt);
        $stmt->bindValue(4,$model->gamesId);

        $stmt->execute();

    }

    public function GamesDAO_FillEditForm(int $id){
        

        $sql = "SELECT * FROM Games WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$id);

        $stmt->execute();

        return $stmt->fetchObject();


    }

    public function GamesDAO_Populate(){

        $sql = "INSERT INTO Games(gamesName,Price,launchDate) VALUES (?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?),(?,?,?)" ;

        $stmt = $this->connection->prepare($sql);

        //1
        $stmt->bindValue(1,"Deltarune");
        $stmt->bindValue(2,"20.00");
        $stmt->bindValue(3,"2025-06-05");
        //2
        $stmt->bindValue(4,"Undertale");
        $stmt->bindValue(5,"19.99");
        $stmt->bindValue(6,"2015-9-15");
        //3
        $stmt->bindValue(7,"Red Dead Redemption II");
        $stmt->bindValue(8,"299.90");
        $stmt->bindValue(9,"2019-12-5");
        //4
        $stmt->bindValue(10,"Disco Elysium");
        $stmt->bindValue(11,"75.49");
        $stmt->bindValue(12,"2019-10-15");
        //5
        $stmt->bindValue(13,"Lorelei and The Laser Eyes");
        $stmt->bindValue(14,"67.99");
        $stmt->bindValue(15,"2024-5-16");
        //6
        $stmt->bindValue(16,"Sayonara Wild Hearts");
        $stmt->bindValue(17,"38.49");
        $stmt->bindValue(18,"2019-12-12");
        //7
        $stmt->bindValue(19,"Celeste");
        $stmt->bindValue(20,"59.99");
        $stmt->bindValue(21,"2018-01-25");
        //8
        $stmt->bindValue(22,"Enigma do Medo");
        $stmt->bindValue(23,"65.00");
        $stmt->bindValue(24,"2024-11-28");
        //9
        $stmt->bindValue(25,"Portal");
        $stmt->bindValue(26,"65.00");
        $stmt->bindValue(27,"2007-10-11");
        //10
        $stmt->bindValue(28,"Portal 2");
        $stmt->bindValue(29,"65.00");
        $stmt->bindValue(30,"2011-04-19");
        //11
        $stmt->bindValue(31,"SIGNALIS");
        $stmt->bindValue(32,"59.99");
        $stmt->bindValue(33,"2022-10-27");
        //12
        $stmt->bindValue(34,"Cat Petterz");
        $stmt->bindValue(35,"19.99");
        $stmt->bindValue(36,"2011-05-17");
        //13
        $stmt->bindValue(37,"Cat Petterz 2");
        $stmt->bindValue(38,"19.99");
        $stmt->bindValue(39,"2013-03-13");
        //14
        $stmt->bindValue(40,"Dragon Blazers");
        $stmt->bindValue(41,"19.99");
        $stmt->bindValue(42,"2013-03-12");
        //15
        $stmt->bindValue(43,"Dragon Blazers 2");
        $stmt->bindValue(44,"19.99");
        $stmt->bindValue(45,"2015-03-13");
        //16
        $stmt->bindValue(46,"Dragon Blazers 3");
        $stmt->bindValue(47,"19.99");
        $stmt->bindValue(48,"2016-03-13");
        
        $stmt->execute();

    }



}





?>