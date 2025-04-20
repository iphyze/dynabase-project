<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Input sanitization function
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    // Sanitize all input data
    $data = sanitizeInput($data);

    $quality = $data['quality'] ?? null;
    $quality_comments = $data['quality_comments'] ?? null;
    $timeline = $data['timeline'] ?? null;
    $timeline_comments = $data['timeline_comments'] ?? null;
    $expertise = $data['expertise'] ?? null;
    $expertise_comments = $data['expertise_comments'] ?? null;
    $communication = $data['communication'] ?? null;
    $communication_comments = $data['communication_comments'] ?? null;
    $resolution = $data['resolution'] ?? null;
    $resolution_comments = $data['resolution_comments'] ?? null;
    $cleaniness = $data['cleaniness'] ?? null;
    $cleaniness_comments = $data['cleaniness_comments'] ?? null;
    $safety = $data['safety'] ?? null;
    $safety_comments = $data['safety_comments'] ?? null;
    $response = $data['response'] ?? null;
    $response_comments = $data['response_comments'] ?? null;
    $electrical_services = $data['electrical_services'] ?? null;
    $mechanical_services = $data['mechanical_services'] ?? null;
    $filled_by = $data['filled_by'] ?? null;
    $position = $data['position'] ?? null;
    $email = $data['email'] ?? null;
    $office_address = $data['office_address'] ?? null;
    $phone_number = $data['phone_number'] ?? null;
    $fax_number = $data['fax_number'] ?? null;
    $project_title = $data['project_title'] ?? null;
    $company = $data['company'] ?? null;
    $location = $data['location'] ?? null;


    // Required fields validation in an array for cleaner code
    $requiredFields = [
        'quality' => 'Please fill in the quality rating!',
        'timeline' => 'Please fill in the timeline rating!',
        'expertise' => 'Please fill in the expertise rating!',
        'communication' => 'Please fill in the communication rating!',
        'resolution' => 'Please fill in the resolution rating!',
        'cleaniness' => 'Please fill in the cleaniness rating!',
        'safety' => 'Please fill in the safety rating!',
        'response' => 'Please fill in the response rating!',
        'electrical_services' => 'Please fill in the electrical services rating!',
        'mechanical_services' => 'Please fill in the mechanical services rating!',
        'filled_by' => 'Please provide your name',
        'position' => 'Please provide your position',
        'office_address' => 'Please provide your office address',
        'phone_number' => 'Please provide your phone number',
        'fax_number' => 'Please provide your fax number',
        'project_title' => 'Please provide the project title',
        'company' => 'Please provide the company name',
        'location' => 'Please provide the project location',
        'email' => 'Please provide your email'
    ];

    foreach ($requiredFields as $field => $message) {
        if (empty($data[$field])) {
            echo json_encode(["message" => $message]);
            http_response_code(400);
            exit;
        }
    }

    // Validate email format
    $emailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
    if (!preg_match($emailRegex, $email)) {
        echo json_encode(["message" => "Please provide a valid email address."]);
        http_response_code(400); // Bad Request
        exit;
    }

    // Check if the user already exists
    // $stmtCheckEmail = mysqli_prepare($conn, "SELECT * FROM clients_survey_form WHERE email = ?");
    // mysqli_stmt_bind_param($stmtCheckEmail, 's', $email);
    // mysqli_stmt_execute($stmtCheckEmail);
    // $result = mysqli_stmt_get_result($stmtCheckEmail);
    
    // if (mysqli_num_rows($result) > 0) {
    //     echo json_encode(["message" => "This user already exists!"]);
    //     http_response_code(401); // Unauthorized
    //     exit;
    // } 


    // Insert the new user

    $stmtInsert = mysqli_prepare($conn, "INSERT INTO 
    clients_survey_form (quality, quality_comments, timeline, timeline_comments, 
    expertise, expertise_comments, communication, communication_comments, resolution, resolution_comments, cleaniness, 
    cleaniness_comments, safety, safety_comments, response, response_comments, electrical_services, mechanical_services, filled_by, position, 
    office_address, phone_number, fax_number, project_title, company, location, email)  
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmtInsert, 'sssssssssssssssssssssssssss', $quality, $quality_comments, 
    $timeline, $timeline_comments, $expertise, $expertise_comments, $communication, $communication_comments, 
    $resolution, $resolution_comments, $cleaniness, $cleaniness_comments, $safety, $safety_comments, 
    $response, $response_comments, $electrical_services, $mechanical_services, $filled_by, $position, 
    $office_address, $phone_number, $fax_number, $project_title, $company, $location, $email);

    
    if (mysqli_stmt_execute($stmtInsert)) {


        sendNotificationEmail($filled_by, $position, $company, $project_title, $email, $phone_number, $location);
        
        http_response_code(200); // Created
        echo json_encode([
            "message" => "Your entries have been submitted successfully!",
            "data" => $data
        ]);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(["message" => "Error creating user."]);
    }
    exit;
} else {
    http_response_code(404); // Not Found
    echo json_encode(["message" => "Page not found."]);
    exit;
}

// Function to send email notification
function sendNotificationEmail($filled_by, $position, $company, $project_title, $email, $phone_number, $location) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.lambertelectromec.com.ng';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@lambertelectromec.com.ng';
        $mail->Password = 'Youaregreat@1';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->CharSet = 'UTF-8';

        // Recipients
        $mail->setFrom('info@lambertelectromec.com.ng', 'Client Survey Form Notification');
        $mail->addAddress('i.nzekwue@lambertelectromec.com');
        // $mail->addAddress('info@lambertelectromec.com');
        // $mail->addBCC('i.nzekwue@lambertelectromec.com', 'Nzekwue Ifeanyi');
        // $mail->addBCC('m.sofuye@lambertelectromec.com', 'Mayowa Adediran');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Client's Survey Submission on $project_title";
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 10px; padding: 20px; background-color: #f9f9f9;'>
                <h2 style='text-align: center; color:rgb(41, 180, 118);'>New Survey Submission</h2>
                
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Filled By:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$filled_by ($position)</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Company:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$company</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Project Title:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$project_title</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Email:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'><a href='mailto:$email' style='color: #0073e6;'>$email</a></td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Phone Number:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$phone_number</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px;'><strong>Location:</strong></td>
                        <td style='padding: 10px;'>$location</td>
                    </tr>
                </table>

                <p style='text-align: center; font-size: 14px; color: #666;'>This is an automated notification. Please do not reply.</p>
            </div>
        ";
        // Send email
        $mail->send();
    } catch (Exception $e) {
        error_log("Mail Error: " . $mail->ErrorInfo);
    }
}
?>
