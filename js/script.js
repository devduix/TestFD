
$(document).ready(function () {

    $(".old_price").each(function () {
        var price = $(this).text();
        $(this).text("Rp " + parseFloat(price).toLocaleString());
    });

    $(".new_price").each(function () {
        var price = $(this).text();
        var textPrice = parseFloat(price).toLocaleString().toString();
        var splitNumber = textPrice.split(',');
        var big = splitNumber[0];
        var small = splitNumber[1];
        $(this).html("Rp <span>" + big + "</span>." + "<strong>" + small + "</strong>/ bln");
    });

    $(".user p strong").each(function () {
        $(this).text(parseFloat($(this).text()).toLocaleString().toString());
    });

});