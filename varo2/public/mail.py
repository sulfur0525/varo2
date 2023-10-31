

from flask import Flask, request
import smtplib
from email.mime.text import MIMEText

app = Flask(__name__)

@app.route('/')
def index():
    # HTML 페이지를 렌더링합니다 (index.html 파일이 templates 폴더 내에 있어야 함)
    return render_template('index.html')

@app.route('/send_email', methods=['POST'])
def send_email():
    # 폼 데이터를 가져옵니다.
    brand = request.form['brand']
    name = request.form['name']
    contact = request.form['contact']
    email = request.form['email']
    content = request.form['content']

    # 이메일 메시지를 생성합니다.
    msg = MIMEText(content)
    msg['Subject'] = f'Inquiry from {brand}'
    msg['From'] = 'whyrano0525@gmail.com'
    msg['To'] = 'fodlsl62@gmail.com'

    # SMTP 서버에 연결하고 이메일을 전송합니다.
    try:
        smtp_server = smtplib.SMTP('smtp.gmail.com', 465)
        smtp_server.login('whyrano0525@gmail.com', 'ibowaqdjqrpexayy')
        smtp_server.send_message(msg)
        smtp_server.quit()
        return 'Email sent successfully!'
    except Exception as e:
        print(e)
        return 'Failed to send email.'

if __name__ == '__main__':
    app.run(debug=True)
