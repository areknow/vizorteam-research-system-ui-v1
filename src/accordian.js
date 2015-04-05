$(document).ready(function(){
    $('div.accordionButton').click(function() {
        if ($(this).next().hasClass('openDiv')) {
            $('div.accordionContent.openDiv').slideUp('normal');
            $('div.accordionContent.openDiv').removeClass('openDiv');
        }
        else {
            $('div.accordionContent.openDiv').slideUp('normal');
            $('div.accordionContent.openDiv').removeClass('openDiv');
            $(this).next().slideDown('normal');
            $(this).next().addClass('openDiv');
        }   
        });
    $("div.accordionContent").hide();
});