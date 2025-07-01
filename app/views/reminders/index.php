<?php require_once 'app/views/templates/header.php' ?>

<div class="reminder_container">
  <div class="page-header" id="banner">
      <div class="row">
        <div>
           <h1>Reminders</h1>
           <button>Add Reminder</button>
           <br><br>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th> Reminder ID</th>
            <th> Subject</th>
            <th> Timestamp</th>
            <th> Actions</th>
          </tr>
        </thead>  
        <tbody>
          <?php
            foreach ($data['reminders'] as $reminder){
                echo "<tr>";
                echo "<td>" . $reminder['id'] . "</td>";
                echo "<td>" . $reminder['subject'] . "</td>";
                echo "<td>" . $reminder['created_at'] . "</td>";
                echo "<td>
                        <button>Update</button>
                        <button>Delete</button>
                        <button>Completed</button>
                      </td>";
            }
          ?>
        </tbody>
      </table>
      
  </div>

  <?php require_once 'app/views/templates/footer.php' ?>
    