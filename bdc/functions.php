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
    $mail->Host       = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webmaster@bdcmuj.in';                     // SMTP username
    $mail->Password   = 'Webmaster@312';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webmaster@bdcmuj.in', 'BCDMUJ19');
    $mail->addAddress($email, $name);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('webmaster@bdcmuj.in');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Successfull';
    $mail->Body    = '<h1><b> Dear future donor, </b> <br><br> Before pursuing the motive of this mail, the BDC team would like to thank you for having gotten through the first step of donation – registration!!!!<br>We are glad and equally grateful to see you as among those few who care.  That is precisely why we are hopeful to see you actually make it to the venue (old mess), on the 14th of November between 9am and 6pm. This is one task that does not finish at merely getting listed. It is not only at one but numerous instances that the heroism in your veins be needed to flow in another’s; it is not only once but many a times that your one simple action of contributing a pint be thanked.<br>So, making the purpose of this mail clearer, we would like to invite you to really
    "Karke dekho acha lgega"
    Change lgega to lagega<br>Prepping you for it, we advise you to stay hydrated, well fed, smoke free, alcohol free, parasitic virus and bacteria free, and of course your admirable, fabulous self. Apart from this, kindly look out for further instructions and details, also available on the website, one text/ call away on given contact numbers, or almost every second person’s story on media, phew! We are spamming e.v.e.r.y.w.h.e.r.e.<br>Looking forward to see you!❤<br><br>Team BDC.;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Successfully Registered';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>