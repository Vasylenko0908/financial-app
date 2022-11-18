$(document).ready(function(){
    $(".search-input").keyup(function(){
        if($(this).val().length > 0){
            $('ul#search-result').show();
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
                        html += '<li class="w-full bg-hover-primary ">';
                        html += '<a href="'+base_url+'/company/'+data.result[i].Code+'/'+data.result[i].Country+'" class="flex fs-6 text-gray-700">';
                        html += '<div class="w-125px w-md-100px px-2 lg:px-3 py-1 turncate text-left items-center"><span class="mt-1">'+data.result[i].Code+'</span></div>';
                        html += '<div class="flex-1  px-2 lg:px-3 py-1 text-left border-l-2 turncate items-center"><span class="mt-1">'+data.result[i].Name+'</span></div>';
                        html += '<div class="flex  px-2 lg:px-3 py-1 text-right items-center turncate self-center"><span class="mt-1">'+data.result[i].Exchange+'</span></div>';
                        html += '<div class="flex px-3 lg:px-3 py-1 items-center self-center"><img class="w-4 h-4 my-auto inline ml-1" src="'+base_url+'/'+data.result[i].flag+'"/></div>';
                        html += '</a></li>';
                    }
                    $('ul#search-result').append(html);
                }
            });
        }else
        $('ul#search-result').hide();
    });
    
    $('.main-screen').click(function(e){
        // if(e.target !== this) {
        //     return
        // }
        // // e.preventDefault();
        // // e.stopPropagation();
        $('ul#search-result').hide();
    })
    $(".search-input").click(function(e){

        if($(this).val().length > 0)
        $('ul#search-result').show();
        e.stopPropagation();
        
    })
});