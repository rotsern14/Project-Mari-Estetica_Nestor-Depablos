<?php


  //DECLARANDO LAS VARIABLE QUE TOMA INFORMACION DEL FORM

  $to      = 'nestordepablos14@gmail.com';
  $subject = $_POST['subject'];
  $message = $_POST['message']. "\r\n" .
    'Enviado el ' . date('d/m/Y', time()) . "\r\n" .
    $_POST['name'] . " " . $_POST['apellido'] . "\r\n" .
    $_POST['telefono'];
  $headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'Content-type: text/html; charset=UTF-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);


  // REDIRECCIONANDO AL HEADER EL FORM

  header("Location: https://maribeautyclinic.000webhostapp.com/pagina-interna.html");


?>
