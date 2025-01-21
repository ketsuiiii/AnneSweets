<?php

use PHPMailer\PHPMailer\PHPMailer;

$msg = '';
if (array_key_exists('email', $_POST)) {
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'sweetcreations@annesweets.xyz';
    $mail->Password = 'Annecakes@123';
    $mail->setFrom('sweetcreations@annesweets.xyz', 'Anne Sweets');
    $mail->addAddress($_POST['email'], $_POST['name']);
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Anne Sweet Order Receipt';
        $mail->isHTML(true); // Enable HTML

        // Styled HTML body
        $body = '<div style="font-family: Arial, sans-serif; margin: 20px;">';
        $body .= '<h1 style="color: #333;">Order Form Details</h1>';
        $body .= '<table style="width: 100%; border-collapse: collapse;">';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Fullname:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['fullname']) . '</td></tr>';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Email:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['email']) . '</td></tr>';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Contact:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['contact']) . '</td></tr>';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Greetings:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['caption']) . '</td></tr>';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Address:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['addresss']) . '</td></tr>';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Theme:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['theme']) . '</td></tr>';
        $body .= '<tr><td style="border: 1px solid #ddd; padding: 8px;"><strong>Date to deliver:</strong></td><td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($_POST['date_to_delivered']) . '</td></tr>';
        $body .= '</table>';

        $body .= '</div>';

        $mail->Body = $body;

        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, please try again.';
    }
}
