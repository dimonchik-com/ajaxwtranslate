(function (agjoker) {
    agjoker(window).load(function () {
      if(!(agjoker.browser.msie)){
            worldone = agjoker("#worldone").clone();
            agjoker("#worldone").remove();
            agjoker("body").prepend(worldone);
       }

        agjoker(".worldcont_two").hover(

        function () {
            agjoker(".worldcont_three").fadeIn("slow");
        });
        agjoker(".worldcont_three").hover(

        function () {}, function () {
            agjoker(".worldcont_three").fadeOut("slow");
        });
    
        var speed = "normal" 
                           
        agjoker("#hovred a").each(function(){

            agjoker(this).css("position","relative");
            var html = agjoker(this).html();
            agjoker(this).html("<span class=\"oneageent\">"+ html +"</span>");
            agjoker(this).append("<span class=\"twoageent\">"+ html +"</span>");        
            if(agjoker.browser.msie){   
                agjoker("span.oneageent",agjoker(this)).css("opacity",1);            
            };
            agjoker("span.twoageent",agjoker(this)).css("opacity",0);        
            agjoker("span.twoageent",agjoker(this)).css("position","absolute");        
            agjoker("span.twoageent",agjoker(this)).css("top","0");
            agjoker("span.twoageent",agjoker(this)).css("left","0");
            agjoker("span.twoageent",agjoker(this)).css("display","block");
            agjoker(this).hover(
                function(){
                    agjoker("span.oneageent",this).fadeTo(speed, 0);                
                    agjoker("span.twoageent",this).fadeTo(speed, 1);
                },
                function(){
                    agjoker("span.oneageent",this).fadeTo(speed, 1);    
                    agjoker("span.twoageent",this).fadeTo(speed, 0);
                }            
            )
        });
    });
})(Ageent);