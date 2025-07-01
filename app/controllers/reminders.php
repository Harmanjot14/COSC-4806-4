<?php

class Reminders extends Controller {

    public function index() {		
      $reminder = $this->model('Reminder');
      $reminders_list = $reminder->get_all_reminders();
      $this->view('reminders/index', ['reminders' => $reminders_list]);
      die;
    }

    public function create(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_id = $_SESSION['user_id'] ?? null;
        $subject = $_POST['subject'] ?? null;;
        
        if($user_id && $subject){
          $reminder = $this->model('Reminder');
          $reminder->create_reminder($user_id, $subject);
          $_SESSION['success'] = "Reminder created successfully";
          header('Location: /reminders');
          exit;
        }
        else{
          $_SESSION['error'] = "Missing subject";
          header('Location: /reminders/create');
          exit;
        }
      }
      else{
        $this->view('reminders/create');
      }
    }

}