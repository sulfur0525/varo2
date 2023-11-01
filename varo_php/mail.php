<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'C:/Users/kjkim/git/varo2/varo_php/vendor/phpmailer/phpmailer/src/Exception.php';
require 'C:/Users/kjkim/git/varo2/varo_php/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'C:/Users/kjkim/git/varo2/varo_php/vendor/phpmailer/phpmailer/src/SMTP.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼 필드에서 데이터를 수집
    $brand = $_POST['brand'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    
    // 메일을 보낼 때 사용할 수신자와 제목
    $to = 'fodlsl62@gmail.com'; // 이메일을 받을 주소를 설정하세요.
    $subject = '문의: ' . $brand;
    
    // 메일 본문 생성
    $message = "브랜드명: " . $brand . "\n";
    $message .= "성함: " . $name . "\n";
    $message .= "연락처: " . $contact . "\n";
    $message .= "이메일: " . $email . "\n\n";
    $message .= "문의내용:\n" . $content . "\n";
    
    // PHPMailer 인스턴스 생성
    $mail = new PHPMailer(true);
    
    try {
        // 메일 설정
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // SMTP 서버 주소
        $mail->SMTPAuth = true;
        $mail->Username = 'your_username@example.com'; // SMTP 계정 아이디
        $mail->Password = 'your_password'; // SMTP 계정 비밀번호
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        // 메일 내용 설정
        $mail->setFrom('from@example.com', 'Your Name');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $message;
        
        // 메일 전송
        $mail->send();
        echo '메시지가 성공적으로 전송되었습니다.';
    } catch (Exception $e) {
        echo "메시지 전송에 실패했습니다. 오류: {$mail->ErrorInfo}";
    }
} else {
    // POST 방식으로 접근하지 않은 경우
    echo "잘못된 접근입니다.";
}
?>
