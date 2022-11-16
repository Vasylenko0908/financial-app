$(document).ready(function(){
    $(".search-input").keyup(function(){
        $.ajax({
            type: "GET",
            url: '/search/' + $(this).val(),
            headers: {
                "X-CSRF-TOKEN": $('#_token').val()
            },
            dataType: 'json',
            success: function(data) {

                $('ul#search-result').children().remove();
                base_url = $('.base_url').val();
                var html='';
                for(i=0 ; i < data.result.length ; i++){
                    html += '<li class="d-flex bg-hover-primary ">';
                    html += '<a href="'+base_url+'/'+data.result[i].code+'" class="flex fs-6 text-gray-700">';
                    html += '<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">'+data.result[i].code+'</span></div>';
                    html += '<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">'+data.result[i].Name+'</span></div>';
                    html += '<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">'+data.result[i].Exchange+'</span></div>';
                    html += '</a></li>';
                }
                $('ul#search-result').append(html);
            }
        });
    });
    
});