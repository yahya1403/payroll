
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    $('.js-division-edit').on("click", function () {
        $('.js-division-edit').val($(this).closest('tr').children('td')[1].innerText);
        $('.js-name-edit').val($(this).closest('tr').children('td')[2].innerText);
        $('.js-acc-edit').val($(this).closest('tr').children('td')[3].innerText);
    });
    $('.js-btndiv-add').on("click", function () {
        var x = $('.js-division-add').val();
        var y = $('.js-name-add').val();
        var z = $('.js-acc-add').val();
        alert(x + y + z);
    });
    $('.js-btndiv-update').on("click", function () {
        var x = $('.js-division-edit').val();
        var y = $('.js-name-edit').val();
        var z = $('.js-acc-edit').val();
        alert(x + y + z);
    });
    $('.js-btndiv-delete').on("click", function () {
        var x = $(this).closest('tr').children('td')[0].innerText;
        alert(x);
    });
});
