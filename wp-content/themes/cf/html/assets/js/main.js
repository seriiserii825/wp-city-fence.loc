'use strict';
jQuery(document).ready(function($){

    /*
          https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
          ===========================*/
    $("html").easeScroll({
        frameRate: 60,
        animationTime: 1000,
        stepSize: 90,
        pulseAlgorithm: 1,
        pulseScale: 8,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
        keyboardSupport: true,
        arrowScroll: 50,
        touchpadSupport: true,
        fixedBackground: true
    });

    /* show header-menu
    ====================================================*/
    $('#js-show-menu').on('click', function(){
        $('#js-menu').slideToggle();
    });

    /* show categories in header
    ====================================================*/
    $('#js-show-categories').on('click', function(){
        $('#js-categories').slideToggle();
    });

    /* gost slider arrows hover
    ====================================================*/
    $('#js-gost-slider .fa-chevron-right, #js-gost-slider-wrap .block-right').on('mouseenter', function(){
        $('#js-gost-slider-wrap .block-right').css('opacity', '1');
    });

    $('#js-gost-slider .fa-chevron-right, #js-gost-slider-wrap .block-right').on('mouseleave', function(){
        $('#js-gost-slider-wrap .block-right').css('opacity', '0');
    });

    $('#js-gost-slider .fa-chevron-left, #js-gost-slider-wrap .block-left').on('mouseenter', function(){
        $('#js-gost-slider-wrap .block-left').css('opacity', '1');
    });

    $('#js-gost-slider .fa-chevron-left, #js-gost-slider-wrap .block-left').on('mouseleave', function(){
        $('#js-gost-slider-wrap .block-left').css('opacity', '0');
    });

    /* equal heightfor blocks in for-what
    ====================================================*/

    $('#js-sidebar__list .sidebar__inner-list').hide();
    $('#js-sidebar__list .sidebar__list-item:first-child .sidebar__inner-list').show();

    /* show sidebar category list
    ====================================================*/
    $('#js-sidebar__list .sidebar__list-link').on('click', function(e){
        e.preventDefault();

        let sidebarListLink = 'sidebar__list-link';
        let sidebarInnerLink = 'sidebar__inner-list-link';

        if(e.target.getAttribute('class') === sidebarListLink) {
            let innerList = $(this).next('.sidebar__inner-list');

            if(innerList.is(':visible')) {
                $(this).closest('.sidebar__list-item').removeClass('active');
                innerList.slideUp();
            } else {
                $('#js-sidebar__list .sidebar__inner-list').slideUp();
                $('#js-sidebar__list .sidebar__list-item').removeClass('active');
                $(this).closest('.sidebar__list-item').addClass('active');
                innerList.slideDown();
            }
        } else if(e.target.getAttribute('class') === sidebarInnerLink) {
            if($(e.target).parent('li').hasClass('active')) {
                $(e.target).parent('li').removeClass('active');
            } else {
                $('#js-sidebar__list .sidebar__inner-list-item').removeClass('active');
                $(e.target).parent('li').addClass('active');
            }
        }
    });

    $('#js-sidebar__list > a').on('click', function(e){
        e.preventDefault();
    });

    /* show modal
    ====================================================*/
    $('#js-show-modal').on('click', function(){
        $('#js-overlay').fadeIn('600');
        $('#js-modal').fadeIn(1000);
    });

    $('#js-close-modal, #js-overlay').on('click', function(){
        $('#js-overlay').fadeOut('600');
        $('#js-modal').fadeOut('200');
    });
});


