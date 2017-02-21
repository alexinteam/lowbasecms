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


    //
    // $('.change_restoraut').click(function () {
    //     $.ajax({
    //         method: 'POST',
    //         url: '/restoraunt/change-featured',
    //         data: {
    //             restoraunt_id: $(this).parents('li').attr('restoraunt_id')
    //         }
    //     }).done(function (data) {
    //         var $response = JSON.parse(data);
    //         if($response.status) {
    //             $('#featuredRestoraunt').text($response.featuredRestoraunt.lb_restoraunts_name);
    //             $('.dropdown-menu-restaurant').empty();
    //             for(var $i=0; $i<$response.allRestoraunts.length; $i++) {
    //                 var $rest = $response.allRestoraunts[$i];
    //                 $('.dropdown-menu-restaurant').append('<li restoraunt_id="'+$rest.lb_restoraunts_id+'"><a class="change_restoraut" href="#">'+$rest.lb_restoraunts_name+'</a></li>');
    //             }
    //         }
    //     })
    // });
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


var changeRestoraut = function($restOption) {
    $.ajax({
        method: 'POST',
        url: '/restoraunt/change-featured',
        data: {
            restoraunt_id: $($restOption).parents('li').attr('restoraunt_id')
        }
    }).done(function (data) {
        var $response = JSON.parse(data);
        if($response.status) {
            $('#featuredRestoraunt').text($response.featuredRestoraunt.lb_restoraunts_name);
            $('.dropdown-menu-restaurant').empty();
            for(var $i=0; $i<$response.allRestoraunts.length; $i++) {
                var $rest = $response.allRestoraunts[$i];
                $('.dropdown-menu-restaurant').append('<li restoraunt_id="'+$rest.lb_restoraunts_id+'"><a onclick="changeRestoraut(this)" class="change_restoraut" href="#">'+$rest.lb_restoraunts_name+'</a></li>');
            }
            location.reload();
        }
    })
};