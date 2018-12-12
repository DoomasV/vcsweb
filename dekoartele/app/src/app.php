<?php

  $vardas = mysqli_real_escape_string($_POST['vardas']);
  $email = mysqli_real_escape_string($_POST['email']);
  $message = mysqli_real_escape_string($_POST['message']);
  if(isset($_POST['submit'])){
    if(!empty($vardas) && !empty($email) && !empty($message)){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $from = "$email";
        $to = "vaisvis@gmail.com";
        $subject = "Nauja zinute";
        $autorius = 'Nuo: '.$vardas.', '.$email;
        $zinute = htmlspecialchars($message);
        mail($to, $subject, $autorius, $zinute, $from);
        //redirect to another page
      }
    }
  include('db.php');
  }

  ?>
