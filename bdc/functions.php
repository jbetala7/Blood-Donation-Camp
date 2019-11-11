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
    $mail->Host = 'localhost';
    //$mail->Host       = 'relay-hosting.secureserver.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = false;                                   // Enable SMTP authentication
    //$mail->Username   = 'webmaster@bdcmuj.in';                     // SMTP username
    //$mail->Password   = 'Webmaster@312';                               // SMTP password
    $mail->SMTPAutoTLS = false;
    //$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 25;                                    // TCP port to connect to

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
    $mail->Body    = "
    <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <head>
        <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name='viewport' content='width=device-width'>
        <!--[if !mso]><!-->
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <!--<![endif]-->
        <title></title>
        <!--[if !mso]><!-->
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <!--<![endif]-->
        <style type='text/css'>
            body {
                margin: 0;
                padding: 0;
            }
    
            table,
            td,
            tr {
                vertical-align: top;
                border-collapse: collapse;
            }
    
            * {
                line-height: inherit;
            }
    
            a[x-apple-data-detectors=true] {
                color: inherit !important;
                text-decoration: none !important;
            }
        </style>
        <style type='text/css' id='media-query'>
            @media (max-width: 660px) {
    
                .block-grid,
                .col {
                    min-width: 320px !important;
                    max-width: 100% !important;
                    display: block !important;
                }
    
                .block-grid {
                    width: 100% !important;
                }
    
                .col {
                    width: 100% !important;
                }
    
                .col>div {
                    margin: 0 auto;
                }
    
                img.fullwidth,
                img.fullwidthOnMobile {
                    max-width: 100% !important;
                }
    
                .no-stack .col {
                    min-width: 0 !important;
                    display: table-cell !important;
                }
    
                .no-stack.two-up .col {
                    width: 50% !important;
                }
    
                .no-stack .col.num4 {
                    width: 33% !important;
                }
    
                .no-stack .col.num8 {
                    width: 66% !important;
                }
    
                .no-stack .col.num4 {
                    width: 33% !important;
                }
    
                .no-stack .col.num3 {
                    width: 25% !important;
                }
    
                .no-stack .col.num6 {
                    width: 50% !important;
                }
    
                .no-stack .col.num9 {
                    width: 75% !important;
                }
    
                .video-block {
                    max-width: none !important;
                }
    
                .mobile_hide {
                    min-height: 0px;
                    max-height: 0px;
                    max-width: 0px;
                    display: none;
                    overflow: hidden;
                    font-size: 0px;
                }
    
                .desktop_hide {
                    display: block !important;
                    max-height: none !important;
                }
            }
        </style>
    </head>
    
    <body class='clean-body' style='margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;'>
        <!--[if IE]><div class='ie-browser'><![endif]-->
        <table class='nl-container' style='table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;' cellpadding='0' cellspacing='0' role='presentation' width='100%' bgcolor='#FFFFFF' valign='top'>
            <tbody>
                <tr style='vertical-align: top;' valign='top'>
                    <td style='word-break: break-word; vertical-align: top;' valign='top'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color:#FFFFFF'><![endif]-->
                        <div style='background-color:transparent;'>
                            <div class='block-grid ' style='Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
                                <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:640px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                    <!--[if (mso)|(IE)]><td align='center' width='640' style='background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:15px;'><![endif]-->
                                    <div class='col num12' style='min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;'>
                                        <div style='width:100% !important;'>
                                            <!--[if (!mso)&(!IE)]><!-->
                                            <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;'>
                                                <!--<![endif]-->
                                                <div class='img-container center fixedwidth' align='center' style='padding-right: 0px;padding-left: 0px;'>
                                                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img class='center fixedwidth' align='center' border='0' src='https://d15k2d11r6t6rl.cloudfront.net/public/users/BeeFree/beefree-pqtd5tw471g/logo3.png' alt='Image' title='Image' style='text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 160px; display: block;' width='160'>
                                                    <!--[if mso]></td></tr></table><![endif]-->
                                                </div>
                                                <!--[if (!mso)&(!IE)]><!-->
                                            </div>
                                            <!--<![endif]-->
                                        </div>
                                    </div>
                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                </div>
                            </div>
                        </div>
                        <div style='background-color:transparent;'>
                            <div class='block-grid ' style='Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
                                <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:640px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                    <!--[if (mso)|(IE)]><td align='center' width='640' style='background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                    <div class='col num12' style='min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;'>
                                        <div style='width:100% !important;'>
                                            <!--[if (!mso)&(!IE)]><!-->
                                            <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                <!--<![endif]-->
                                                <div class='img-container center  autowidth ' align='center' style='padding-right: 0px;padding-left: 0px;'>
                                                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]--><img class='center  autowidth ' align='center' border='0' src='https://d15k2d11r6t6rl.cloudfront.net/public/users/BeeFree/beefree-pqtd5tw471g/bg2.jpg' alt='I'm an image' title='I'm an image' style='text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 612px; display: block;' width='612'>
                                                    <!--[if mso]></td></tr></table><![endif]-->
                                                </div>
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;' align='center' role='presentation' height='5' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='5' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 20px; padding-left: 20px; padding-top: 10px; padding-bottom: 10px; font-family: Georgia, 'Times New Roman', serif'><![endif]-->
                                                <div style='color:#A70000;font-family:'Bitter', Georgia, Times, 'Times New Roman', serif;line-height:1.2;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;'>
                                                    <div style='line-height: 1.2; font-family: 'Bitter', Georgia, Times, 'Times New Roman', serif; font-size: 12px; color: #A70000; mso-line-height-alt: 14px;'>
                                                        <p style='line-height: 1.2; text-align: center; font-size: 12px; mso-line-height-alt: 14px; margin: 0;'><span style='color: #d8a47f;'><span style='font-size: 46px;'><strong><span style='color: #a70000; font-size: 46px;'>Dear Future</span> <span style='color: #a70000; font-size: 46px;'>Donor</span></strong></span></span></p>
                                                    </div>
                                                </div>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 20px; font-family: Arial, sans-serif'><![endif]-->
                                                <div style='color:#4E5264;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px;'>
                                                    <div style='font-size: 14px; line-height: 1.5; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #4E5264; mso-line-height-alt: 21px;'>
                                                        <p style='font-size: 14px; line-height: 1.5; text-align: center; mso-line-height-alt: 21px; margin: 0;'>Before pursuing the motive of this mail, the BDC team would like to thank you for having gotten through the first step of donation.&nbsp;We are glad and equally grateful to see you as among those few who care.</p>
                                                    </div>
                                                </div>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;' align='center' role='presentation' height='30' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='30' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Georgia, 'Times New Roman', serif'><![endif]-->
                                                <div style='color:#D8A47F;font-family:'Bitter', Georgia, Times, 'Times New Roman', serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
                                                    <div style='font-family: 'Bitter', Georgia, Times, 'Times New Roman', serif; line-height: 1.2; font-size: 12px; color: #D8A47F; mso-line-height-alt: 14px;'>
                                                        <p style='line-height: 1.2; text-align: center; font-size: 20px; mso-line-height-alt: 24px; margin: 0;'><span style='font-size: 20px; color: #a70000;'><strong>Venue- Old Mess 14th November (9am - 4pm)</strong></span></p>
                                                    </div>
                                                </div>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 20px; font-family: Arial, sans-serif'><![endif]-->
                                                <div style='color:#4E5264;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px;'>
                                                    <div style='font-size: 14px; line-height: 1.5; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #4E5264; mso-line-height-alt: 21px;'>
                                                        <p style='font-size: 14px; line-height: 1.5; text-align: center; mso-line-height-alt: 21px; margin: 0;'>We advise you to stay hydrated, well fed, smoke free, alcohol free, parasitic virus and bacteria free, and of course your admirable, fabulous self. Apart from this, kindly look out for further instructions and details, also available on the website, one text/ call away on given contact numbers, or almost every second person’s story on media, phew!</p>
                                                    </div>
                                                </div>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;' align='center' role='presentation' height='10' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='10' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--[if (!mso)&(!IE)]><!-->
                                            </div>
                                            <!--<![endif]-->
                                        </div>
                                    </div>
                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                </div>
                            </div>
                        </div>
                        <div style='background-color:#E7ECEF;'>
                            <div class='block-grid ' style='Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;'>
                                <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#E7ECEF;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:640px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                    <!--[if (mso)|(IE)]><td align='center' width='640' style='background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                    <div class='col num12' style='min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;'>
                                        <div style='width:100% !important;'>
                                            <!--[if (!mso)&(!IE)]><!-->
                                            <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                <!--<![endif]-->
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;' align='center' role='presentation' height='30' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='30' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 20px; padding-left: 20px; padding-top: 10px; padding-bottom: 10px; font-family: Georgia, 'Times New Roman', serif'><![endif]-->
                                                <div style='color:#555555;font-family:'Bitter', Georgia, Times, 'Times New Roman', serif;line-height:1.2;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;'>
                                                    <div style='line-height: 1.2; font-family: 'Bitter', Georgia, Times, 'Times New Roman', serif; font-size: 12px; color: #555555; mso-line-height-alt: 14px;'>
                                                        <p style='line-height: 1.2; text-align: center; font-size: 12px; mso-line-height-alt: 14px; margin: 0;'><span style='color: #a70000; font-size: 12px;'><span style='color: #d8a47f;'><span style='font-size: 42px;'><strong><span style='font-size: 42px; color: #a70000;'>Looking</span> <span style='color: #a70000; font-size: 42px;'>Forward</span> <span style='color: #a70000; font-size: 42px;'>To</span> <span style='color: #a70000; font-size: 42px;'>See</span> <span style='color: #a70000; font-size: 42px;'>You</span></strong></span></span></span></p>
                                                    </div>
                                                </div>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                                <div class='button-container' align='center' style='padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
                                                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'><tr><td style='padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px' align='center'><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='' style='height:48pt; width:126pt; v-text-anchor:middle;' arcsize='94%' stroke='false' fillcolor='#a70000'><w:anchorlock/><v:textbox inset='0,0,0,0'><center style='color:#ffffff; font-family:Georgia, 'Times New Roman', serif; font-size:16px'><![endif]-->
                                                    <div style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#a70000;border-radius:60px;-webkit-border-radius:60px;-moz-border-radius:60px;width:auto; width:auto;;border-top:1px solid #a70000;border-right:1px solid #a70000;border-bottom:1px solid #a70000;border-left:1px solid #a70000;padding-top:16px;padding-bottom:16px;font-family:'Bitter', Georgia, Times, 'Times New Roman', serif;text-align:center;mso-border-alt:none;word-break:keep-all;'><span style='padding-left:42px;padding-right:42px;font-size:16px;display:inline-block;'>
                                                            <span style='font-size: 16px; line-height: 2; mso-line-height-alt: 32px;'><strong>Team BDC</strong></span>
                                                        </span></div>
                                                    <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
                                                </div>
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 35px; width: 100%;' align='center' role='presentation' height='35' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='35' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--[if (!mso)&(!IE)]><!-->
                                            </div>
                                            <!--<![endif]-->
                                        </div>
                                    </div>
                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                </div>
                            </div>
                        </div>
                        <div style='background-color:#450000;'>
                            <div class='block-grid ' style='Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #450000;'>
                                <div style='border-collapse: collapse;display: table;width: 100%;background-color:#450000;'>
                                    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#450000;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:640px'><tr class='layout-full-width' style='background-color:#450000'><![endif]-->
                                    <!--[if (mso)|(IE)]><td align='center' width='640' style='background-color:#450000;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                    <div class='col num12' style='min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;'>
                                        <div style='width:100% !important;'>
                                            <!--[if (!mso)&(!IE)]><!-->
                                            <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                <!--<![endif]-->
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 15px; width: 100%;' align='center' role='presentation' height='15' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='15' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class='img-container center fixedwidth' align='center' style='padding-right: 10px;padding-left: 10px;'>
                                                    <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 10px;padding-left: 10px;' align='center'><![endif]-->
                                                    <div style='font-size:1px;line-height:10px'>&nbsp;</div><img class='center fixedwidth' align='center' border='0' src='https://d15k2d11r6t6rl.cloudfront.net/public/users/BeeFree/beefree-pqtd5tw471g/logo4.png' alt='I'm an image' title='I'm an image' style='text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 160px; display: block;' width='160'>
                                                    <div style='font-size:1px;line-height:5px'>&nbsp;</div>
                                                    <!--[if mso]></td></tr></table><![endif]-->
                                                </div>
                                                <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 15px; font-family: Arial, sans-serif'><![endif]-->
                                                <div style='color:#4E5264;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:15px;padding-left:10px;'>
                                                    <div style='font-size: 14px; line-height: 1.5; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #4E5264; mso-line-height-alt: 21px;'>
                                                        <p style='font-size: 16px; line-height: 1.5; text-align: center; mso-line-height-alt: 24px; margin: 0;'><span style='font-size: 16px; color: #b9d6d6;'>© BDCMUJ Copyright 2019</span></p>
                                                    </div>
                                                </div>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                                <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                    <tbody>
                                                        <tr style='vertical-align: top;' valign='top'>
                                                            <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px;' valign='top'>
                                                                <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;' align='center' role='presentation' height='10' valign='top'>
                                                                    <tbody>
                                                                        <tr style='vertical-align: top;' valign='top'>
                                                                            <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='10' valign='top'><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--[if (!mso)&(!IE)]><!-->
                                            </div>
                                            <!--<![endif]-->
                                        </div>
                                    </div>
                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                </div>
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                    </td>
                </tr>
            </tbody>
        </table>
        <!--[if (IE)]></div><![endif]-->
    </body>
    
    </html>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Successfully Registered';
    // success();
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // error();
}
}
?>