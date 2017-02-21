var removeRest = function($rest) {
    $.ajax({
        method: 'POST',
        url: '/restoraunt/remove',
        data: {
            restoraunt_id: $($rest).parents('.cabinet-table').find('.restoraunt-id').val()
        }
    }).done(function () {
        $($rest).parents('.cabinet-table').remove();
        location.reload();
    })
};

var editRest = function($rest) {
    $.ajax({
        method: 'POST',
        url: '/restoraunt/edit-social',
        data: {
            restoraunt_id: $($rest).parents('.cabinet-table').find('.restoraunt-id').val(),
            sitename: $($rest).parents('.cabinet-table').find('.sitename').val(),
            vkLink: $($rest).parents('.cabinet-table').find('.vk-link').val(),
            fbLink: $($rest).parents('.cabinet-table').find('.fb-link').val(),
            instaLink: $($rest).parents('.cabinet-table').find('.insta-link').val(),
            kitchen: $($rest).parents('.cabinet-table').find('.kitchen').val(),
            bill: $($rest).parents('.cabinet-table').find('.bill').val(),
            totalTables: $($rest).parents('.cabinet-table').find('.total-tables').val()

        }
    }).done(function () {
        location.reload();
    })
};



