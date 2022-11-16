$(document).ready(function(){
    $(".search-input").keyup(function(){
        $.ajax({
            type: "GET",
            url: '/search/' + $(this).val(),
            headers: {
                "X-CSRF-TOKEN": $('#_token').val()
            },
            dataType: 'json',
            success: function(result) {
                alert(result);
                $('ul#search-result').children().remove();
            }
        });
    });
    
});