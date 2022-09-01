<?php

/*
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['name'])) {
        $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      
    if(isset($_POST['message'])) {
        $visitor_message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
    
    $subject = "Portfolio Contact Page";
    $recipient = "yookowgaisie922@gmail.com"

    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $subject, $email_body, $headers)) {
        echo "<p>Thank you for contacting me, $visitor_name. You will get a reply very soon.</p>";
    } else {
        echo '<p>I am sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
*/

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Message from portfolio contact page";
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "yookowgaisie922@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html>
    <head><title>Yokow Gaisie - Thank You</title>
        <meta charset="UTF-8">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       
        
            <script>
                $(document).ready(function(){
                    $('.contact;').fadeIn(1300);
                });
            </script>


    </head>

    <body>
       
        <div class="browser-mockup">
            <!-- <pre><code class="hljs css bash">code looking text -->
                <div class="left">
                    <div class="profile">
                        <img src="imgs/profileImg.jpg" class="profileImage">
                        <h2>Yokow Gaisie</h2>
                        <p><span class="colorText">SOFTWARE ENGINEER | UI/UX | GRAPHIC DESIGNER</span> 
                            IN OHIO</p>
                    </div>
                    <div class="navigation">
                        <nav>
                            <ul>
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="about.html">ABOUT</a></li>
                                <li><a href="education.html">EDUCATION & SKILLS</a></li>
                                <li><a href="experience.html">EXPERIENCE</a></li>
                                <li><a href="projects.html">PROJECTS</a></li>
                                <li><a href="gallery.html">DESIGN GALLERY</a></li>
                                <li class="activeTab"><a href="contact.php">CONTACT</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="footer">
                        <p>&copy; Copyright 2022 All rights reserved | This portfolio is created
                            with native HTML, CSS, and Javascript by <br><span style="color: black;">Yokow Gaisie<span></p>
                    </div>
                    
                </div>
                
                <div class="right formSent">
                    
                    
                    <h2>Thank you for contacting me. I will send you a reply shortly.</h2>
                    <p class="back">Go back to the <a href="index.html">homepage</a></p>
                   
                </div>
            <!-- </code></pre> -->
        </div>

        
    </body>
</html>

'

?>

<!DOCTYPE html>
<html>
    <head><title>Yokow Gaisie - Thank You</title>
        <meta charset="UTF-8">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       
        
            <script>
                $(document).ready(function(){
                    $('.contact').fadeIn(1300);
                });
            </script>


    </head>

    <body>
       
        <div class="browser-mockup">
            <!-- <pre><code class="hljs css bash">code looking text -->
                <div class="left">
                    <div class="profile">
                        <img src="imgs/profileImg.jpg" class="profileImage">
                        <h2>Yokow Gaisie</h2>
                        <p><span class="colorText">SOFTWARE ENGINEER | UI/UX | GRAPHIC DESIGNER</span> 
                            IN OHIO</p>
                    </div>
                    <div class="navigation">
                        <nav>
                            <ul>
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="about.html">ABOUT</a></li>
                                <li><a href="education.html">EDUCATION & SKILLS</a></li>
                                <li><a href="experience.html">EXPERIENCE</a></li>
                                <li><a href="projects.html">PROJECTS</a></li>
                                <li><a href="gallery.html">DESIGN GALLERY</a></li>
                                <li class="activeTab"><a href="contact.php">CONTACT</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="footer">
                        <p>&copy; Copyright 2022 All rights reserved | This portfolio is created
                            with native HTML, CSS, and Javascript by <br><span style="color: black;">Yokow Gaisie<span></p>
                    </div>
                    
                </div>
                
                <div class="right formSent">
                    
                    <h2>Thank you for contacting me. I will send you a reply shortly.</h2>
                    <p class="back">Go back to the <a href="index.html">homepage</a></p>
                   
                </div>
            <!-- </code></pre> -->
        </div>

        
    </body>
</html>