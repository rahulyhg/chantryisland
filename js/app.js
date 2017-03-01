var app = angular.module('ChantryIsland', ['ngRoute']);//declare app + import ngRoute
var siteTitle = "Chantry Island";//Site Title
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "partials/home.php",controller:"HomeCtrl"})//Home Page
    .when("/about", {templateUrl: "partials/about.php",controller:"AboutCtrl"})//About Page
    .when("/book", {templateUrl: "partials/book.php",controller:"BookCtrl"})//Book Page
    .when("/gallery", {templateUrl: "partials/gallery.php",controller:"GalleryCtrl"})//Gallery Page
    .when('/gallery/:galleryImage_id', {//Gallery item Page
        templateUrl: function(attrs){ 
            return 'partials/photo.php?galleryImage_id=' + attrs.blog_id; },controller:"GalleryItemCtrl"
    })
    .when("/donate", {templateUrl: "partials/donate.php",controller:"DonateCtrl"})//Donate Page
    .when("/contact", {templateUrl: "partials/contact.php",controller:"ContactCtrl"})//Contact Page
    .when("/menu", {templateUrl: "partials/menu.php",controller:"MenuCtrl"})//Menu
    .otherwise({redirectTo: '/'});
    //$locationProvider.html5Mode(true);
}]);
//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = siteTitle;
    	var homeWelcome = document.querySelector(".home-welcome");
        var homeFooter = document.querySelector(".footer");
        TweenMax.to(homeWelcome, 2, {delay:0.5,opacity: 1});
        TweenMax.to(homeFooter, 0.5, {delay:1,startAt:{opacity:0, y:200},opacity: 1, y:0});
        var homeFtrLM = document.querySelector(".learn-more");
        var homeFtrBN = document.querySelector(".book-now");
        homeFtrLM.href = "#/about";
        homeFtrBN.href = "#/book";
    });
}]);
//Controller for About
app.controller('AboutCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "About - "+siteTitle;
        var bookNowBtn = document.querySelector(".about-sidebar-click");
        bookNowBtn.href = "#/book";
    	var about = document.querySelector("#about");
        TweenMax.to(about, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Book
app.controller('BookCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Book a Tour - "+siteTitle;
        var book = document.querySelector("#book");
        TweenMax.to(book, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Gallery
app.controller('GalleryCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Gallery - "+siteTitle;
        var gallery = document.querySelector("#gallery");
        TweenMax.to(gallery, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Gallery Item
app.controller('GalleryitemCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Gallery - "+siteTitle;
        var gallery = document.querySelector("#galleryItem");
        TweenMax.to(galleryItem, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Donate
app.controller('DonateCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Donate - "+siteTitle;
        var donate = document.querySelector("#donate");
        TweenMax.to(donate, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Contact - "+siteTitle;
        var contact = document.querySelector("#contact");
        TweenMax.to(contact, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Menu
app.controller('MenuCtrl', [function() {
    angular.element(document).ready(function () {
    	var menu = document.querySelector("#mainMenu");
        TweenMax.to(menu, 0.5, {startAt:{opacity:0, y:-180},opacity: 1, y:0});
    });
}]);