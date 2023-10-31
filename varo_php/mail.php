<?php
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
    
    // 메일 헤더 생성
    $headers = "From: whyrano0525@gmail.com \r\n";
    $headers .= "Reply-To: whyrano0525@gmail.com \r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // 메일 전송 함수
    if(mail($to, $subject, $message, $headers)) {
        echo "메시지가 성공적으로 전송되었습니다.";
    } else {
        echo "메시지 전송에 실패했습니다.";
    }
} else {
    // POST 방식으로 접근하지 않은 경우
    echo "잘못된 접근입니다.";
}
?>
