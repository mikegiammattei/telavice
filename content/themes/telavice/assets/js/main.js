$(document).ready(function () {
    hero_arrow_change();
    featureSection();
});
$(window).resize(function () {
    featureSection();
    hero_arrow_change();
});


function hero_arrow_change() {
    $('#home .control-1 img').on('click',function () {
      var $this = $(this);
      var $thisStartPosition = $this.offset().top - $this.outerHeight() + 20;

        $('html, body').stop().animate({
            scrollTop: $thisStartPosition
        }, 1000);
    });
}
function featureSection() {
    $('#home .feature').css({'height' : $(window).height() + 'px'});

    var featureHeight = $('#home .feature').height();
    var featureWidth = $('#home .feature').innerWidth();

    var headingHeight = $('#home .headings').height();
    var headingPosition = (featureHeight / 2) - headingHeight;

    if($(window).width() > 1080){
        $('#home .headings').css({'margin-top' : headingPosition + 'px'});
        /** Set the feature image box */
        $('#home .img-box').css({'height' : featureHeight  + 'px','width' : (featureWidth / 2 ) + 'px'});
    }else{
        $('#home .headings').css({'margin-top' : '30px'});
        $('#home .img-box').removeAttr();
    }



}
