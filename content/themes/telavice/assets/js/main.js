hero_arrow_change();
function hero_arrow_change() {
    $('#home .hero').on('click',function () {
       alert($(this).index());
    });

}