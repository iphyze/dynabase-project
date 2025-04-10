<?php



header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");


use PHPMailer\PHPMailer\PHPMailer;  // Phpmail package already on server

use PHPMailer\PHPMailer\Exception; // Phpmail package already on server


require 'PHPMailer/src/Exception.php'; // Phpmail package already on server

require 'PHPMailer/src/PHPMailer.php'; // Phpmail package already on server

require 'PHPMailer/src/SMTP.php'; // Phpmail package already on server



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $organization = $_POST['organization'];
    $position = $_POST['position'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.lambertelectromec.com.ng'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'info@lambertelectromec.com.ng'; // SMTP username
        $mail->Password = 'Youaregreat@1'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('info@lambertelectromec.com.ng', 'Lambert Electromec Limited');
        // $mail->addAddress('i.nzekwue@lambertelectromec.com', 'Info'); // Add a recipient
        $mail->addAddress('info@lambertelectromec.com', 'Info'); // Add a recipient
        $mail->addBCC('g.jacob@lambertelectromec.com', 'Glory Jacob'); // Add a CC recipient
        $mail->addBCC('i.nzekwue@lambertelectromec.com', 'Nzekwue Ifeanyi'); // Add a BCC recipient
        $mail->addBCC('s.ashafa@lambertelectromec.com', 'Ashafa Sulaimon'); // Add a BCC recipient
        $mail->addBCC('m.sofuye@lambertelectromec.com', 'Mayowa Adediran'); // Add a BCC recipient

        // Content for admin
        $mail->isHTML(true);
        $mail->Subject = 'New Registration Form Submission';
        $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html dir='ltr' lang='en'>
<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta name='x-apple-disable-message-reformatting' />
    <style>
        body {
            background-color: #fff !important;
            color: #000 !important;
        }
        .email-container {
            background-color: #fff !important;
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
            margin: 50px auto;
            max-width: 37.5em;
            border-radius: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body style='background-color:#fff !important; font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,Oxygen-Sans,Ubuntu,Cantarell,&quot;Helvetica Neue&quot;,sans-serif; margin: 0; padding: 0;'>
    <div class='email-container'>
        <div style='width: 100%; position: relative; height: 200px; overflow: hidden; border-top-left-radius: 10px; border-top-right-radius: 10px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center;'>
            <img src='https://project.lambertelectromec.com.ng/ttkmail.png' style='position: relative; width: 100%; height: 100%; object-fit: cover; box-sizing: border-box;' alt='ttk-img'/>
        </div>

        <div style='position: relative; width: 100%; padding: 20px; box-sizing: border-box;'>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; text-align: center; font-size: 32px; box-sizing: border-box; font-weight: bold; color: rgba(72, 167, 80, 1);'>
                Hi Info,
            </div>
            <div style='position: relative; width:90%; height: auto; margin: 30px auto; text-align: center; font-size: 18px; box-sizing: border-box; font-weight: 600; color: black; line-height: 36px;'>
                New Registration from TTK Event Form
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Full Name
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $fullname
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Organization
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $organization
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Position
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $position
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Phone Number
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $phoneNumber
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Email Address
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $email
            </div>
            <img src='https://project.lambertelectromec.com.ng/ttk-lambert-logo.png' alt='logo-img' style='position: relative; margin: 30px auto; margin-top: 50px; width: 180px; height: auto; display: block;' />
        </div>
        <div style='position: relative; width: 100%; height: auto; padding: 10px; box-sizing: border-box; font-size: 12px; color: rgb(179, 179, 179); text-align: center;'>
            &copy; 2024 | Lambert Electromec Limited | www.lambertelectromec.com
        </div>
    </div>
</body>
</html>";


        $mail->AltBody = "New Registration Form Submission\nFull Name: $fullname\nOrganization: $organization\nPosition: $position\nPhone Number: $phoneNumber\nEmail Address: $email";

        $mail->send();

        // Send confirmation email to user
        $mail->clearAddresses(); // Clear previous recipients
        $mail->clearBCCs(); // Clear previous recipients
        $mail->addAddress($email, $fullname); // Add the user's email address

        // Content for user
        $mail->Subject = 'Thank You for Your Registration';
        $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html dir='ltr' lang='en'>
<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta name='x-apple-disable-message-reformatting' />
    <style>
        body {
            background-color: #fff !important;
            color: #000 !important;
        }
        .email-container {
            background-color: #fff !important;
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
            margin: 50px auto;
            max-width: 37.5em;
            border-radius: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body style='background-color:#fff !important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,Oxygen-Sans,Ubuntu,Cantarell,&quot;Helvetica Neue&quot;,sans-serif; margin: 0; padding: 0;'>
    <div class='email-container'>
        <div style='width: 100%; position: relative; height: 200px; overflow: hidden; border-top-left-radius: 10px; border-top-right-radius: 10px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center;'>
            <img src='https://project.lambertelectromec.com.ng/ttkmail.png' style='position: relative; width: 100%; height: 100%; object-fit: cover; box-sizing: border-box;' alt='ttk-img'/>
        </div>

        <div style='position: relative; width: 100%; padding: 20px; box-sizing: border-box;'>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; text-align: center; font-size: 32px; box-sizing: border-box; font-weight: bold; color: rgba(72, 167, 80, 1);'>
                Hi $fullname,
            </div>
            <div style='position: relative; width:90%; height: auto; margin: 30px auto; text-align: center; font-size: 18px; box-sizing: border-box; font-weight: 600; color: black; line-height: 36px;'>
                Your registration for the event was successful and below are the details you entered.
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Full Name
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $fullname
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Organization
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $organization
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Position
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $position
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Phone Number
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $phoneNumber
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 30px auto; margin-bottom: 5px; text-align: center; font-size: 16px; box-sizing: border-box; font-weight: 600; color: rgba(72, 167, 80, 1);'>
                Email Address
            </div>
            <div style='position: relative; width:100%; height: auto; margin: 0px auto; margin-bottom: 20px; text-align: center; font-size: 14px; box-sizing: border-box; font-weight: normal; color: rgb(92, 92, 92);'>
                $email
            </div>
            <img src='https://project.lambertelectromec.com.ng/ttk-lambert-logo.png' alt='logo-img' style='position: relative; margin: 30px auto; margin-top: 50px; width: 180px; height: auto; display: block;' />
        </div>
        <div style='position: relative; width: 100%; height: auto; padding: 10px; box-sizing: border-box; font-size: 12px; color: rgb(179, 179, 179); text-align: center;'>
            &copy; 2024 | Lambert Electromec Limited | www.lambertelectromec.com
        </div>
    </div>
</body>
</html>";


        $mail->AltBody = "Thank You for Your Registration!\nDear $fullname,\nThank you for registering with us. We have received your information successfully.\nWe will get in touch with you shortly.\nBest regards,\nThe Team";

        $mail->send();
        echo json_encode(['status' => 'success']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
    }
}













?>