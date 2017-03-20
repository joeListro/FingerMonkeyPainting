//Credentials
//Mail, password encryption

<?php

    $user_em = $_POST['user-email'];

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPAuth = true;
    $mail->Username = 'laddermonkeypaint@gmail.com';
    $mail->Password = 'PASSWORD TO BE ADDED';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->addAddress('hanah.leo@mymail.champlain.edu');
    $mail->isHTML(true);

    $mail->Subject = $_POST['email-subj'];
    $mail->Body    = $_POST['email-body'];

    if(!$mail->send()) {
        echo 'Message could not be sent.<br>';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '<div class="container">
                <div class="jumbotron">
                    <h2>Message has been sent! If requesting payment information, please expect a reply within 2 days</h2>
                    <a href="../index.php" class="btn btn-default">Go Back Home</a>
                </div></div>';
                
    }

   // header("Location: ./about.php");

?>