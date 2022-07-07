/*
::
:: Theme Name: MarketUp - SEO & Digital Marketing HTML5 Theme
:: Email: Nourramadan144@gmail.com
:: Author URI: https://themeforest.net/user/ar-coder
:: Author: ar-coder
:: Version: 1.0
:: 
*/

(function () {
	'use strict';
	
	// :: Add Class Active For $menuLink And $navbarMenu
    $('.open-nav-bar').on('click', function (e) {
        e.preventDefault();
        $('.navbar .links-box').toggleClass('active');
        $('.navbar form').toggleClass('active');
    });
	
	// :: NiceSelect Plugin
    $('select').niceSelect();

}());