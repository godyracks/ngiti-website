<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// If the form is submitted, process the contact form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Check if any of the fields are empty
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'All fields are required.';
    } else {
        // Sanitize the input
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $message = filter_var($message, FILTER_SANITIZE_STRING);

        // Instantiate PHPMailer
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.ngiti.xyz';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'hello@ngiti.xyz';
            $mail->Password   = '$@ngitiagwata';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('geoff.ngitigraphics22@gmail.com', 'NGITIFILMS');
            //$mail->addAddress('godfreymatagaro@gmail.com', 'Godfrey'); // ensure to change this code

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = 'Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message;

            $mail->send();
            $success = 'Your message has been sent successfully.';
        } catch (Exception $e) {
            $error = 'An error occurred while sending the message: ' . $mail->ErrorInfo;
        }
    }
}


?>


<?php include 'includes/header.php'; ?>

<section class="showcase-area" id="showcase">
    <div class="showcase-container">
        <h1 class="main-title" id="home">CONTACT US</h1>
        <p>Quick Replies</p>
        <!-- <a href="index.php" class="btn btn-primary">Back Home</a> -->
    </div>
</section>

<section id="contact">
    <div class="contact-container container">
        <div class="contact-img">
            <img src="images/contact.png" alt="" />
        </div>

        <div class="form-container">
            <h2>Contact Us</h2>
            <?php if (isset($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php } ?>

            <?php if (isset($success)) { ?>
                <p style="color: green;"><?php echo $success; ?></p>
            <?php } ?>

            <form method="post" action="">
                <input type="text" placeholder="Your Name" name="name" required>
                <input type="email" placeholder="E-Mail" name="email" required>
                <textarea cols="30" rows="6" placeholder="Type Your Message" name="message" required></textarea>
                <button type="submit" class="btn btn-primary">Submit<i class="fa fa-paper-plane"></i> </button>

            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>




