(function() {
	"use strict";
	console.log("HELLO WORLD!")

// JS is enabled! Switch links
	var logo = document.querySelector(".navbar-brand");
	var menuHome = document.querySelector("#menuHome");
	var menuAbout = document.querySelector("#menuAbout");
	var menuBook = document.querySelector("#menuBook");
	var menuGallery = document.querySelector("#menuGallery");
	var menuDonate = document.querySelector("#menuDonate");
	var menuContact = document.querySelector("#menuContact");
	
	logo.href = "#/";
	menuHome.href = "#/";
	menuAbout.href = "#/about";
	menuBook.href = "#/book";
	menuGallery.href = "#/gallery";
	menuDonate.href = "#/donate";
	menuContact.href = "#/contact";
// end js enabled link switching


	



            $.getJSON('includes/ajaxQuery.php', { image:this.id }, function(data){
            console.log(data);
            // $('.modelName').text(data.modelName);
            // $('.priceInfo').text(data.pricing);
            // $('.modelDetails').text(data.modelDetails);
            });



	
	//Variables

	//Functions

	//Listeners


})();