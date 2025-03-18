<?php
// Get raw POST data
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $to = "webtrack@ekaggata.com";
    $subject = "New Cookie Consent Data";
    $message = "
        <h3>User Consent Data</h3>
        <p><strong>Consent:</strong> {$data['consent']}</p>
        <p><strong>IP Address:</strong> {$data['ip']}</p>
        <p><strong>Location:</strong> {$data['location']}</p>
        <p><strong>Time:</strong> {$data['time']}</p>
        <p><strong>Operating System:</strong> {$data['os']}</p>
        <p><strong>Browser:</strong> {$data['browser']}</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@yourdomain.com" . "\r\n";

    mail($to, $subject, $message, $headers);
}
?>
