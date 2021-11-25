
$(document).ready(function () {
    $('.js-div-add').on("click", function () {
        $.ajax({
            url: "custom/div_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-div-add ').children('option').length == 0) {
                    $('.js-div-add').empty();
                    $.each(data, function (key, value) {
                        $('.js-div-add').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            }
        });
    });
    $('.js-dep-add').on("click", function () {
        $.ajax({
            url: "custom/dep_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-dep-add ').children('option').length == 0) {
                    $('.js-dep-add').empty();
                    $.each(data, function (key, value) {
                        $('.js-dep-add').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            }
        });
    });
    $('.js-occu-add').on("click", function () {
        $.ajax({
            url: "custom/occu_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-occu-add ').children('option').length == 0) {
                    $('.js-occu-add').empty();
                    $.each(data, function (key, value) {
                        $('.js-occu-add').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            }
        });
    });
    $('.js-branch-add').on("click", function () {
        $.ajax({
            url: "custom/branch_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-branch-add ').children('option').length == 0) {
                    $('.js-branch-add').empty();
                    $.each(data, function (key, value) {
                        $('.js-branch-add').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            }
        });
    });
    //Add
    $('.js-btn-add').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/emp_add.php",
            data: {
                'code': $('.js-empcode-add').val(),
                'fname': $('.js-fname-add').val(),
                'sname': $('.js-sname-add').val(),
                'gender': $("input[name='gender']:checked").val(),
                'divi': $('.js-div-add').val(),
                'dep': $('.js-dep-add').val(),
                'occu': $('.js-occu-add').val(),
                'branch': $('.js-branch-add').val(),
                'dob': $('.js-dob-add').val(),
                'doj': $('.js-doj-add').val(),
                'phone': $('.js-phone-add').val(),
                'address': $('.js-address-add').val(),
                'basic': $('.js-basic-add').val(),
                'tax': $('.js-tax-add').val(),
                'npf': $('.js-npf-add').val(),
                'npfp': $('.js-npfp-add').val(),
                'npfno': $('.js-npfno-add').val(),
                'emptype': $('.js-emptype-add').val(),
            },
            success: function (res) {
                alert(res);
                window.location.reload();
            }
        });

    });
    //select
    $('.js-btn-select').on("click", function () {
        $('.js-empcode-edit').val($(this).closest('tr').children('td')[0].innerText);
        $('.js-fname-edit').val($(this).closest('tr').children('td')[1].innerText);
        $('.js-sname-edit').val($(this).closest('tr').children('td')[2].innerText);
        var x = $(this).closest('tr').children('td')[3].innerText;
        (x == "male") ? ($('.js-m-edit').prop("checked", true)) : ($('.js-f-edit').prop("checked", true))
        $('.js-div-edit').val($(this).closest('tr').children('td')[4].innerText);
        $('.js-dep-edit').val($(this).closest('tr').children('td')[5].innerText);
        $('.js-occu-edit').val($(this).closest('tr').children('td')[6].innerText);
        $('.js-branch-edit').val($(this).closest('tr').children('td')[7].innerText);
        $('.js-dob-edit').val($(this).closest('tr').children('td')[8].innerText);
        $('.js-doj-edit').val($(this).closest('tr').children('td')[9].innerText);
        $('.js-phone-edit').val($(this).closest('tr').children('td')[10].innerText);
        $('.js-address-edit').val($(this).closest('tr').children('td')[11].innerText);
        $('.js-basic-edit').val($(this).closest('tr').children('td')[12].innerText);
        $('.js-tax-edit').val($(this).closest('tr').children('td')[13].innerText);
        $('.js-npf-edit').val($(this).closest('tr').children('td')[14].innerText);
        $('.js-npfp-edit').val($(this).closest('tr').children('td')[15].innerText);
        $('.js-npfno-edit').val($(this).closest('tr').children('td')[16].innerText);
        $('.js-emptype-edit').val($(this).closest('tr').children('td')[17].innerText);
        $('.js-id-edit').val($(this).attr('data-id'));

    });
    //update
    $('.js-btndiv-update').on("click", function () {
        // ajax
        $.ajax({
            type: "POST",
            url: "custom/branch_update.php",
            data: {
                'id': $('.js-id-edit').val(),
                'code': $('.js-branch-edit').val(),
                'name': $('.js-name-edit').val(),
                'acc': $('.js-acc-edit').val(),
                'bsp': $('.js-bsp-edit').val(),
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
                url: "custom/branch_delete.php",
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
