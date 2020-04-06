jQuery(document).ready(function($){
    ////----- Open the modal to CREATE a link -----////
    jQuery('#btn-add').click(function () {
        jQuery('#btn-save').val("add");
        jQuery('#modal-change-username').trigger("reset");
        jQuery('#linkEditorModal').modal('show');
    });
 
    ////----- Open the modal to UPDATE a link -----////
    // jQuery('body').on('click', '.open-modal', function () {
    //     var link_id = $(this).val();
    //     $.get('links/' + link_id, function (data) {
    //         jQuery('#link_id').val(data.id);
    //         jQuery('#link').val(data.url);
    //         jQuery('#description').val(data.description);
    //         jQuery('#btn-save').val("update");
    //         jQuery('#linkEditorModal').modal('show');
    //     })
    // });


    jQuery('body').on('click', '.open-modal', function () {
        var user_id = $(this).val();
        $.get('profiles/' + user_id, function (data) {
            jQuery('#user_id').val(data.user_id);
            jQuery('#title').val(data.title);
            jQuery('#description').val(data.description);
            jQuery('#gender').val(data.gender);
            jQuery('#phone').val(data.phone);
            jQuery('#btn-save').val("update");
            jQuery('#linkEditorModal').modal('show');
        })
    });
 
    // Clicking the save button on the open modal for both CREATE and UPDATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            name: jQuery('#name').val(),
            username: jQuery('#username').val(),
            email: jQuery('#email').val(),
            password:'password123',
            usertype:'footballer'
        };
        var state = jQuery('#btn-save').val();
        var type = "POST";
        var user_id = jQuery('#user_id').val();
        var ajaxurl = 'users';
        if (state == "update") {
            type = "PUT";
            ajaxurl = 'users/' + user_id;
        }
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var link = '<tr id="link' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.usernmae + '</td>';
                link += '<td><button class="btn btn-info open-modal" value="' + data.id + '">Edit</button>&nbsp;';
                link += '<button class="btn btn-danger delete-link" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add") {
                    jQuery('#links-list').append(link);
                } else {
                    $("#link" + link_id).replaceWith(link);
                }
                jQuery('#modalFormData').trigger("reset");
                jQuery('#linkEditorModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
 
    ////----- DELETE a link and remove from the page -----////
    jQuery('.delete-link').click(function () {
        var link_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: 'users/' + user_id,
            success: function (data) {
                console.log(data);
                $("#user" + user_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});