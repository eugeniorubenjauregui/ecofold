jQuery(window).on('load', function () {
    setTimeout(() => {
        jQuery('#page').removeClass('load');
    }, 1000);
});
jQuery(document).ready(function ($) {
    function scrollVideo() {
        var video = $('#videoclip').get(0),
            videoLength = video.duration,
            scrollPosition = $(document).scrollTop();
        // console.log(videoLength);
        video.currentTime = (scrollPosition / ($(document).height() - $(window).height())) * videoLength;
        // console.log(video.currentTime);
        if (video.currentTime >= 1) {
            $('#abrir').fadeIn();
        }
        if (video.currentTime >= 3) {
            $('#plegar').fadeIn();
        }
        if (video.currentTime >= 7) {
            $('#usar').fadeIn();
        }
        if (video.currentTime >= 9) {
            $('#video').css({                      // if you scroll above it
                // position: 'static'
            });
            console.log('se acabó el video...');

        }

        // } else {
        //     $('#video').css({                      // scroll to that element or below it
        //         position: 'fixed',
        //         top: '0',
        //         left: '0'
        //     });
        // }
    }

    var fixmeTop = $('#video').offset().top;       // get initial position of the element
    window.addEventListener('scroll', () => {
        var currentScroll = $(window).scrollTop(); // get current position

        if (currentScroll >= fixmeTop) {           // apply position: fixed if you
            // $('#video').css({                      // scroll to that element or below it
            //     position: 'fixed',
            //     top: '0',
            //     left: '0'
            // });
            scrollVideo();
        } else {                                   // apply position: static
            $('#video').css({                      // if you scroll above it
                // position: 'static'
            });
        }

    });


});