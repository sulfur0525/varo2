<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 폼 데이터 받기
$brand = $_POST['brand'] ?? '';
$name = $_POST['name'] ?? '';
$contact = $_POST['contact'] ?? '';
$email = $_POST['email'] ?? '';
$content = $_POST['content'] ?? '';

// 필수 필드 확인
if (empty($brand) || empty($name) || empty($contact) || empty($email)) {
    // 필수 필드 중 하나라도 비어있으면 alert 띄우고 리디렉션
    echo "<script>
            alert('모든 필수 필드를 입력해주세요.');
            window.location.href = 'index.php';
          </script>";
    exit;
}

// 이메일 유효성 검사
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // 이메일 형식이 올바르지 않으면 alert 띄우고 리디렉션
    echo "<script>
            alert('올바른 이메일 형식을 입력해주세요.');
            window.location.href = 'index.php';
          </script>";
    exit;
}

// 메일 전송 시도
try {
    
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
    $mail->setFrom('varomail00@gmail.com', '=?UTF-8?B?'.base64_encode('상담문의: '.$brand).'?=');// 실제 보내는 주소 (SMTP 인증 주소)
    $mail->addReplyTo($email, '=?UTF-8?B?'.base64_encode($brand).'?='); // 사용자가 입력한 이메일로 답장을 받기 위한 설정
    /* $mail->addAddress('vorsche@varosolution.co.kr', 'VARO');  */
    $mail->addAddress('fodlsl62@gmail.com', 'VARO');
    
    // 메일 내용 설정
    $mail->isHTML(true); // HTML 형식의 메일로 설정
    $mail->Subject = '=?UTF-8?B?'.base64_encode('새로운 문의가 도착했습니다.').'?=';
    $mail->Body = $message;
    
    // 메일 전송
    if(!$mail->send()) {
        // 메일 전송에 실패한 경우
        echo "<script>
                alert('메일을 보내는데 실패했습니다: " . addslashes($mail->ErrorInfo) . "');
                window.location.href = 'index.php';
              </script>";
    } else {
        // 메일 전송에 성공한 경우
        echo "<script>
                alert('메일이 성공적으로 전송되었습니다.');
                window.location.href = 'index.php';
              </script>";
    }
} catch (Exception $e) {
    // PHPMailer 예외 처리
    echo "<script>
            alert('메일을 보내는 중 오류가 발생했습니다: " . addslashes($e->getMessage()) . "');
            window.location.href = 'index.php';
          </script>";
}

exit;
?>