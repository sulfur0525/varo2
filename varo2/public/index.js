console.log("js 연결") 

/* 스크롤 */
function move(num){
var menuHeight = document.querySelector(".menu").offsetHeight;

var location = document.querySelector("#menu"+num).offsetTop;

window.scrollTo({top:location - menuHeight, behavior:'smooth'});
}