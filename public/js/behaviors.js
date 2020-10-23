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

// animate on scroll

window.addEventListener('scroll', function (e) {
    $(".navbar").fadeIn().css({ top: -50 }).animate({ top: 0 }, 2000);
});