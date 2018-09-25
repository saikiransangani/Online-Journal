<section class="contact py-lg-5 py-md-5 py-3" id="contact">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-3">
            <h4 class="sub-tittle-w3 text-uppercase text-center">Find Me</h4>
            <h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center text-white">Contact Me Now</h3>

            <div class="contact_grid_right">
                <form action="#" method="post">
                    <div class="row contact_left_grid">
                        <div class="col-md-6 con-left" data-aos="fade-up">
                            <div class="form-group">

                                <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="text" name="Subject" placeholder="Subject"
                                       required="">
                            </div>
                        </div>
                        <div class="col-md-6 con-right" data-aos="fade-up">
                            <div class="form-group">
                                <textarea id="Message" name="Message" placeholder="Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="sub-honey mx-auto mt-3">
                            <input class="form-control" name="submit" type="Submit" value="Submit"></div>
                    </div>
                </form>
            </div>
            <div class="address row mt-lg-5">

                <div class="col-md-4 address-grid" data-aos="flip-up">
                    <div class="address-info">
                        <div class="address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="address-right text-center">
                            <h6 class="my-3">Address</h6>
                            <p> via Varvariana 18, Rome, Italy

                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 address-grid" data-aos="flip-up">
                    <div class="address-info">
                        <div class="address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="address-right text-center">
                            <h6 class="my-3">Email</h6>
                            <p>Email :
                                <a href="mailto:example@email.com"> kiran11.sai@gmail.com</a>

                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 address-grid" data-aos="flip-up">
                    <div class="address-info">
                        <div class="address-left text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="address-right text-center">
                            <h6 class="my-3">Phone</h6>
                            <p>+39 351 123 0435</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

if (isset($_POST['Name'])) {
    $name = $_POST['Name'];
}

if (isset($_POST['Email'])) {
    $email = $_POST['Email'];
}

if (isset($_POST['Subject'])) {
    $subject = $_POST['Subject'];
}

if (isset($_POST["Message"])) {
    $msg = $_POST["Message"];
}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    if (isset($_POST["submit"])) {
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mail.yahoo.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kiran11_sai@yahoo.co.in';                 // SMTP username
        $mail->Password = 'sangani11051992';                           // SMTP password
        $mail->SMTPSecure = 'SSL/TLS';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('kiran11_sai@yahoo.co.in', $name);
        $mail->addAddress('kiran11.sai@gmail.com', 'Sai Kiran');     // Add a recipient
        #$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        //Attachments
        /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
         $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $msg . ' <br>from ' . $email;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        # echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
