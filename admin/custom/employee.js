
$(document).ready(function () {
    function fetch_div(name, val) {
        //alert(val, 'val');
        $.ajax({
            url: "custom/div_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-div-' + name).children('option').length == 0 || name === 'edit') {
                    $('.js-div-' + name).empty();
                    $.each(data, function (key, value) {
                        $('.js-div-' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                    $(".js-div-edit option:contains(" + val + ")").attr('selected', 'selected');
                }
            }
        });
    }
    function fetch_dep(name, val) {
        $.ajax({
            url: "custom/dep_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-dep-' + name).children('option').length == 0 || name === 'edit') {
                    $('.js-dep-' + name).empty();
                    $.each(data, function (key, value) {
                        $('.js-dep-' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                    $(".js-dep-edit option:contains(" + val + ")").attr('selected', 'selected');
                }
            }
        });
    }
    function fetch_occu(name, val) {
        $.ajax({
            url: "custom/occu_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-occu-' + name).children('option').length == 0 || name === 'edit') {
                    $('.js-occu-' + name).empty();
                    $.each(data, function (key, value) {
                        $('.js-occu-' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                    $(".js-occu-edit option:contains(" + val + ")").attr('selected', 'selected');
                }
            }
        });
    }
    function fetch_branch(name, val) {
        $.ajax({
            url: "custom/branch_fetch.php",
            dataType: 'Json',
            data: {},
            success: function (data) {
                if ($('.js-branch-' + name).children('option').length == 0 || name === 'edit') {
                    $('.js-branch-' + name).empty();
                    $.each(data, function (key, value) {
                        $('.js-branch-' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                    $(".js-branch-edit option:contains(" + val + ")").attr('selected', 'selected');
                }
            }
        });
    }
    $('.js-div-add').on("click", function () {
        fetch_div('add', '');
    });
    $('.js-dep-add').on("click", function () {
        fetch_dep('add', '');
    });
    $('.js-occu-add').on("click", function () {
        fetch_occu('add', '');
    });
    $('.js-branch-add').on("click", function () {
        fetch_branch('add', '');
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
                'gender': $("input[name='agender']:checked").val(),
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
        (x == "male") ? ($('.js-m-edit').prop("checked", true)) : ($('.js-f-edit').prop("checked", true));
        $('select option:selected').removeAttr('selected');
        fetch_div('edit', $(this).closest('tr').children('td')[4].innerText);
        $(".js-div-edit option:contains(" + $(this).closest('tr').children('td')[4].innerText + ")").attr('selected', 'selected');

        fetch_dep('edit', $(this).closest('tr').children('td')[5].innerText);
        $(".js-dep-edit option:contains(" + $(this).closest('tr').children('td')[5].innerText + ")").attr('selected', 'selected');

        fetch_occu('edit', $(this).closest('tr').children('td')[6].innerText);
        $(".js-occu-edit option:contains(" + $(this).closest('tr').children('td')[6].innerText + ")").attr('selected', 'selected');

        fetch_branch('edit', $(this).closest('tr').children('td')[7].innerText);
        $(".js-branch-edit option:contains(" + $(this).closest('tr').children('td')[7].innerText + ")").attr('selected', 'selected');
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
            url: "custom/emp_update.php",
            data: {
                'code': $('.js-empcode-edit').val(),
                'fname': $('.js-fname-edit').val(),
                'sname': $('.js-sname-edit').val(),
                'gender': $("input[name='egender']:checked").val(),
                'divi': $('.js-div-edit').val(),
                'dep': $('.js-dep-edit').val(),
                'occu': $('.js-occu-edit').val(),
                'branch': $('.js-branch-edit').val(),
                'dob': $('.js-dob-edit').val(),
                'doj': $('.js-doj-edit').val(),
                'phone': $('.js-phone-edit').val(),
                'address': $('.js-address-edit').val(),
                'basic': $('.js-basic-edit').val(),
                'tax': $('.js-tax-edit').val(),
                'npf': $('.js-npf-edit').val(),
                'npfp': $('.js-npfp-edit').val(),
                'npfno': $('.js-npfno-edit').val(),
                'emptype': $('.js-emptype-edit').val(),
                'id': $('.js-id-edit').val(),

            },
            success: function (res) {
                alert(res, "res");
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
                url: "custom/emp_delete.php",
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
