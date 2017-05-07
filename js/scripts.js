$(document).ready(function() {
    $('#cookies-accept').click(function() {
        $('#cookies-message').css('display','none');
    });

    $('.nav-trigger').click(function() { 
         $('#navigation').toggleClass('responsive');
    });
});