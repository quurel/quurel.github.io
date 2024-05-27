$(function(){

$('.sf').on('click', function(e){
    var fixed_offset = 50;
    $('html,body').stop().animate({ scrollTop: $('#sl').offset().top - fixed_offset}, 2000);
    e.preventDefault();
});

});