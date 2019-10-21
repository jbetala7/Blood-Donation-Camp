<script src='https://cdn.jsdelivr.net/npm/sweetalert2@8'></script>
<script>
    function success()
        {
            Swal.fire({
  			title: 'Registration Successfull!',
              text: 'Welcome To Oneiros19',
  			type: 'success',
  			confirmButtonText: 'Okay'
			})
		}
		function error()
        {
            Swal.fire({
  			title: 'Already Registered!',
  			text: 'Do you want to continue?',
  			type: 'error',
  			confirmButtonText: 'Okay'
		    })
        }
</script>
<?php
function error()
{
    echo "<script>
        error();
        </script>";
}
function success()
{
    echo "<script>
        success();
        </script>";
}

function sendmail($e, $n)
{
    $email = $e;
    $name = $n;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'mailer/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = 4;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.classrooms.tk;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'autoreply@classrooms.tk';                     // SMTP username
    $mail->Password   = '1;Jqu?k56JG?';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('autoreply@classrooms.tk', 'Oneiros19');
    $mail->addAddress($email, $name);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('autoreply@classrooms.tk');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $logo = 'img/logo.png';
    $link = '#';
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Successfull';
    $mail->Body    = "Blood Donation Camp 2019 Welcomes You";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Successfully Registered';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>