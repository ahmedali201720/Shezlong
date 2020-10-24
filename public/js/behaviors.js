
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

var rate = 3;

// animate on scroll

window.addEventListener('scroll', function (e) {
    $(".navbar").fadeIn().css({ top: -50 }).animate({ top: 0 }, 2000);
});

$(".star").on('click', function () {
    var id = +($(this).attr('id'));
    if ($(this).attr('class') == "fa fa-star checked star") {
        $(this).attr('class', 'fa fa-star unchecked star');
        handleUncheckingStarGroup(id);
    }
    else if ($(this).attr('class') == "fa fa-star unchecked star") {
        $(this).attr('class', 'fa fa-star checked star');
        handleCheckingStarGroup(id);
    }
});

function handleCheckingStarGroup(id) {
    if (id === 1) {
        $('#1').attr('class', 'fa fa-star checked star');
        rate = 1;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 2) {
        $('#1').attr('class', 'fa fa-star checked star');
        $('#2').attr('class', 'fa fa-star checked star');
        rate = 2;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 3) {
        $('#1').attr('class', 'fa fa-star checked star');
        $('#2').attr('class', 'fa fa-star checked star');
        $('#3').attr('class', 'fa fa-star checked star');
        rate = 3;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 4) {
        $('#1').attr('class', 'fa fa-star checked star');
        $('#2').attr('class', 'fa fa-star checked star');
        $('#3').attr('class', 'fa fa-star checked star');
        $('#4').attr('class', 'fa fa-star checked star');
        rate = 4;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 5) {
        $('#1').attr('class', 'fa fa-star checked star');
        $('#2').attr('class', 'fa fa-star checked star');
        $('#3').attr('class', 'fa fa-star checked star');
        $('#4').attr('class', 'fa fa-star checked star');
        $('#5').attr('class', 'fa fa-star checked star');
        rate = 5;
        $('#result').html(rate.toString() + "/5");
    }
}
function handleUncheckingStarGroup(id) {
    if (id === 1) {
        $('#1').attr('class', 'fa fa-star checked star');
        $('#2').attr('class', 'fa fa-star unchecked star');
        $('#3').attr('class', 'fa fa-star unchecked star');
        $('#4').attr('class', 'fa fa-star unchecked star');
        $('#5').attr('class', 'fa fa-star unchecked star');
        rate = 1;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 2) {
        $('#2').attr('class', 'fa fa-star unchecked star');
        $('#3').attr('class', 'fa fa-star unchecked star');
        $('#4').attr('class', 'fa fa-star unchecked star');
        $('#5').attr('class', 'fa fa-star unchecked star');
        rate = 2;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 3) {
        $('#3').attr('class', 'fa fa-star unchecked star');
        $('#4').attr('class', 'fa fa-star unchecked star');
        $('#5').attr('class', 'fa fa-star unchecked star');
        rate = 3;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 4) {
        $('#4').attr('class', 'fa fa-star unchecked star');
        $('#5').attr('class', 'fa fa-star unchecked star');
        rate = 4;
        $('#result').html(rate.toString() + "/5");
    }
    else if (id === 5) {
        $('#5').attr('class', 'fa fa-star unchecked star');
        rate = 5;
        $('#result').html(rate.toString() + "/5");
    }
}

function handleSort() {
    var lang = $('html').attr('lang');
    var selected = $('.sort-select').val();
    window.location.href = "/" + lang + "/" + "sort/" + selected;
}

function handleFilter() {
    var lang = $('html').attr('lang');
    var filter = $('.filter-select').val();
    window.location.href = "/" + lang + "/" + "spec/" + filter;
}

function handleSearch() {
    var lang = $('html').attr('lang');
    var search = $('.search-form').val();
    console.log(search);
    if (search)
        window.location.href = "/" + lang + "/" + "search/" + search;
}