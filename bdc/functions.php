<script src='https://cdn.jsdelivr.net/npm/sweetalert2@8'></script>
<script>
    function success()
        {
            Swal.fire({
  			title: 'Registration Successfull!',
              text: 'Welcome To BCDMUJ19',
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

function sendmail($id, $nm)
{
    $email = $id;
    $name = $nm;
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
    $mail->Host       = 'smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webmaster@oneiros.co.in';                     // SMTP username
    $mail->Password   = 'Webmaster@312';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webmaster@oneiros.co.in', 'BCDMUJ19');
    $mail->addAddress($email, $name);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('webmaster@oneiros.co.in');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Successfull';
    $mail->Body    = '<h1><b> Greetings, </b> <br><br> Thanks for signing up for BDCMUJ, 2019.';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Successfully Registered';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>