console.log("js 연결") 

/* 스크롤 */
function move(num){
var menuHeight = document.querySelector(".menu").offsetHeight;

var location = document.querySelector("#menu"+num).offsetTop;

window.scrollTo({top:location - menuHeight, behavior:'smooth'});
}

/* 스크롤 공 움직이기 */
window.addEventListener('scroll', function(){
	let bg_h = document.querySelector(".scroll_bg").offsetHeight;
	if(window.scrollY<=1000){
		//console.log( window.scrollY )
		let top = bg_h/1000*window.scrollY + 5;
		if(top<=58){//console.log(top)
			document.querySelector(".ball").style.top = top +'px';
		}
	}
});

/* 스크롤 움직일때 메뉴 고정 */
window.addEventListener('scroll', function(){
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
});

/* 페이드인 */
let elementsArray = document.querySelectorAll(".logo_box");
window.addEventListener("scroll", fadeIn);
function fadeIn() {
  for (var i = 0; i < elementsArray.length; i++) {
    var elem = elementsArray[i];
    var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
    if (distInView < 0) {
      elem.classList.add("inView");
    }
  }
}
fadeIn();


