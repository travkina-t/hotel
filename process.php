<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "travkina-t.v@yandex.ru";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . "From:" . $email);
    
    header('Location: http://127.0.0.1:5500//success.html');
  }