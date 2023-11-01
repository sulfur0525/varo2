<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$brand = $_POST['brand'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$content = $_POST['content'];

$message = "<strong>브랜드(서비스)명:</strong> $brand<br>";
$message .= "<strong>성함:</strong> $name<br>";
$message .= "<strong>연락처:</strong> $contact<br>";
$message .= "<strong>이메일:</strong> $email<br>";
$message .= "<strong>내용:</strong> $content<br>";

$mail = new PHPMailer();

// SMTP 설정
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'varomail00@gmail.com';  // 여기에는 당신의 이메일 주소를 넣으세요
$mail->Password = 'empbmirseneexlwh';  // 여기에는 해당 이메일의 앱 패스워드를 넣으세요
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// 수신자 및 발신자 설정
$mail->setFrom('varomail00@gmail.com', '=?UTF-8?B?'.base64_encode('상담문의').'?=');
$mail->addAddress('vorsche@varosolution.co.kr', 'Recipient Name'); 

// 메일 내용 설정
$mail->isHTML(true); // HTML 형식의 메일로 설정
$mail->Subject = '=?UTF-8?B?'.base64_encode('새로운 문의가 도착했습니다.').'?=';
$mail->Body = $message;

// 메일 전송
// 메일 전송
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
// 메일 전송 성공 또는 실패와 관계없이 원하는 페이지로 리디렉션
header('Location: index.php');
exit; // 리디렉션 후 추가 코드 실행 방지

?>