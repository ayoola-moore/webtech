$(document).ready(function () {
    $('div#output').hide();
    //bind send message here
    $('#send-message').click(sendMessage);
    $('button.close').live('click', function () {
        $(this).parent().find('p').html('');
        $(this).parent().hide();
    });

});
