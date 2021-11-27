
$(document).ready(function () {
    function fetch_emp(name, val) {
        $.ajax({
            url: "custom/fetch_emp.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-employee-' + name).children('option').length == 0 || name === 'edit') {
                    $('.js-employee-' + name).empty();
                    $.each(data, function (key, value) {
                        $('.js-employee-' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                    $(".js-employee-edit option:contains(" + val + ")").attr('selected', 'selected');
                }
            }
        });
    }
    $('.js-employee-add').on("click", function () {
        fetch_emp('add', '');
    });
    //Add
    $('.js-btn-add').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/bank_add.php",
            data: {
                'ecode': $('.js-employee-add').val(),
                'bcode': $('.js-bank-add').val(),
                'brcode': $('.js-branch-add').val(),
                'accno': $('.js-acn-add').val(),
            },
            success: function (res) {
                alert(res);
                window.location.reload();
            }
        });

    });
    //select
    $('.js-btn-select').on("click", function () {
        $('select option:selected').removeAttr('selected');
        fetch_emp('edit', $(this).closest('tr').children('td')[1].innerText);
        $(".js-employee-edit option:contains(" + $(this).closest('tr').children('td')[1].innerText + ")").attr('selected', 'selected');
        $('.js-bank-edit').val($(this).closest('tr').children('td')[2].innerText);
        $('.js-branch-edit').val($(this).closest('tr').children('td')[3].innerText);
        $('.js-acn-edit').val($(this).closest('tr').children('td')[4].innerText);
        $('.js-id-edit').val($(this).attr('data-id'));

    });
    //update
    $('.js-btndiv-update').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/bank_update.php",
            data: {
                'id': $('.js-id-edit').val(),
                'ecode': $('.js-employee-edit').val(),
                'bcode': $('.js-bank-edit').val(),
                'brcode': $('.js-branch-edit').val(),
                'accno': $('.js-acn-edit').val(),
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
                url: "custom/bank_delete.php",
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
