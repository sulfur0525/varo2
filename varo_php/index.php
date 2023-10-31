<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VARO ADMENT</title>
	<!-- 반응형 웹 -->
	<link href="css/pc.css" media="screen and (min-width:1024px)" rel="stylesheet">
	<link href="css/tablet.css" media="screen and (min-width:768px) and (max-width:1023px)" rel="stylesheet">
	<link href="css/smartphone.css" media=" screen and (max-width:767px)" rel="stylesheet">
	<!-- PyScript 
	<link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />-->
	
	<!-- 
		<style type="text/css">
			/* 테블릿 가로,PC (해상도 1024px)*/ 
			@media all and (min-width:1024px) {} 
			
			/*  테블릿 세로 (해상도 768px ~ 1023px)*/ 
			@media all and (min-width:768px) and (max-width:1023px) {} 
			
			/*  모바일 가로, 모바일 세로 (해상도 767px)*/ 
			@media all and (max-width:767px) {}
		</style> 
	-->
	
</head>
<body>
	<div class="warp">
		<!-- 네비게이션 -->
		<div class="nav_box">
			<div class="nav" onclick="move(1)"><img src="img/00-2. 네비게이션_2.png"> </div>
			<div class="nav"><a href="file/CompanyInfo.pdf" download="CompanyInfo.pdf"><img src="img/00-2. 네비게이션_3.png"></a></div>
			<div class="nav"><a href="카카오톡 링크"><img src="img/00-2. 네이게이션_4.png"></a></div>
			<div class="nav" onclick="move(5)"><img src="img/00-2. 네비게이션_5.png"></div>
		</div>
		
		<!-- 메인 -->
		<div class="main_box" id="menu1">
			<!-- 메뉴(pc) -->
			<ul class="menu">
				<li class="logo">
					<a href="#"><img src="img/01-2. 메인_로고.png" class="logo_img"></a>
				</li>
				<li>
					<ul>
						<li onclick="move(1)" class="list1">회사소개</li>
						<li onclick="move(2)" class="list1">PARTNERS</li>
						<li onclick="move(3)" class="list1">WE DO</li>
						<li onclick="move(4)" class="list1">상품컨설팅</li>
						<li onclick="move(5)" class="list1"><div class="contact_btn">상담문의</div></li>
					</ul>
				</li>
			</ul>
			<div class="empty"></div>
			<!-- 메뉴(모바일) -->
			<div class="menu02">
				<div>
					<a href="#"><img src="img/01-2. 메인_로고.png" class="logo_img"></a>
				</div>
				<div id="play">
					<img src="img/menu_icon.png"  class="logo_img">
				</div>
			</div>
			<div class="sidebar_menu">
			     <div class="close_btn">   
			         <img src="img/letterx.png" class="close_img" id="reverse">
			     </div>
			     <ul class="menu_wrap">
			        <li onclick="move(1)" class="list1">회사소개</li>
					<li onclick="move(2)" class="list1">PARTNERS</li>
					<li onclick="move(3)" class="list1">WE DO</li>
					<li onclick="move(4)" class="list1">상품컨설팅</li>
					<li onclick="move(5)" class="list1"><div class="contact_btn">상담문의</div></li>
			     </ul>
			</div>
			
			<!-- 메인글귀 -->
			<div class="main_text menu1">
				<div class="main_text1">
					<div>
						<span class="blue bold">VARO</span>
						<span class="bold">ADMENT</span>
					</div>
					<div class="extralight">
						: 마켓을 
						<span class="blue bold">바로</span> 
						보다.
					</div>
				</div>
				<div class="main_text2 extralight">
					<div class="text_top">
						<div>브랜드 전략과 상품의 본질 소비자가 원하는 것,</div>
						<div>모든 정답은 마켓에 있습니다.</div>
					</div>
					<div class="bold">
						바로 시작하세요!
					</div>
					<div>
						당신이 원하는 모든 마케팅
					</div>
				</div>
			</div>
			
			<!-- 스크롤 -->
			<div class="scroll">
				<div class="scroll_bg">
					<img alt="" src="img/01-3. 메인_스크롤 유도 원.png" class="ball">
				</div>
			</div>
		</div>
		
		<!-- 파트너 -->
		<div class="partners_box menu2" id="menu2">
			<div class="partner_title bold">PARTNERS</div>
			<div class="logo_warp">			
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>
				<div class="partner_logo fade_in">LOGO</div>			
			</div>		
		</div>
		
		<!-- WEDO(숫자) -->
		<div class="wedo_box menu3" id="menu3">
			<div class="date bold"> 23년 9월 6일 </div>
			<div class="wedo_nums">
				<div>
					<div class="wedo_num extrabold count" data-count="12">0</div>
					<div class="wedo_text extralight">곳의 파트너사와</div>
				</div>
				<div>
					<div class="wedo_num extrabold count" data-count="33">0</div>
					<div class="wedo_text extralight">건의 프로젝트로</div>
				</div>
				<div>
					<div class="wedo_num extrabold"><span class="count" data-count="99">0</span>%</div>
					<div class="wedo_text extralight">다시 만나고 있습니다</div>
				</div>
			</div>
		</div>
		
		<!-- 컨설팅 -->
		<div class="consulting_box menu4" id="menu4">
			<!-- What We Do -->
			<div class="consulting_set1 fade_in">
				<div>
					<div class="consulting_title extrabold">What We Do</div>
					<div class="title_info extralight">팔리지 않으면 마케팅이 아닙니다</div>
				</div>
				<div class="WWD_box">
					<div class="blue varo_circle bold">VARO</div>
					<div class="consulting_list_box">
						<div>
							<div class="blue consulting_list bold">Consulting</div>
							<div class="consulting_info extralight">상품 컨설팅</div>
						</div>
						<div>
							<div class="blue consulting_list bold">IMC</div>
							<div class="consulting_info extralight">커뮤니케이션</div>
						</div>
						<div>
							<div class="blue consulting_list bold">Performance</div>
							<div class="consulting_info extralight">퍼포먼스 마케팅</div>
						</div>
						<div>
							<div class="blue consulting_list bold">Content</div>
							<div class="consulting_info extralight">컨텐츠제작</div>
						</div>
						<div>
							<div class="blue consulting_list bold">Strategy</div>
							<div class="consulting_info extralight">바이럴 마케팅</div>
						</div>
					</div>
					<div class="dot_line"></div>
					<div class="consulting_result">
						<div class="bold consulting_list">Sales</div>
						<div class="result_info extralight">매출·브랜드 성장</div>
					</div>
				</div>
				<div class="extralight comment">
					<div>
						<span class="bold">VARO ADMENT</span>
						는 보기에 예쁜 마케팅이 아닌
					</div>
					<div>
						브랜드 철학을 지키면서
					</div>
					<div>
						<span class="bold">매출을 극대화하는 마케팅만을 운영</span>
						합니다.
					</div>
				</div>
			</div>
			<!-- Services -->
			<div class="consulting_set2 fade_in">
				<div>
					<div class="consulting_title extrabold">Services</div>
					<div class="title_info extralight">정답은 없지만 지름길은 있습니다</div>
				</div>
				<div class="service_box_warp">
					<div class="box_warp">
						<div class="service_box extralight service_box3">
							<div class="service_title_box">
								<div class="service_title_info">팔리게 만드는 모든 고민</div>
								<div class="service_title bold">IMC</div>
							</div>
							<div><img alt="" src="img/04-3. 컨설팅_세로 박스_1_imc.png"></div>
							<div class="service_title_info">
								<div>
									오랜 고민과 노력 끝에 탄생한 브랜드!
								</div>
								<div>
									<span class="bold">상품에 최적화 된 마켓 설정</span>부터
								</div>
								<div>
									<span class="bold">고객 유입과 구매</span>까지 이어지는
								</div>
								<div>
									노하우를 알려드립니다.
								</div>
							</div>
						</div>
						<div class="service_box extralight">
							<div class="service_title_box">
								<div class="service_title_info">무엇을 어디서 어떻게</div>
								<div class="service_title bold">상품 컨설팅</div>
							</div>
							<div><img alt="" src="img/04-3. 컨설팅_세로 박스_2_컨설팅.png"></div>
							<div class="service_title_info">
								<div>
									상품마다 판매가 잘 되는
								</div>
								<div>
									마켓과 가격은 정해져 있습니다.
								</div>
								<div>
									상품을 소비자 친화적으로 최적화해
								</div>
								<div>
									<span class="bold">매력적인 상품으로 변화</span>시켜드립니다.
								</div>
							</div>
						</div>
						<div class="service_box extralight">
							<div class="service_title_box">
								<div class="service_title_info">차별화된 크리에이티브</div>
								<div class="service_title bold">컨텐츠 제작</div>
							</div>
							<div><img alt="" src="img/04-3. 컨설팅_세로 박스_3_컨텐츠.png"></div>
							<div class="service_title_info">
								<div>
									무엇을 보여줘야 할까요?
								</div>
								<div>
									오픈마켓과 광고부터 SNS 광고까지
								</div>
								<div>
									<span class="bold">잘 팔리는 트렌디한 감각</span>으로 상품과
								</div>
								<div>
									<span class="bold">마켓에 최적화된 컨텐츠</span>를 제작합니다. 
								</div>
							</div>
						</div>
					</div>
					<div class="box_warp2">
						<div class="service_box extralight service_box2">
							<div class="service_title_box">
								<div class="service_title_info">경험해 본 적 없는 압도적인 성과</div>
								<div class="service_title bold">퍼모먼스 마케팅</div>
							</div>
							<div><img alt="" src="img/04-3. 컨설팅_세로 박스_4_퍼포먼스.png"></div>
							<div class="service_title_info">
								<div>
									직접 제작한 수제 크리에이티브를
								</div>
								<div>
									마켓을 비롯한 각종 채널에 최적화된
								</div>
								<div>
									구조에 맞춰 예산을 구성해
								</div>
								<div>
									오로지 <span class="bold">매출 극대화로만 직접 송출</span>합니다.
								</div>
							</div>
						</div>
						<div></div>
						<div class="service_box extralight service_box2">
							<div class="service_title_box">
								<div class="service_title_info">믿은 수 없는 입소문의 힘</div>
								<div class="service_title bold">바이럴 마케팅</div>
							</div>
							<div><img alt="" src="img/04-3. 컨설팅_세로 박스_5_바이럴.png"></div>
							<div class="service_title_info">
								<div>
									화제를 만들고 인구에 회자되는
								</div>
								<div>
									포인트는 정해져 있습니다. 
								</div>
								<div>
									고객이든 아니든 <span class="bold">스쳐가는 모두가</span>
								</div>
								<div>
									<span class="bold">어디든 광고매체</span>가 됩니다. 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 상담유도 -->
			<div class="consulting_set3 fade_in">
				<div class="consulting_info2 extralight">
					<div>다른 모든 것들도 마케팅이지만</div>
					<div>이것이 가장 <span class="blue bold">효율적인 마케팅</span>입니다 </div>
				</div>
				<div class="bold consulting_list2">
					<div>아직 잘 모르시겠으면</div>
					<div>아래에서 커피 한 잔 하시죠!</div>
				</div>
			</div>
			<!-- 스크롤? -->
			<div class="line"></div>
		</div>
		
		<!-- 상담 -->
		<div class="contact_box menu5" id="menu5">
		    <div class="line2"></div>
		    
		    <form action="mail.php" method="post">
		        <div class="contact_bg">
		            <div class="contact_title bold">직접 듣고 싶어요!</div>
		            <div class="contact_line1">
		                <div class="contact_kind_box">
		                    <div class="contact_kind">브랜드(서비스)명</div>
		                    <div class="contact_input">
		                        <input type="text" name="brand" placeholder="주식회사 OOO">
		                    </div>
		                </div>
		                <div class="contact_kind_box">
		                    <div class="contact_kind">성함</div>
		                    <div class="contact_input">
		                        <input type="text" name="name" placeholder="홍길동">
		                    </div>
		                </div>
		            </div>
		            <div class="contact_line1">
		                <div class="contact_kind_box">
		                    <div class="contact_kind">연락처</div>
		                    <div class="contact_input">
		                        <input type="text" name="contact" placeholder="010-0000-0000">
		                    </div>
		                </div>
		                <div class="contact_kind_box">
		                    <div class="contact_kind">이메일</div>
		                    <div class="contact_input">
		                        <input type="email" name="email" placeholder="info@yourmail.com">
		                    </div>
		                </div>
		            </div>
		            <div class="contact_line2">
		                <div class="contact_kind_box contact_kind_box2">
		                    <div class="contact_kind">내용(선택사항)</div>
		                    <div class="contact_input2">
		                        <textarea name="content" placeholder="문의내용"></textarea>
		                    </div>
		                </div>
		            </div>
		            <div class="contact_line3">
		                <div class="contact_info">
		                    <div class="gray">위 정보는 컨설팅 최초 연락 목적으로만 사용되며, 사용된 이후에는 자동 삭제되도록 설계되어있으니 안심하셔도 좋습니다.</div>
		                </div>
		                <div class="contact_sub_btn">
		                    <input type="submit" type="submit" class="submit_btn">
		                </div>
		            </div>
		        </div>
		    </form>
		</div>
		
		
		
		
		<!-- 회사 정보 -->
		<div class="info_box">
			<div class="info">
				<div class="contact_info_title bold">CONTACT INFO</div>
				<div class="contact_info_box extralight">
					<div class="contact_info_subbox">
						<div>
							<div class="bold blue company">VARO ADMENT</div>
							<div>
								<div class="bold">(주)바로솔루션즈 (VARO SOLUTIONS)</div>
								<div>- 서울특별시 서초구 방배천로 2길 5, 성지빌딩 604호</div>
								<div>- 경기도 안산시 단원구 광덕서로 82 한남법조빌딩 410호</div>
							</div>
						</div>
						<div class="padding">
							<div><span class="bold">Tel</span> 031-402-9953</div>
							<div><span class="bold">Website</span> www.varosolution.co.kr</div>
							<div><span class="bold">Email</span> vorsche@varosolution.co.kr</div>
						</div>
					</div>
					<div class="padding img_box">
						<div class="bold img_div">
							<a href="file/CompanyInfo.pdf" download="CompanyInfo.pdf">
								<img src="img/06. INFO (1).png">
								WORK
							</a>
						</div>
						<div class="bold img_div">
							<a href='tel:031-402-9953'>
								<img src="img/06. INFO (2).png">
								TEL
							</a>
						</div>
						<div class="bold img_div">
							<a href="http:///www.varosolution.co.kr">
								<img src="img/06. INFO (3).png">
								WEB
							</a>
						</div>
						<div class="bold img_div">
							<a href="mailto:﻿"vorsche@varosolution.co.kr">
								<img src="img/06. INFO (4).png">
								E-MAIL
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- PyScript 
	<script defer src="https://pyscript.net/latest/pyscript.js"></script>-->
	<!-- GSAP -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<!-- j쿼리 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- 사용자 정의 js -->
	<script src="index.js" type="text/javascript"></script>
	
</body>
</html>