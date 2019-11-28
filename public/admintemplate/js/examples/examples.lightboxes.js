(function($) {
    'use strict';
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup( {
        type: 'iframe', mainClass: 'mfp-fade', removalDelay: 160, preloader: false, fixedContentPos: false
    }
    );
    $('.popup-with-zoom-anim').magnificPopup( {
        type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: false, midClick: true, removalDelay: 300, mainClass: 'my-mfp-zoom-in'
    }
    );
    $('.popup-with-move-anim').magnificPopup( {
        type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: false, midClick: true, removalDelay: 300, mainClass: 'my-mfp-slide-bottom'
    }
    );
    $('.popup-with-form').magnificPopup( {
        type:'inline', preloader:false, focus:'#judul', callbacks: {
            open:function() {
                $('body').addClass('lightbox-opened');
            }
            , close:function() {
                $('body').removeClass('lightbox-opened');
            }
            , beforeOpen:function() {
                if($(window).width()<700) {
                    this.st.focus=false;
                }
                else {
                    this.st.focus='#judul';
                }
            }
        }
    }
    );
    $('.simple-ajax-popup').magnificPopup( {
        type:'ajax', callbacks: {
            open:function() {
                $('body').addClass('lightbox-opened');
            }
            , close:function() {
                $('body').removeClass('lightbox-opened');
            }
        }
    }
    );
}

).apply(this, [jQuery]);