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
	menu();
	num();
	fadeIn();
	bg_move()
});


/* 스크롤 */ 
function move(num){
var menuHeight = document.querySelector(".menu").offsetHeight;

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
		document.querySelector(".menu").style.width = '100%';
		document.querySelector(".menu").style.borderBottom = 'none';
		document.querySelector(".menu").style.position = 'fixed';
		document.querySelector(".menu").style.top = '0';
		document.querySelector(".logo").style.paddingRight = '600px';
		document.querySelector(".menu ul").style.padding = '0px 300px';
		document.querySelector(".menu ul").style.backgroundImage = 'url("img/00-1. 카테고리-배경-박스.png")'
	}else{
		document.querySelector(".menu").style.width = '1300px';
		document.querySelector(".menu").style.borderBottom = '1px solid white';
		document.querySelector(".menu").style.position = 'static';
		document.querySelector(".logo").style.paddingRight = '0px';
		document.querySelector(".menu ul").style.padding = '0px';
		document.querySelector(".menu ul").style.backgroundImage = 'none'
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
function num(){
	let wedo_box = document.querySelector("#menu2").offsetTop+180;
	let wedo_box2 = document.querySelector("#menu4").offsetTop
	//console.log(window.scrollY+'=='+wedo_box)
	if(window.scrollY>=wedo_box && window.scrollY<=wedo_box2){
		$('.count').each(function() { 
		  var $this = $(this),
		      countTo = $this.attr('data-count');
		       
		  $({ countNum: $this.text()}).animate({
		    countNum: countTo 
		  },
		  {
		    duration: 2000, 
		    easing:'linear',
		    step: function() {
		      $this.text(Math.floor(this.countNum));
		    },
		    complete: function() { 
		      $this.text(this.countNum);
		    }
		  });  
		});
	}
}

/* 스크롤 하면 배경이동 */
function bg_move(){
	let wedo_box_top = document.querySelector("#menu2").offsetTop+200;
	let wedo_box_bottom = document.querySelector("#menu4").offsetTop-200
	//console.log( window.scrollY )
	if(window.scrollY>=wedo_box_top && window.scrollY<=wedo_box_bottom){
		//console.log(window.scrollY);
		//console.log(wedo_box_top)
		let position = Math.floor((window.scrollY-wedo_box_top)/4); 
		console.log(position);
		if(position<=100){
			document.querySelector(".wedo_box").style.backgroundPosition = '50% '+position+'%'
		}
	}
}





