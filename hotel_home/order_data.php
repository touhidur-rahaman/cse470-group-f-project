<?php

    $success1 = -1;

    if(isset($_POST['email1'])) {
         
        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "hello@themestreet.net";
        $email_subject = "Order from Preview of Hotel template";
         
        
        $selectRoom = $_POST['selectRoom']; // required
        $check_in = $_POST['check_in']; // required
        $check_out = $_POST['check_out']; // required
        $adults = $_POST['adults']; // required
        $children = $_POST['children']; // required
        $name1 = $_POST['name1']; // required
        $email1 = $_POST['email1']; // required
        $comments = $_POST['comments']; // not required
         
        $email_message = "Order details from Hotel template \n\n";
         
        function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }
         
        $email_message .= "Selected room: ".clean_string($selectRoom)."\n";
        $email_message .= "Check-in date: ".clean_string($check_in)."\n";
        $email_message .= "Check-out date: ".clean_string($check_out)."\n";
        $email_message .= "Adults: ".clean_string($adults)."\n";
        $email_message .= "Children: ".clean_string($children)."\n";
        $email_message .= "Name: ".clean_string($name1)."\n";
        $email_message .= "Email: ".clean_string($email1)."\n";
        $email_message .= "Details: ".clean_string($comments)."\n";
         
         
        // create email headers
        $headers1 = 'From: '.$email1."\r\n".
        'Reply-To: '.$email1."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers1);

        $success1 = true; 

    }

?>
 

  <?php
    include 'index.html';
  ?>


