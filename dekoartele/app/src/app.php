<?php

  $vardas = mysqli_real_escape_string($_POST['vardas']);
  $email = mysqli_real_escape_string($_POST['email']);
  $message = mysqli_real_escape_string($_POST['message']);

  if(!isset($_POST['check']) && isset($_POST['submit'])){
    echo "<script>alert('Žinutė neišsiųsta. Pažymėkite varnelę, jog sutinkate su sąlyga.');</script>";
  } elseif (isset($_POST['check']) && isset($_POST['submit'])){
      if(!empty($vardas) && !empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          $from = "$email";
          $to = "vaisvis@gmail.com";
          $subject = "Nauja zinute";
          $autorius = 'Nuo: '.$vardas.', '.$email;
          $zinute = htmlspecialchars($message);
          mail($to, $subject, $autorius, $zinute, $from);
        };
      };
      echo "<script>alert('Žinutė išsiųsta. Netrukus susisieksime.');</script>";
      include('db.php');
    }
  ?>
