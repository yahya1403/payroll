
$(document).ready(function () {
    //Add
    $('.js-btn-add').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/occupation_add.php",
            data: {
                'code': $('.js-occ-add').val(),
                'name': $('.js-name-add').val(),
            },
            success: function (res) {
                alert(res);
                window.location.reload();
            }
        });

    });
    //select
    $('.js-btn-select').on("click", function () {
        $('.js-occ-edit').val($(this).closest('tr').children('td')[1].innerText);
        $('.js-name-edit').val($(this).closest('tr').children('td')[2].innerText);
        $('.js-id-edit').val($(this).attr('data-id'));

    });
    //update
    $('.js-btndiv-update').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/occupation_update.php",
            data: {
                'id': $('.js-id-edit').val(),
                'code': $('.js-occ-edit').val(),
                'name': $('.js-name-edit').val(),
            },
            success: function (res) {
                alert(res);
                window.location.reload();
            }
        });
    });
    //delete
    $('.js-btn-delete').on("click", function () {
        if (confirm('Are you sure you want to delete into the database?')) {
            // ajax
            $.ajax({
                type: "POST",
                url: "custom/occupation_delete.php",
                data: {
                    'id': $(this).attr('data-id'),
                },
                success: function (res) {
                    alert(res);
                    window.location.reload();
                }
            });
        }

    });
});
