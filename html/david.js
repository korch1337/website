$(document).ready(function(){
setInterval("ajaxd()",1000);
});

function ajaxd(){
var $bountyh = $('ul.inner');
$.ajax({
        type: 'GET',
        url: 'general.json',
        dataType: 'json',
        success: function (bounty) {
            $.each(bounty, function(i, bounties){
                   $.each(bounty, function(i2, bounties){
                                $('#remove').remove();
                                $('#test').append('<li id="remove"> Name: ' + bounty['i']['name'] + ', Bounty: ' + bounty['i']['price'] + '</li>');
                  
                           
                   });
            });
        }
    });
    
    
    
};
