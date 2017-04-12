$(document).ready(function(){
        
    
        $(".arrow-toggle").click(function(){
         
            $(".dropdown-menu").slideToggle('slow');
        });
        
        $(".buger-toggle").click(function(){
            
            $(".nav").slideToggle('slow');
             });
        
        $(".arrow-toggle").click(function(){
            $(this).next(".dropdown-menu").slideToggle('slow');
        });
        //Mike Sinkula's code 
        //$(".dropdown-toggle").click(function(){
            
           //$(this).next(".dropdown-menu").toggle();});

    });