var app = angular.module('ChantryIsland', ['ngRoute']); //declare app + import ngRoute
var siteTitle = "Chantry Island"; //Site Title
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) { //Config routes
    $routeProvider
        .when("/", { templateUrl: "partials/home.php", controller: "HomeCtrl" }) //Home Page
        .when("/about", { templateUrl: "partials/about.php", controller: "AboutCtrl" }) //About Page
        .when("/book", { templateUrl: "partials/book.php", controller: "BookCtrl" }) //Book Page
        .when("/gallery", { templateUrl: "partials/gallery.php", controller: "GalleryCtrl" }) //Gallery Page
        .when('/gallery/:image_id', { //Gallery item Page
            templateUrl: function(attrs) {
                return 'partials/photo.php?image_id=' + attrs.image_id;
            },
            controller: "GalleryItemCtrl"
        })
        .when("/donate", { templateUrl: "partials/donate.php", controller: "DonateCtrl" }) //Donate Page
        .when("/contact", { templateUrl: "partials/contact.php", controller: "ContactCtrl" }) //Contact Page
        .when("/menu", { templateUrl: "partials/menu.php", controller: "MenuCtrl" }) //Menu
        .otherwise({ redirectTo: '/' });
    //$locationProvider.html5Mode(true);
}]);
//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = siteTitle;
        var homeWelcome = document.querySelector(".home-welcome");
        var homeFooter = document.querySelector(".footer");
        TweenMax.to(homeWelcome, 2, { delay: 0.5, opacity: 1 });
        TweenMax.to(homeFooter, 0.5, { delay: 1, startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });
        var homeFtrLM = document.querySelector(".learn-more");
        var homeFtrBN = document.querySelector(".book-now");
        homeFtrLM.href = "#/about";
        homeFtrBN.href = "#/book";
    });
}]);
//Controller for About
app.controller('AboutCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "About - " + siteTitle;
        var bookNowBtn = document.querySelector(".about-sidebar-click");
        bookNowBtn.href = "#/book";
        var about = document.querySelector("#about");
        TweenMax.to(about, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });
    });
}]);
//Controller for Book
app.controller('BookCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Book a Tour - " + siteTitle;
        var book = document.querySelector("#book");
        TweenMax.to(book, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });
    });
}]);
//Controller for Gallery
app.controller('GalleryCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Gallery - " + siteTitle;
        var gallery = document.querySelector("#gallery");
        TweenMax.to(gallery, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });
        $('.gallery img').on('click', function() {
            $.getJSON('includes/getImages.php', { getImage: this.id }, function(data) {
                //console.log('click');
                $('.image').attr('src', 'admin/uploads/images/' + data.g_img);
                $('.caption').text(data.g_title);
            });
        });
    });
}]);
//Controller for Gallery Item
app.controller('GalleryItemCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Gallery - " + siteTitle;
        var galleryItem = document.querySelector("#galleryItem");
        TweenMax.to(galleryItem, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });

    });
}]);
//Controller for Donate
app.controller('DonateCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Donate - " + siteTitle;
        var donate = document.querySelector("#donate");
        TweenMax.to(donate, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function() {
        document.title = "Contact - " + siteTitle;
        var contact = document.querySelector("#contact");
        TweenMax.to(contact, 0.5, { startAt: { opacity: 0, y: 200 }, opacity: 1, y: 0 });



        // MAP
        var map = new google.maps.Map(document.querySelector('.map-wrapper')),
            lighthouseIcon = {
                url: 'img/lighthouse.png',
                //scaledSize: new google.maps.Size(25, 25)
            },
            geocoder = new google.maps.Geocoder(),
            routeBut = document.querySelector('.geocode'),

            directionsService = new google.maps.DirectionsService(),
            directionsDisplay,
            locations = [],
            marker;

        //console.log(lighthouseIcon);

        function initMap(position) {

            locations[0] = { lat: 44.499932, lng: -81.373540 };
            directionsDisplay = new google.maps.DirectionsRenderer();
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.querySelector('.directionsPanel'));

            map.setCenter({ lat: 44.499932 /*position.coords.latitude*/ , lng: -81.373540 /*position.coords.longitude*/ });

            map.setZoom(17);

            marker = new google.maps.Marker({
                //position: {lat: 42.983233, lng: -81.250688},
                position: { lat: 44.499932 /*position.coords.latitude*/ , lng: -81.373540 /*position.coords.longitude*/ },
                map: map,
                animation: google.maps.Animation.DROP,
                icon: lighthouseIcon,
                title: "Chantry Island Tours"
            });

            /*var panorama = new google.maps.StreetViewPanorama(
                        document.querySelector('.streetView'), {
                          position: {lat: 44.499932, lng: -81.373540},
                          pov: {
                            heading: 34,
                            pitch: 10
                          }
                        }); 
            map.setStreetView(panorama);*/


        }

        function mapAddress() {
            var addressInput = document.querySelector('.address').value;
            geocoder.geocode({ 'address': addressInput }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    locations[1] = { lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng() };

                    map.setCenter(results[0].geometry.location);
                    if (marker) {
                        marker.setMap(null);

                        marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location

                        });
                    }

                    directions(results[0].geometry.location);
                } else {
                    console.log("geocoder was not successful");
                }

            });
        }

        function directions(codedLoc) {
            var request = {
                origin: locations[1],
                destination: locations[0],
                travelMode: 'DRIVING'
            };

            directionsService.route(request, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                }
            })
        }



        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(initMap, handleError);
        } else {
            //give some kind of error message to user 
            console.log("your browser does not support geolocation.");
        }

        function handleError(e) {
            console.log(e);
        }



        routeBut.addEventListener("click", mapAddress, false);
        // END MAP


    });
}]);
//Controller for Menu
app.controller('MenuCtrl', [function() {
    angular.element(document).ready(function() {
        var menu = document.querySelector("#mainMenu");
        TweenMax.to(menu, 0.5, { startAt: { opacity: 0, y: -180 }, opacity: 1, y: 0 });
    });
}]);
