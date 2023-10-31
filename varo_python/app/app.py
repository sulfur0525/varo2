from flask import Flask, render_template, request, redirect, url_for
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/send_email', methods=['POST'])
def send_email():
    brand_name = request.form.get('brand_name')
    name = request.form.get('name')
    contact = request.form.get('contact')
    email = request.form.get('email')
    content = request.form.get('content')
    
    # HTML 메일 본문 구성
    html = f"""
    <html>
        <body>
            <h1>새로운 문의가 도착했습니다.</h1>
            <p><strong>브랜드(서비스)명:</strong> {brand_name}</p>
            <p><strong>성함:</strong> {name}</p>
            <p><strong>연락처:</strong> {contact}</p>
            <p><strong>이메일:</strong> {email}</p>
            <p><strong>내용(선택사항):</strong></p>
            <div>{content}</div>
        </body>
    </html>
    """
    
    # MIME 메시지 생성
    msg = MIMEMultipart('alternative')
    msg['Subject'] = brand_name+'로부터 새로운 문의가 도착했습니다.'
    msg['From'] = 'varomail00@gmail.com' #보내는 메일 주소
    msg['To'] = 'vorsche@varosolution.co.kr' #받는 메일 주소
    
    # MIMEText 객체 추가 (HTML 버전)
    msg.attach(MIMEText(html, 'html'))

    # SMTP 서버 연결
    server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
    # server.starttls()
    server.login('varomail00@gmail.com', 'empbmirseneexlwh') #보내는 메일 주소 , 보내는 메일 앱 비밀번호
        # !주의! 계정의 비밀번호를 변경하면 앱 비밀번호가 사라집니다. 재발급하여 넣어주세요.
        # 계정 정보 
            # ID : varomail00@gmail.com
            # PW : 1q2w3e4r5t@
        # 백업 코드 저장
            # 1. 3391 8159         6. 2894 8096
            # 2. 7154 1963         7. 3302 9182
            # 3. 7483 0953         8. 5941 9026
            # 4. 9912 3606         9. 7467 9283
            # 5. 3828 4046        10. 4967 2936          
           
            # * 각 백업 코드는 한 번만 사용할 수 있습니다.
            # * 더 필요하신가요? https://g.co/2sv 페이지를 방문하세요.
            # * 코드 생성 날짜: 2023. 10. 31.
        
    # 이메일 전송
    server.sendmail('varomail00@gmail.com', 'fodlsl62@gmail.com', msg.as_string())
    server.quit()
    
    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)
