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

    /*function for update the reminder*/
    public function update_reminder($reminder_id){
        $db = db_connect();
       
    }
    /*function for create the reminder*/
    public function create_reminder($reminder_id){
        $db = db_connect();

    }
    /*function for delete the reminder*/
    public function delete_reminder($reminder_id){
        $db = db_connect();
    }

    /*function for completed reminder*/
    public function completed_reminder($reminder_id){
        $db = db_connect();
    }
  
  
  
}


?>