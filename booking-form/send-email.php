<?php//----------------------Company Information---------------------$comany_name = "Tour With Susa";$website_name = "www.tourwithsusa.com";$comConNumber = "+94 7575 111 49 /  +94 9122 487 94 ";$comEmail = "info@islandwide.website";$from = "info@islandwide.website";//----------------------CAPTCHACODE---------------------session_start();$response = array();if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {    $response['status'] = 'incorrect';    $response['msg'] = 'Security Code is invalid';    echo json_encode($response);    exit();}//----------------------Visitor Information---------------------$visitor_name = $_POST['visitor_name'];$visitor_email = $_POST['visitor_email'];$visitor_phone = $_POST['visitor_phone'];$visitor_country = $_POST['visitor_country'];$visitor_tour = $_POST['visitor_tour'];$visitor_airport = $_POST['visitor_airport'];$visitor_check_in = $_POST['visitor_check_in'];$visitor_check_out = $_POST['visitor_check_out'];$visitor_adult = $_POST['visitor_adult'];$visitor_child = $_POST['visitor_child'];$subject = 'New Website Inquery Tour With Susa';$message = $_POST['message'];date_default_timezone_set('Asia/Colombo');$todayis = date("l, F j, Y, g:i a");$site_link = "https://" . $_SERVER['HTTP_HOST'];include("mail-template.php");// mandatory headers for email message, change if you need something different in your setting.$headers = "From: " . $from . "\r\n";$headers .= "Reply-To: " . $visitor_email . "\r\n";$headers .= "MIME-Version: 1.0\r\n";$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";$headers1 = "From: " . $from . "\r\n";$headers1 .= "Reply-To: " . $comEmail . "\r\n";$headers1 .= "MIME-Version: 1.0\r\n";$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";// Sending mailif (        mail($visitor_email, $subject, $visitor_message, $headers1) &&        mail($comEmail, $subject, $company_message, $headers)) {    $response['status'] = 'correct';    $response['msg'] = "Your message has been sent successfully";//"Your message has been sent successfully"    echo json_encode($response);    exit();} else {    $response['status'] = 'correct';    $response['msg'] = "Could nod be sent your message";    echo json_encode($response);    exit();} 