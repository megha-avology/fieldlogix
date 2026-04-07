/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    // Using jQuery to edit the placeholder text of the search bar that appears on all blog pages
    $("#blog-search input#s").attr("placeholder", "Search News");

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */

    $('#inner-content .gform_footer').find('br').remove();
    $('#inner-content .gform_footer').find('p').remove();

    /// Mouse Action buttons

    $('#navigation-wrapper').prepend('<a id="mobile-button"  class="link" href="#">menu</a>');

    $('#mobile-button').click(function(){

        $('#menu-top-menu').toggle();
        $('#mobile-button').toggleClass('selected');
        $('#btn-get-quote').toggleClass('selected');

    });

   
    $('#btn-get-quote').click(function(event){

        event.preventDefault();

        $('#quote-form').fadeToggle();

    });

    $('.ninja-forms-form-wrap').find('br').remove();

    $('.checkbox-wrap').append('<div class="clear"></div>');

    // Slider activation on home page
    
    if($('#news').length > 0){       

        $('.bxslider').bxSlider({
            autoControls: false,
            adaptiveHeight: true,
            mode: 'fade'
        });

    }

    if($('#homepage-slider').length > 0){       

        $('#homepage-slider').bxSlider({
            mode: 'fade',
            pager: false,
            auto: true,
            speed: 800
        });


    }
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();    

    apply_viewport(responsive_viewport);    

    adjust_padding();

    $(window).resize(function() {                     

        responsive_viewport = $(window).width();   

        apply_viewport(responsive_viewport);  

        adjust_padding();

        //console.log($padding);                  

    });


    $(window).scroll(function(){

        apply_viewport($(window).width());


    });   

    /// Custom Functions

    function adjust_padding(){

        $padding = $(window).width() - $('.nav-container').width();
        $padding = $padding / 2;

        $('#slider .first').css('padding-left',$padding);

    }

    function mobile_menu(){        

        $mobile_menu_width = $('.nav-container').width()  - $('#btn-get-quote').width() - 38;

        $submenu_width = $('.nav-container').width();

        $('#mobile-menu').css('width',$mobile_menu_width);

        $('#cssmenu').css('width',$submenu_width);        

    }
    
    function apply_viewport(responsive_viewport) {

        $('#inner-header').removeClass('fixed');                   

          /* if is above or equal to 768px */
        if (responsive_viewport >= 768) {            
        
            /* load gravatars */
            $('.comment img[data-gravatar]').each(function(){
                $(this).attr('src',$(this).attr('data-gravatar'));
            });           
            
        }
        
        /* if is above or equal to 768px */
        if (responsive_viewport < 780) {
            
            $('#navigation-wrapper').addClass('mobile');

            $('body').addClass('mobile');

            $('#quote-form').addClass('mobile');
            
            $('#cssmenu').addClass('mobile');
            
            $('.calculator').addClass('mobile');

            $('#slider .first').removeClass('sixcol');

            $('.hide-mobile').hide();

            $('.show-mobile').show();        
            
//            fixed_menu_mobile();
/*
            if($('#mobile-menu').length == 0){

                $('#navigation-wrapper').prepend('<ul id="mobile-menu"><li></li></ul>');
                $('#mobile-button').appendTo('#mobile-menu li');
                $('#cssmenu').appendTo('#mobile-menu li');

            }

            mobile_menu();            
*/
        }      

        if (responsive_viewport > 780) {    
            
            $('#slider .first').addClass('sixcol');

            $('#cssmenu').appendTo('#navigation-wrapper');
            
            $('#mobile-button').appendTo('#navigation-wrapper');

            $('#mobile-menu').remove();
            
            $('#navigation-wrapper').removeClass('mobile');

            $('body').removeClass('mobile');

            $('#quote-form').removeClass('mobile');
            
            $('#cssmenu').removeClass('mobile');
            
            $('.calculator').removeClass('mobile');

            $('#cssmenu').css('width','auto');

            $('#cssmenu').show();

            $('.show-mobile').hide();

            $('.hide-mobile').show();
            
            fixed_menu();
            
        }
        
      }; 

    function fixed_menu(){

     //detect if wordpress admin bar is present

        if($('#wpadminbar').length >0 ){

            $('#inner-header').addClass('admin');        

        }        
            
        var $hposition = $(window).scrollTop();

        if($hposition > 132){

            $('#inner-header').addClass('fixed');

        }else{

            $('#inner-header').removeClass('fixed');

        }            

    }

    function fixed_menu_mobile(){

     //detect if wordpress admin bar is present

        if($('#wpadminbar').length >0 ){

            $('#inner-header').addClass('admin');        

        }        
            
        var $hposition = $(window).scrollTop();

        if($hposition > 178){

            $('#inner-header').addClass('fixed');

        }else{

            $('#inner-header').removeClass('fixed');

        }            

    }	
	//This is for Google Analytics Goal Tracking
	jQuery(document).bind('gform_confirmation_loaded', function(event, form_id){
		if(form_id == 3) {
			// Request a Quote Form
			_gaq.push(['_trackEvent', 'Contact', 'Info Request', 'Request Quote Popup', 1, false]);
		} else if(form_id == 7) {
			// NPPG Form
			_gaq.push(['_trackEvent', 'Contact', 'Info Request', 'NPPG', 1, false]);
		} else if(form_id == 4) {
			// Contact Us Form
			_gaq.push(['_trackEvent', 'Contact', 'Info Request', 'Contact Form', 1, false]);
		} else if(form_id == 5) {
			// Request a Demo Form
			_gaq.push(['_trackEvent', 'Contact', 'Info Request', 'Request Demo', 1, false]);
		} else if(form_id == 6) {
			// 5x5 form
			_gaq.push(['_trackEvent', 'Contact', 'Info Request', '5x5', 1, false]);
		} else if(form_id == 12) {
			// Footer form
			_gaq.push(['_trackEvent', 'Contact', 'Info Request', 'Footer Form', 1, false]);
		} else if(form_id == 14) {
			// Footer form
			_gaq.push(['_trackEvent', 'Blog Sidebar', 'Info Request', 'Footer Form', 1, false]);
		}
	});
        	
	// add all your scripts here
   

 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );