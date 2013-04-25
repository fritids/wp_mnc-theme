(function (window, $, undefined) {

    'use strict';
    console.log( MNC );

    // Automatic functions
    $(window).load(function(){

        // Run FitVids.js
        $('.post').find('.entry-content').fitVids();

        // Polyfill for placeholder, required & autofocus
        var minformUrl = MNC.templateUri + '/js/minform.js';
        Modernizr.load({
            test: Modernizr.input.placeholder && Modernizr.input.required && Modernizr.input.autofocus,
            nope: minformUrl,
            complete: function(){
                if( typeof $.fn.minform !== 'undefined' ){
                    $('form').minform();
                }
            }
        });

    });

    // jQuery lightBox init
    $(function(){

        var imgUrl = MNC.templateUri + '/images/lightbox/' + MNC.siteLang,
            txtImage = MNC.siteLang === 'es-AR' ? 'Imagen' : 'Image',
            txtOf = MNC.siteLang === 'es-AR' ? 'de' : 'of';

        var opts = {
            'imageLoading': imgUrl + '/lightbox-ico-loading.gif',
            'imageBtnClose': imgUrl + '/lightbox-btn-close.gif',
            'imageBtnPrev': imgUrl + '/lightbox-btn-prev.gif',
            'imageBtnNext': imgUrl + '/lightbox-btn-next.gif',
            'imageBlank': imgUrl + '/lightbox-blank.gif',
            'txtImage' : txtImage,
            'txtOf' : txtOf
        };

        $('a[rel="lightbox"]').lightBox( opts );

    });

}(window, jQuery));
