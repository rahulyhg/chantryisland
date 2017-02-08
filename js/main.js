(function() {
	"use strict";
	//console.log("HELLO WORLD!")
	
	//Variables
	var logo = document.querySelector("#logo");
	var menu = document.querySelector("#menu");
	var menuLink = document.querySelector("#menuLink");	
	var page = document.querySelector("#page");
	var body = document.querySelector("body");

	menuLink.href = "#/menu";//change menu to js enabled version
	logo.href = "#/";//change logo to js enabled version
	
	// //Functions
	// function expandLogo() {//Expands and animates logo
	// 	TweenMax.to(logo, 1, {width:320,text:"Liam Stewart"});
	// 	logo.removeEventListener("mouseover", expandLogo, false);
	// 	logo.addEventListener("mouseout", contractLogo, false);
	// }
	// function contractLogo() {//Contracts and does closing animation on logo
	// 	TweenMax.to(logo, 1, {width:80,text:"L"}, "+=0.5");
	// 	logo.addEventListener("mouseover", expandLogo, false);
	// }

	//Listeners
	logo.addEventListener("mouseover", expandLogo, false);

})();