jQuery(window).on('load', function () {
    setTimeout(() => {
        jQuery('#page').removeClass('load');
    }, 2500);
});

jQuery(document).ready(function () {
    var sliderForm = tns({
        container: '#formatsSlide',
        items: 5,
        slideBy: 5,
        // autoplay: true,
        controls: true,
        // nav: true,
        "mouseDrag": true,
        "swipeAngle": false,
        autoplayButtonOutput: false,
        responsive: {
            640: {
                edgePadding: 0,
                gutter: 50,
                items: 1,
                slideBy: 1,
            },
            900: {
                items: 5,
                edgePadding: 20,
                gutter: 20,
                slideBy: 1,
            },
        }
    });
    // const sliderpict = document.querySelector('#sliderpict');
    // if (sliderpict) {
    //     var sliderPict = tns({
    //         container: sliderpict,
    //         items: 1.2,
    //         slideBy: 1,
    //         autoplay: true,
    //         controls: true,
    //         center: true,
    //         // nav: true,
    //         "mouseDrag": true,
    //         "swipeAngle": false,
    //         autoplayButtonOutput: false
    //     });
    // }
    // var slider1 = tns({
    //     container: '#oldspice .thisslide',
    //     items: 1.1,
    //     slideBy: 1,
    //     autoplay: true,
    //     controls: false,
    //     nav: false,
    //     autoplayButtonOutput: false,
    //     "mouseDrag": true,
    //     "swipeAngle": false,
    //     "center": true,
    // });

    // jQuery('.list-of-cases li h3').on('click', function () {
    //     var cases = jQuery(this).data('name');
    //     console.log(cases);
    //     jQuery('.list-of-cases li h3').removeClass('active');
    //     jQuery(this).addClass('active');
    //     jQuery('.casedetail').removeClass('active');
    //     jQuery('#' + cases).addClass('active');
    //     const sliderNav = document.querySelector('#' + cases + ' .thisslide');
    //     // console.log(sliderNav);
    //     if (slider1.isOn) {
    //         slider1.destroy();
    //     }
    //     // slider = slider.rebuild();
    //     slider2 = tns({
    //         container: sliderNav,
    //         items: 1,
    //         slideBy: 1,
    //         autoplay: true,
    //         controls: false,
    //         nav: false,
    //         "mouseDrag": true,
    //         "swipeAngle": false,
    //         "center": true,
    //         autoplayButtonOutput: false
    //     });
    // });
    // Get media - with autoplay disabled (audio or video)
    var media = jQuery('#videoclip');
    var tolerancePixel = 10;
    var hasPlayMap = {};
    function checkMedia() {
        // Get current browser top and bottom
        var scrollTop = jQuery(window).scrollTop() + tolerancePixel;
        var scrollBottom = jQuery(window).scrollTop() + jQuery(window).height() - tolerancePixel;

        //if (jQuery(window).scrollTop() > jQuery(window).height() - 100) {
        media.each(function (index, el) {
            var yTopMedia = jQuery(this).offset().top;
            var yBottomMedia = jQuery(this).height() + yTopMedia;

            if (scrollTop > yTopMedia) {
                // var thisId = jQuery(this).attr("id");
                // if (hasPlayMap[thisId]){
                //    return;
                // }
                // hasPlayMap[thisId] = true;
                jQuery(this).get(0).play();
                setTimeout(() => {
                    jQuery('#abrir').fadeIn();
                }, 1000);
                setTimeout(() => {
                    jQuery('#plegar').fadeIn();
                }, 3000);
                setTimeout(() => {
                    jQuery('#usar').fadeIn();
                }, 7000);
            } else {
                jQuery(this).get(0).pause();
            }
        });

        //}
    }
    jQuery(document).on('scroll', checkMedia);
});