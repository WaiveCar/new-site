"use strict";function hasBlankRequiredFields(e){var a=!1;return e.find("input, textarea").each(function(){var e=$(this);e.data("required")&&""===e.val()&&(e.addClass("js-required"),e.on("blur",function(){""!==$(this).val()&&$(this).removeClass("js-required")}),a=!0)}),a&&e.find(".js-required").first().focus(),a}function swap(){var e=$("#driving-zone-btn"),a=$("#parking-zone-btn"),t=$("#driving-zone"),i=$("#parking-zone");a.removeClass("js-active"),e.addClass("js-active"),i.removeClass("js-active"),t.addClass("js-active")}function initContactsMap(){if(viewportWidth>568)e=new google.maps.Map(document.getElementById("map"),{zoom:15,center:{lat:34.0167081,lng:-118.4967472},disableDefaultUI:!0,scrollwheel:!1});else var e=new google.maps.Map(document.getElementById("map"),{zoom:15,center:{lat:34.0167081,lng:-118.4897472},disableDefaultUI:!0,scrollwheel:!1});var a={url:"img/map-marker.png",size:new google.maps.Size(190,210),scaledSize:new google.maps.Size(95,105),origin:new google.maps.Point(0,0),anchor:new google.maps.Point(35,75)};new google.maps.Marker({map:e,position:{lat:34.0167081,lng:-118.4897472},icon:a})}function signup(e){$("index-main-start-form__submit").html("Submitting..."),$("#sign-up-form input").each(function(){signup.postback[this.name]=this.value}),$.post("https://api.waivecar.com/waitlist/add",signup.postback,function(e,a){window.location="https://lb.waivecar.com/waitlist?"+$.param(e)})}function initMap(){var e=document.getElementById("sign-up-location"),a=new google.maps.places.Autocomplete(e,{types:["(cities)"]});a.addListener("place_changed",function(){var e=a.getPlace();signup.postback.latitude=e.geometry.location.lat(),signup.postback.longitude=e.geometry.location.lng(),signup.postback.placeId=e.place_id})}function gtag(){dataLayer.push(arguments)}var viewportWidth=document.documentElement.clientWidth;$(window).resize(function(){viewportWidth=document.documentElement.clientWidth}),$("#hamburger").click(function(){var e=$(".h-menu");e.is(":hidden")?e.show(0):e.hide(0)}),$(window).resize(function(){viewportWidth>960&&$(".h-menu").css("display","")}),$("#driving-zone-btn").click(function(){var e=$("#driving-zone");e.attr("_src")?(e.on("load",swap),e.attr("src",e.attr("_src")),e.removeAttr("_src")):swap()}),$("#parking-zone-btn").click(function(){var e=$(this),a=$("#driving-zone-btn"),t=$("#parking-zone"),i=$("#driving-zone");e.addClass("js-active"),a.removeClass("js-active"),t.addClass("js-active"),i.removeClass("js-active")}),$(".faq-sidebar-btn").click(function(){var e=$(this),a=e.data("tab"),t=$(".faq-content__container[data-tab="+a+"]");$(".faq-content__container.js-active").removeClass("js-active"),$(".faq-sidebar-btn.js-active").removeClass("js-active"),t.addClass("js-active"),e.addClass("js-active")}),$(".faq-content-item__header").click(function(){var e=$(this),a=e.next(".faq-content-item__content"),t=e.parent();a.is(":visible")?(t.removeClass("js-active"),e.removeClass("js-expanded"),a.slideUp(200)):(t.addClass("js-active"),e.addClass("js-expanded"),a.slideDown(200))}),signup.postback={},WebFont.load({google:{families:["Muli:300,400,600,700"]}}),window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-72407446-1");