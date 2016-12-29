(function() {
    'use strict';

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style');
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        );
        document.querySelector('head').appendChild(msViewportStyle);
    }

})();
function scroller(scroller) {
    if(window.innerWidth > 767)
    {
        var next     = scroller.next('.text-content-navigation').find('.text-content-next');
        var prev     = scroller.next('.text-content-navigation').find('.text-content-prev');
        var scrollbar = scroller.find('.swiper-scrollbar');
        scroller.swiper({
            scrollbar: scrollbar,
            direction: 'vertical',
            slidesPerView: 'auto',
            mousewheelControl: true,
            freeMode: true,
            grabCursor: true,
            nextButton: next,
            prevButton: prev
        });
    }
}

function slider(slider) {
    var next   = slider.find('.slider-navigation').find('.slider-next');
    var prev   = slider.find('.slider-navigation').find('.slider-prev');
    slider.swiper({
        loop: true,
        autoplay: 2500,
        nextButton: next,
        prevButton: prev
    });
}

function thumbs(thumbs) {
    if(window.innerWidth > 767)
    {
        var next     = thumbs.next('.text-content-navigation').find('.text-content-next');
        var prev     = thumbs.next('.text-content-navigation').find('.text-content-prev');

        thumbs.swiper({
            slidesPerView: 3,
            direction: 'vertical',
            nextButton: next,
            prevButton: prev,
            spaceBetween: 30,
            loop: true
        });
    }
}

(function($){
    $(document).ready(function(){
        $(document).imagesLoaded(function(){
            $('.loading').fadeOut('slow');
        });

        $(document).on('click', '.thumbnails a', function(event){
            event.preventDefault();
            var hash = $(this).attr('href').split('#')[1];
            $('.thumb-tab').removeClass('active');
            $('#'+hash).addClass('active');
            return false;
        });

        $('.text-content').each(function(){
            var textContent = $(this);
            scroller(textContent);
        });

        $('.content-slider').each(function(){
            var slide = $(this);
            slider(slide);
        });

        $('.thumbnails').each(function(){
            var slide = $(this);
            thumbs(slide);
        });

        $(document).on('click', '.main-nav li > a', function(event){
            event.preventDefault();
            var hash = $(this).attr('href').split('#')[1];
            $('.main-nav li').removeClass('active');
            $(this).parent('li').addClass('active');
            $('.content-wrapper .tab').removeClass('active');
            $('#'+hash).addClass('active');


            // fix bug
            $('.text-content').each(function(){
                var textContent = $(this);
                scroller(textContent);
            });

            $('.content-slider').each(function(){
                var slide = $(this);
                slider(slide);
            });

            $('.thumbnails').each(function(){
                var slide = $(this);
                thumbs(slide);
            });

            return false;
        });

        $(document).on('click', '.nav-toggle', function(event){
            event.preventDefault();
            $('.main-content').toggleClass('active-menu');
            return false;
        });
    });
})(jQuery);
