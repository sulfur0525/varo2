console.log("js 연결") 

/*
$(window).on('mousewheel', function(e){
	if(e.originalEvent.wheelDelta < 0) {
		//scroll down
		$('html, body').stop().animate({
			scrollTop : '+=250px'
		},500);
	}else {
		//scroll up
		$('html, body').stop().animate({
			scrollTop : '-=250px'
		},500);
	}

	//prevent page fom scrolling
	return false;
});

*/
window.addEventListener('scroll', function(){
	//console.log( window.scrollY )
	move_ball();
	num();
	fadeIn();
	bg_move();
	line_move();
	
	if(window.innerWidth>=768){
		menu();
	}
});


/* 스크롤 */ 
function move(num){
	var menuHeight;
	if(window.innerWidth>=768){
		menuHeight = document.querySelector(".menu").offsetHeight;
	}else{
		menuHeight = document.querySelector(".menu02").offsetHeight;
		document.querySelector('.sidebar_menu').style.right = '-300px';
    	document.querySelector('.overlay').style.display = 'none';
    	document.body.style.overflow = '';
	}

	var location = document.querySelector("#menu"+num).offsetTop;
	window.scrollTo({top:location - menuHeight, behavior:'smooth'});
}

/* 스크롤 공 움직이기 */
function move_ball(){
	let bg_h = document.querySelector(".scroll_bg").offsetHeight;
	if(window.scrollY<=1000){
		let top = bg_h/1000*window.scrollY + 5;
		if(top<=58){//console.log(top)
			document.querySelector(".ball").style.top = top +'px';
		}
	}
}

/* 스크롤 움직일때 메뉴 고정 */
function menu(){
	if(window.scrollY>0){
		document.querySelector(".menu").style.position = 'fixed';
		document.querySelector(".menu").style.border = 'none';
		document.querySelector(".menu").style.backgroundColor = 'rgb(86 86 86 / 50%)';
		document.querySelector(".menu").style.height = '3vw';
		document.querySelector(".menu").style.width = '100%';
		document.querySelector(".menu").style.gridTemplateColumns = '15% 55%';
		document.querySelector(".menu").style.justifyContent = 'center';
		document.querySelector(".menu ul").style.justifyContent = 'flex-end';
	}else{
		document.querySelector(".menu").style.position = 'static';
		document.querySelector(".menu").style.borderBottom = '1px solid white';
		document.querySelector(".menu").style.backgroundColor = 'transparent';
		document.querySelector(".menu").style.height = '4vw';
		document.querySelector(".menu").style.width = '70vw';
		document.querySelector(".menu").style.gridTemplateColumns = '1fr 5fr';
		document.querySelector(".menu").style.justifyContent = 'space-between';
		document.querySelector(".menu ul").style.justifyContent = 'space-between';
	}
}

/* 페이드인 */
let elementsArray = document.querySelectorAll(".fade_in");
function fadeIn() {
  for (var i = 0; i < elementsArray.length; i++) {
    var elem = elementsArray[i];
    var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
    if (distInView < 0) {
      elem.classList.add("inView");
    }
  }
}

/* 숫자 액션 */
function num() {
    let wedo_box = document.querySelector("#menu3").offsetTop - window.innerHeight / 2;
    let wedo_box2 = document.querySelector("#menu4").offsetTop;

    if (window.scrollY >= wedo_box && window.scrollY <= wedo_box2) {
        $('.count').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            
            // If the current number is not the final count
            if ($this.text() != countTo) {
                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            }
        });
    } else {
        // Reset numbers to initial value when outside the animation range
        $('.count').text('0');
    }
}

/* 오늘 날짜 표시 */
date();
function date(){
	var now = new Date();	// 현재 날짜 및 시간
	var year = now.getFullYear()// 연도
	var month = now.getMonth()+1;	// 월
	var date = now.getDate();	// 일
	let year2 = year%100;
	let today = year2+'년 '+month+'월 '+date+'일'
	
	document.querySelector(".date").innerHTML = today
}

/* 스크롤 하면 배경이동 */
function bg_move(){
	let wedo_box_top = document.querySelector("#menu3").offsetTop-window.innerHeight/2;
	let wedo_box_bottom = document.querySelector("#menu3").offsetTop+window.innerHeight/2;
	//console.log( window.scrollY )
	if(window.scrollY>=wedo_box_top && window.scrollY<=wedo_box_bottom){
		//console.log(window.scrollY);
		//console.log(wedo_box_top)
		let position = Math.floor((window.scrollY-wedo_box_top)/4); 
		//console.log(position);
		if(position<=100){
			document.querySelector(".wedo_box").style.backgroundPosition = '50% '+position+'%'
		}
	}
}

/* 선 떨어지기? */
function line_move(){
	let box_top = document.querySelector("#menu5").offsetTop-window.innerHeight+120;
	//console.log(window.scrollY)
	//console.log(box_top)
	if(window.scrollY>=box_top){
		let cnt = (window.scrollY-box_top)/10 
		console.log(cnt)
		if(cnt<=12){
			document.querySelector(".line2").style.height = (cnt/2) +'vw'
		}
	}
	
}

/* 모바일 사이드바 */
function sidebar(action) {
    const menu = document.querySelector('.sidebar_menu');
    const overlay = document.querySelector('.overlay');
    const body = document.body;

    if (action === 1) { // 메뉴 열기
        menu.style.right = '0px';
        body.style.overflow = 'hidden';  // 스크롤 막기
        overlay.style.display = 'block';
    } else if (action === 2) { // 메뉴 닫기
        menu.style.right = '-300px';
        body.style.overflow = '';  // 스크롤 허용
        overlay.style.display = 'none';
    }
}
