/**
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
 */

( function( $ ) {
    $( document ).ready(function() {

       /*------------- Menu Functionality --------------------*/
        $('#cssmenu').prepend('<div id="indicatorContainer"><div id="pIndicator"><div id="cIndicator"></div></div></div>');
        var activeElement = $('#cssmenu>ul>li:first');

        $('#cssmenu>ul>li').each(function() {
            if ($(this).hasClass('active')) {
                activeElement = $(this);
            }
        });


        var posLeft = activeElement.position().left;
        var elementWidth = activeElement.width();
        posLeft = posLeft + elementWidth/2 -6;
        if (activeElement.hasClass('has-sub')) {
            posLeft -= 6;
        }

        $('#cssmenu #pIndicator').css('left', posLeft);
        var element, leftPos, indicator = $('#cssmenu pIndicator');

        $("#cssmenu>ul>li").hover(function() {
                element = $(this);
                var w = element.width();
                if ($(this).hasClass('has-sub'))
                {
                    leftPos = element.position().left + w/2 - 12;
                }
                else {
                    leftPos = element.position().left + w/2 - 6;
                }

                $('#cssmenu #pIndicator').css('left', leftPos);
            }
            , function() {
                $('#cssmenu #pIndicator').css('left', posLeft);
            });

        $('#cssmenu>ul').prepend('<li id="menu-button"><a>Menu</a></li>');
        $( "#menu-button" ).click(function(){
            if ($(this).parent().hasClass('open')) {
                $(this).parent().removeClass('open');
            }
            else {
                $(this).parent().addClass('open');
            }
        });

        /*------------- photo gallery Functionality --------------------*/

        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }

        });

        $('.image-popup-fit-width').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            image: {
                verticalFit: false
            }
        });

        $('.image-popup-no-margins').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });




    });
} )( jQuery );
