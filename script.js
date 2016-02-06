$(document).ready(function() {

    /////////////////////////
    //slideshow controllers//
    /////////////////////////
    countSlides();
    $(".right").mouseup(function() {
        right($(this).parent().parent().attr('id'));
    });
    $(".left").mouseup(function() {
        left($(this).parent().parent().attr('id'));
    });
    $('.blut').mouseup(function() {
        gotoslide($(this).parent().parent().parent().attr('id'), parseInt($(this).attr('id').replace('#', '')));
    })
});

///////////////////////////////////////////////////////////////////////////////\
// slide show animator															|\
//<div class="slideshow" id="slideshowname">									||
//	<div class="slides">														||
//		<div class="slide" data-slide="home"><img src="someimg.***" /></div>	||
//		<div class="slide"><img src="someimg.***" /></div>						||
//	</div>																		||
//	<div class="navigators">													||
//		<div class="left" ></div>												||
//		<div class="right" ></div>												||
//		<div class="status"></div>												||
//	</div>																		||
//</div>																		|/
/////////////////////////////////////////////////////////////////////////////////
function countSlides() {
    $(".slideshow").each(function() {
        var countSlides = 0;
        $(this).find('.slides > .slide').each(function() {
            countSlides += 1;
            $(this).attr("data-numSlide", countSlides);
            $(this).parent().parent().find('.navigators > .status').append('<div class="blut" id="' + countSlides + '"></div>');
        });
        arrangeSlides($(this).attr('id'));
    });
}

function arrangeSlides(slideshowname) {
    $('#' + slideshowname + ' > .slides > .slide[data-slide="home"]').attr("id", "home");
    $('#' + slideshowname + ' > .navigators > .status > .blut').removeClass('current');
    $('#' + parseInt($('#' + slideshowname + ' > .slides > .slide[data-slide="home"]').attr("data-numSlide"))).addClass('current');
    var rightSlide = parseInt($('#' + slideshowname + ' > .slides > .slide[data-slide="home"]').attr("data-numSlide")) + 1;
    var leftSlide = parseInt($('#' + slideshowname + ' > .slides > .slide[data-slide="home"]').attr("data-numSlide")) - 1;
    $('#' + slideshowname + ' > .slides > .slide[data-numSlide=' + rightSlide + ']').attr("id", "rightSlide");
    $('#' + slideshowname + ' > .slides > .slide[data-numSlide=' + leftSlide + ']').attr("id", "leftSlide");
}

function right(slideshowname) {
    if ($('#' + slideshowname + '> .slides > #rightSlide').attr('data-numSlide') != null) {
        $('#' + slideshowname + '> .slides > #rightSlide').attr('data-slide', 'home').animate({
            'margin-left': 0
        }, 600);
        $('#' + slideshowname + '> .slides > #home').attr('data-slide', null).animate({
            'margin-left': '-100%'
        }, 600);
        setTimeout(function() {
            $('#' + slideshowname + '> .slides > .slide').attr('id', null);
            arrangeSlides(slideshowname);
        }, 600);
    }
}

function left(slideshowname) {
    if ($('#' + slideshowname + '> .slides > #leftSlide').attr('data-numSlide') != null) {
        $('#' + slideshowname + '> .slides > #leftSlide').attr('data-slide', 'home').animate({
            'margin-left': 0
        }, 600);
        $('#' + slideshowname + '> .slides > #home').attr('data-slide', null).animate({
            'margin-left': '100%'
        }, 600);
        setTimeout(function() {
            $('#' + slideshowname + '> .slides > .slide').attr('id', null);
            arrangeSlides(slideshowname);
        }, 600);
    }
}

function gotoslide(slideshowname, slidenum) {
    if (slidenum > parseInt($('#' + slideshowname + ' > .slides > .slide[data-slide="home"]').attr("data-numSlide"))) {
        right(slideshowname);
        setTimeout(function() {
            gotoslide(slideshowname, slidenum);
        }, 600);
    } else if (slidenum < parseInt($('#' + slideshowname + ' > .slides > .slide[data-slide="home"]').attr("data-numSlide"))) {
        left(slideshowname);
        setTimeout(function() {
            gotoslide(slideshowname, slidenum);
        }, 600);
    }
}
//////////////////////////////////////////////////////////////
//used local variables countSlides , rightSlide , leftSlide //
// none global variables used                               //
//////////////////////////////////////////////////////////////