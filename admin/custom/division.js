
$(document).ready(function () {
    //Add
    $('.js-btndiv-add').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/div_add.php",
            data: {
                'code': $('.js-division-add').val(),
                'name': $('.js-name-add').val(),
                'acc_code': $('.js-acc-add').val(),
            },
            success: function (res) {
                alert(res);
                window.location.reload();
            }
        });

    });
    //select
    $('.js-division-edit').on("click", function () {
        $('.js-divi-edit').val($(this).closest('tr').children('td')[1].innerText);
        $('.js-name-edit').val($(this).closest('tr').children('td')[2].innerText);
        $('.js-acc-edit').val($(this).closest('tr').children('td')[3].innerText);
        $('.js-id-edit').val($(this).attr('data-id'));

    });
    //update
    $('.js-btndiv-update').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/div_update.php",
            data: {
                'id': $('.js-id-edit').val(),
                'code': $('.js-divi-edit').val(),
                'name': $('.js-name-edit').val(),
                'acc_code': $('.js-acc-edit').val(),
            },
            success: function (res) {
                alert(res);
                window.location.reload();
            }
        });
    });
    //delete
    $('.js-btndiv-delete').on("click", function () {
        if (confirm('Are you sure you want to delete into the database?')) {
            // ajax
            $.ajax({
                type: "POST",
                url: "custom/div_delete.php",
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
