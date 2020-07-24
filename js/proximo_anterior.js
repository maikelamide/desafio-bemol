$(document).ready(function() {
	/*disable non active tabs*/
    $('.nav li').not('.active').addClass('disabled');
    $('.nav li').not('.active').find('a').removeAttr("data-toggle");
    
    $('#proximo').click(function(){
        $lia = $('.nav li.active');
        $li = $('.nav li.active').next('li');
        
        /*enable next tab*/
        $li.removeClass('disabled');
        $li.find('a').attr("data-toggle","tab");
        /*toggle tab*/
        $li.find('a').click();
        
        /*disable previous tab*/
        $lia.addClass('disabled');
        $lia.find('a').removeAttr("data-toggle","tab");
    });
    $('#anterior').click(function(){
        $lia = $('.nav li.active');
        $li = $('.nav li.active').prev('li');
        
        /*enable next tab*/
        $li.removeClass('disabled');
        $li.find('a').attr("data-toggle","tab");
        /*toggle tab*/
        $li.find('a').click();
        
        /*disable previous tab*/
        $lia.addClass('disabled');
        $lia.find('a').removeAttr("data-toggle","tab");
    });
});