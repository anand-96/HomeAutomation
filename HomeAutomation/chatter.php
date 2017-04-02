<?php
$username ='bugsgsits@gmail.com';
$to  = $username; // note the comma
    // subject
    $subject = 'Your Verification mail.';
    // message
    $message = '<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <title>Verification Mail for Bug Microblog</title>
    </head>
    <body>
    <div style="width: 640px;">
      <div align="left">
        <a href="http://bugblog.esy.es"><img src="http://bugblog.esy.es/images/buglogo.jpg" height="50" width="100" alt="simply social Bug"></a>
      </div>
      <h1>Welcome '.$username.',</h1>
      <p>Click the link below to verify your account</p>
      <a href="http://bugblog.esy.es/verify_mail.php?c=asdfsadfsd&v='.base64_encode($username).'" target="blank">Verify Id</a>
    </div>
    </body>
    </html>
    ';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= "User, ".$username."\r\n";
    $headers .= "From: Bug Team <bugnottoreply@gmail.com>". "\r\n";


    if (!mail($to, $subject, $message, $headers)) {
        echo "alert('Email Not Sent!')";// . $mail->ErrorInfo;
    } else {
        echo "alert('Registration Done! Verification Email sent Please Verify ')";
    }