$( document ).ready(function() {
    $('#header__sun').click(function(){
        
        $("#header_sun").addClass("hidden");        
        $("#header__moon").removeClass("hidden");
    });
    $('#header__moon').click(function(){
        $("#header_sun").removeClass("hidden");        
        $("#header__moon").addClass("hidden");
    });
    
});