<?php
  $name = $_Post['name'];
  $visitor_email = $_POST['email'];
  $message = $_Post['message']


  $email_from = 'newmanwebdev@gmail.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

  $to = "newmanwebdev@gmail.com";

  $headers = "from: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");

 ?>
