var app = angular.module('ChantryIsland', ['ngRoute']);//declare app + import ngRoute
var once = 0;//run menu + logo animation once on homepage
var siteTitle = "Chantry Island";//Site Title
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "includes/home.php",controller:"HomeCtrl"})//Home Page
    .when("/about", {templateUrl: "includes/about.php",controller:"AboutCtrl"})//About Page
    .when("/portfolio", {templateUrl: "includes/portfolio.php",controller:"PortfolioCtrl"})//Portfolio Page
    .when("/blog", {templateUrl: "includes/blog.php",controller:"BlogCtrl"})//Blog Page
    .when('/blog/:blog_id', {//Blog Post Page
        templateUrl: function(attrs){ 
            return 'includes/blog-post.php?blog_id=' + attrs.blog_id; },controller:"BlogPostCtrl"
    })
    .when("/contact", {templateUrl: "includes/contact.php",controller:"ContactCtrl"})//Contact Page
    .when("/menu", {templateUrl: "includes/menu.php",controller:"MenuCtrl"})//Menu
    .otherwise({redirectTo: '/'});
    //$locationProvider.html5Mode(true);
}]);
//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = siteTitle;
    	var home = document.querySelector("#home");
    	var menu = document.querySelector("#menu");
    	var logo = document.querySelector("#logo");
    	if (once===0) {//logo and menu animation once per session
    		TweenMax.to(logo, 0.5, {opacity: 1, x:0, startAt:{opacity:0, x:-100}});
    		TweenMax.to(menu, 0.5, {opacity: 1, x:0, startAt:{opacity:0, x:200}});
    		once++;
    	}
        TweenMax.to(home, 2, {delay:0.5,opacity: 1});
    });
}]);
//Controller for About
app.controller('AboutCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "About - "+siteTitle;
    	var about = document.querySelector("#about");
        TweenMax.to(about, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Portfolio
app.controller('PortfolioCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Portfolio - "+siteTitle;
    	var portfolio = document.querySelector("#portfolio");
        var portfolioItems = document.querySelector("#portfolioItems");
        TweenMax.to(portfolio, 0.5, {startAt:{opacity:0, x:-200},opacity: 1, x:0});
        TweenMax.to(portfolioItems, 0.5, {startAt:{opacity:0, x:-400},opacity: 1, x:0});
    });
}]);
//Controller for Blog
app.controller('BlogCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Blog - "+siteTitle;
        var blogHeading = document.querySelector("#blog-heading");
        var blogType = document.querySelector("#blog-type");
        var blogPosts = document.querySelector("#blog-posts");
        TweenMax.to(blogHeading, 1, {text:"Blog"});
        TweenMax.to(blogType, 4, {delay:1.5,text:"My thoughts, ideas and complaints."});
        TweenMax.to(blogPosts, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Blog Post
app.controller('BlogPostCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Blog - "+siteTitle;
        var blogPost = document.querySelector("#blog");
        TweenMax.to(blogPost, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Contact - "+siteTitle;
    	var contact = document.querySelector("#contact");
        var contactItem = document.querySelector(".contactItem");
        TweenMax.to(contact, 0.5, {startAt:{opacity:0, x:-200},opacity: 1, x:0});
        TweenMax.to(contactItem, 0.5, {startAt:{opacity:0, x:-400},opacity: 1, x:0});
    });
}]);
//Controller for Menu
app.controller('MenuCtrl', [function() {
    angular.element(document).ready(function () {
    	var menu = document.querySelector("#mainMenu");
        TweenMax.to(menu, 0.5, {startAt:{opacity:0, y:-180},opacity: 1, y:0});
    });
}]);