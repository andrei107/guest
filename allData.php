<?php

class AllData {
    private $connection;
    private $table_name = 'guests';
 
    public function __construct($db) {
        $this->connection = $db;
    }

    public function getAllData(){
       
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