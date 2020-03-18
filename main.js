$(function() {
    $('a[href^=".my-skills"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top}, 1000);
            return false;
    });
});