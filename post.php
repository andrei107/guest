
<?php

class Post {
    private $connection;
    private $table_name = 'guests';
  
    public $name;
    public $message;
    public $date;

    public function __construct($db) {
        $this->connection = $db;
    }

    public function createNewPost(){
        $date = date('Y-m-d H:i:s');
        $query = "INSERT INTO " . $this->table_name . " SET name = :name, message = :message, date = :date";
        $stmt = $this->connection->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->message = htmlspecialchars(strip_tags($this->message));
 
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":date", $date);

        if($stmt->execute()) {
            echo json_encode(array(
                "message" => "Запись добавлена",
                "status" => "true"
            ));
            return true;
        }
         
        return false; 
    }

    public function getAllPlayers(){
        $query = "SELECT * FROM " . $this->table_name;
        $data = array();
        try {
            $result = $this->connection->query($query);
            foreach($result as $key=>$row){
                array_push($data, $row);
            }
        }
        catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }

        echo json_encode(array(
            "data" => $data
        ));
    }


    
}