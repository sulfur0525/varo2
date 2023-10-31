<?php
$to = 'fodlsl62@gmail.com'; // 받는 사람의 이메일 주소
$subject = '메일 제목'; // 메일 제목
$message = '이것은 메일 본문입니다.'; // 메일 본문
$headers = 'From: whyrano0525@gmail.com' . "\r\n" . // 보내는 사람의 이메일 주소
    'Reply-To: whyrano0525@gmail.com' . "\r\n" . // 회신할 주소
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo '메일을 성공적으로 보냈습니다.';
} else {
    echo '메일을 보내는데 실패했습니다.';
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST 데이터를 받아옵니다.
    $brand = strip_tags(trim($_POST["brand"]));
    $name = strip_tags(trim($_POST["name"]));
    $contact = strip_tags(trim($_POST["contact"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $content = trim($_POST["content"]);

    // 메일을 보낼 수신자 주소
    $to = 'whyrano0525@gmail.com';
    
    // 메일 제목
    $subject = "문의: $brand";
    
    // 메일 본문 내용
    $email_content = "브랜드(서비스)명: $brand\n";
    $email_content .= "성함: $name\n";
    $email_content .= "연락처: $contact\n";
    $email_content .= "이메일: $email\n";
    $email_content .= "내용:\n$content\n";

    // 메일 헤더 정보
    $email_headers = "From: whyrano0525@gmail.com ";

    // mail 함수로 메일 보내기
    if (mail($to, $subject, $email_content, $email_headers)) {
        // 성공 메시지
        echo "메일이 성공적으로 전송되었습니다.";
    } else {
        // 실패 메시지
        echo "메일 전송에 실패했습니다.";
    }
} else {
    // 폼이 제대로 전송되지 않았을 때 메시지
    echo "폼이 제대로 전송되지 않았습니다.";
}
?>
