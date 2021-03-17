$(document).ready( function() {
    $("#lien_jouer").hide();
    $('#acheter').click(function(){
        $(this).next('#phraseachat').css("display","block");
        $("#lien_jouer").show();
    })

});

