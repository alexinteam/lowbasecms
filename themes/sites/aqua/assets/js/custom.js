/**
 * Created by antonshell on 08.02.2017.
 */

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