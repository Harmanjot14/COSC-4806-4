<?php 

class Reminder{

    public function __construct(){
      
    }
  
    public function get_all_reminders(){
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;      
    }
  
}