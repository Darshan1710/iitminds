//delete admin
$('.delete_admin').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'admin';

    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete slider
$('.delete_slider').on('click', function () {
    var delete_id = $(this).attr('id');
    var table_name = 'slider';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete result
$('.delete_result').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'result';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete news
$('.delete_news').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'news';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete mediapress
$('.delete_mediapress').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'mediapress';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete opening hours
$('.delete_hours').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'opening_hours';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete feedback
$('.delete_feedback').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'feedback';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

//delete courses
$('.delete_courses').on('click', function () {

    var delete_id = $(this).attr('id');
    var table_name = 'courses';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

$('.delete_blog').on('click', function () {
    var delete_id = $(this).attr('id');
    var table_name = 'blog';
    if (delete_id != '') {
        delete_ids(delete_id, table_name);
    }
});

function delete_ids(delete_id, table_name) {

    var base_url = $('#base_url').val();
    $.ajax({
        type: 'post',
        url: base_url + '/admin/delete',
        data: {table_name: table_name, delete_id: delete_id},
        cache: false,
        success: function (data) {
            if (data == 1) {
                location.reload();
            } else {
                alert('Some error occur');
            }

        }
    });
}


$('.level_status').on('click', function () {
    var id = $(this).attr('id');
    var table_name = 'levels';
    if (id != '') {
        change_status(id, table_name);
    }
});

$('.admin_status').on('click', function () {
    var id = $(this).attr('id');
    var table_name = 'admin';
    if (id != '') {
        change_status(id, table_name);
    }
});

$('.download_status').on('click', function () {
    var id = $(this).attr('id');
    var table_name = 'downloads';
    if (id != '') {
        change_status(id, table_name);
    }
});

function change_status(id, table_name) {
    var base_url = $('#base_url').val();

    $.ajax({
        type: 'post',
        url: base_url + '/cms/admin/change_status',
        data: {table_name: table_name, id: id},
        cache: false,
        success: function (data) {
            if (data == 1) {
               // location.reload();
            } else {
                alert('Some erroe occur');
            }
        }
    });
}
