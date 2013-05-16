(function (window, $, undefined) {

    'use strict';
    console.log( MNC );

    // Automatic functions
    $(window).load(function(){

        // Run FitVids.js
        $('.post').find('.entry-content').fitVids();

        // Polyfill for placeholder, required & autofocus
        /*var minformUrl = MNC.templateUri + '/js/minform.js';
        Modernizr.load({
            test: Modernizr.input.placeholder && Modernizr.input.required && Modernizr.input.autofocus,
            nope: minformUrl,
            complete: function(){
                if( typeof $.fn.minform !== 'undefined' ){
                    $('form').minform();
                }
            }
        });*/

    });

    // jQuery lightBox init
    $(function(){

        $('a[rel="fancybox"]').fancybox();

    });

}(window, jQuery));
