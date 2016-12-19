$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.up-btn').fadeIn();
        } else {
            $('.up-btn').fadeOut();
        }
    });

    $('.up-btn').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1200);
        return false;
    });

});

jQuery(document).ready(function() {
    jQuery('.anim-right').addClass("hidden-block").viewportChecker({
        classToAdd: 'visible-block animated fadeInLeft', // Class to add to the elements when they are visible
        offset: 100
    });
    jQuery('.anim-left').addClass("hidden-block").viewportChecker({
        classToAdd: 'visible-block animated fadeInRight', // Class to add to the elements when they are visible
        offset: 100
    });
    jQuery('.anim').addClass("hidden-block").viewportChecker({
        classToAdd: 'visible-block animated fadeIn', // Class to add to the elements when they are visible
        offset: 100
    });

    jQuery('.anim-third').addClass("hidden-block").viewportChecker({
        classToAdd: 'visible-block animated fadeInLeft', // Class to add to the elements when they are visible
        offset: 100
    });
});

jQuery('.wrapper-portfolio').addClass("hidden-block").viewportChecker({
    classToAdd: 'visible-block animated fadeInRight', // Class to add to the elements when they are visible
    offset: 100
});