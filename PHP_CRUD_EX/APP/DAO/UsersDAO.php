    <?php


class UsersDAO{

    private $connection;

    public function __construct(){
        
        $dsn = "mysql:host=localhost:3306;dbname=db_games";

        $this->connection = new PDO($dsn, 'root','root');

    }

    public function UsersDAO_Insert(UserModel $model){

        $sql = "INSERT INTO Users(usersName,usersEmail) VALUES (?,?)" ;

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $model->usersName);
        $stmt->bindValue(2, $model->usersEmail);

        $stmt->execute();


    }


    public function UsersDAO_Select(){

        $sql = "SELECT * FROM Users";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function UsersDAO_SelectForFav(){

        $sql = "SELECT id,usersName FROM Users";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function UsersDAO_Delete(int $id){
        
        //adicionar ao uma funcionalidade que apague todos os registros da tabela favorites
        //onde o id for igual ao usuario
        $sql = "DELETE FROM Favorites WHERE idUsers = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$id);
        $stmt->execute();

        $sql = "DELETE FROM Users WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$id);
        $stmt->execute();



    }


    //update proper, altera a data no banco de dados
    public function UsersDAO_Update(UserModel $model){
        

        $sql = "UPDATE Users SET usersName = ?, usersEmail = ? WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$model->usersName);
        $stmt->bindValue(2,$model->usersEmail);
        $stmt->bindValue(3,$model->usersId);

        $stmt->execute();

    }

    public function UsersDAO_FillEditForm(int $id){
        

        $sql = "SELECT * FROM Users WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,$id);

        $stmt->execute();

        return $stmt->fetchObject();


    }

    public function UsersDAO_Populate(){

        $sql = "INSERT INTO Users(usersName,usersEmail) VALUES (?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?),(?,?)" ;

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1,"elayh");
        $stmt->bindValue(2,"greenyuridasilva@garagemail.com");

        $stmt->bindValue(3,"marco");
        $stmt->bindValue(4,"marcianoverdin@garagemail.com");

        $stmt->bindValue(5,"loga");
        $stmt->bindValue(6,"logabólos@garagemail.com");

        $stmt->bindValue(7,"kai");
        $stmt->bindValue(8,"oimaemedaumpedaçodessebólos@garagemail.com");

        $stmt->bindValue(9,"krat");
        $stmt->bindValue(10,"kratrobmras@garagemail.com");

        $stmt->bindValue(11,"meg");
        $stmt->bindValue(12,"megalovania@garagemail.com");

        $stmt->bindValue(13,"emano");
        $stmt->bindValue(14,"emanovegetariano@garagemail.com");

        $stmt->bindValue(15,"holidaygirl1225");
        $stmt->bindValue(16,"christmasjustaweekaway@homemail.com");

        $stmt->bindValue(17,"smartgenius55534998222");
        $stmt->bindValue(18,"smartestguyever@homemail.com");

        $stmt->bindValue(19,"sports");
        $stmt->bindValue(20,"iwillgrowthebeard@homemail.com");

        $stmt->bindValue(21,"■■■■■■");
        $stmt->bindValue(22,"remembersondyingisgay@depthsmail.com");

        $stmt->bindValue(23,"lazybones8287");
        $stmt->bindValue(24,"yesfather@snowdinmail.com");

        $stmt->bindValue(25,"CoolSkeleton95");
        $stmt->bindValue(26,"thecoollestbone@snowdinmail.com");

        $stmt->bindValue(27,"StrongFish91");
        $stmt->bindValue(28,"youknowwhatthatmeans@homemail.com");
        
        $stmt->bindValue(29,"Napstablook22");
        $stmt->bindValue(30,"ghosting@homemail.com");

        $stmt->execute();


    }




}





?>