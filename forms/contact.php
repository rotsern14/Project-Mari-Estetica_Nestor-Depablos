<?php


  //DECLARANDO LAS VARIABLE QUE TOMA INFORMACION DEL FORM

  $to      = 'nestordepablos14@gmail.com';
  $subject = $_POST['subject'];
  $message = $_POST['message']. " \r\n" .
    'Enviado el ' . date('d/m/Y', time());
  $headers = 'From: ' . $_POST['email'] . " \r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'Content-type: text/html; charset=UTF-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  // $from_name = $_POST['name'];
  // $from_email = $_POST['email'];
  // $subject = $_POST['subject'];



  //CONSTRUYENDO EL CUERPO DEL MENSAJE y HEADER



  // $headers = 'Desde: ' . $from_email . " \r\n";
  // $headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  // $headers .= "Mime-Version: 1.0" . "\r\n";
  // $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

  // $add_message = "Este mensaje fue enviado por" . $from_name . ",\r\n";
  // $add_message .= "Su e-email es: " . $from_email . "\r\n";
  // $add_message .= "Mensaje: " . $_POST['message'] . "\r\n";
  // $add_message .= "Enviado el " . date('d/m/Y', time());



  //APLICANDO LA FUNCION MAIL
  //OBS> Su hosting debería permitirle enviar correos electrónicos usando la función mail() de PHP



  // $para = "nestordepablos14@gmail.com";

  // mail(
  //   string $para, 
  //   string $subject,
  //   string utf8_decode($add_message),
  //   array|string $headers
  // );



  // REDIRECCIONANDO AL HEADER EL FORM

  header("Location: servicios-details.html");



  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
