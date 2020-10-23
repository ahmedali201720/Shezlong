// Set toggle functionality between chat visibility
$('.img_msg').click(function () {
    if ($(this).attr('src') === "/img/message.svg") {
        $(this).attr('src', '/img/down-arrow.svg');
        $(".chat").show();
    }
    else {
        $(this).attr('src', '/img/message.svg');
        $(".chat").hide();
    }
});