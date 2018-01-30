(function (agjoker) {
    agjoker(window).load(function () {
        makeposition();

        agjoker(window).mousemove(function(event) {
            changeposition();
        });
        function changeposition() {
            offset = agjoker("#translate_translate").offset();
            height = agjoker("#translate_translate").height();
            translate_translate_width = agjoker("#translate_translate").width();
            max_width = agjoker(window).width();
            curent_left = offset.left;
            width_translate_popup = agjoker("#translate_popup").width();
            rezultat = max_width - curent_left;
            if (rezultat < width_translate_popup) {
                leftofset = offset.left - width_translate_popup + translate_translate_width-15;
                agjoker("#translate_popup").css({
                    "top": offset.top + height + "px",
                    "left": leftofset + "px"
                });
            } else {
                agjoker("#translate_popup").css({
                    "top": offset.top + height + "px",
                    "left": offset.left + "px"
                });
            }
        }
        function makeposition() {
            offset = agjoker("#translate_translate").offset();
            height = agjoker("#translate_translate").height();
            translate_translate_width = agjoker("#translate_translate").width();
            max_width = agjoker(window).width();
            curent_left = offset.left;
            width_translate_popup = agjoker("#translate_popup").width();
            rezultat = max_width - curent_left;
            if (rezultat < width_translate_popup) {
                leftofset = offset.left - width_translate_popup + translate_translate_width-15;
                agjoker("#translate_popup").css({
                    "display": "none",
                    "top": offset.top + height + "px",
                    "left": leftofset + "px"
                });
            } else {
                agjoker("#translate_popup").css({
                    "display": "none",
                    "top": offset.top + height + "px",
                    "left": offset.left + "px"
                });
            }
            text_to_insert = agjoker("#translate_popup").clone();
            agjoker("#translate_popup").remove();
            agjoker("body").append(text_to_insert);
            agjoker("#translate_translate").hover(
            function () {
                agjoker("#translate_popup").fadeIn();
            });
            agjoker("#translate_popup").hover(

            function () {}, function () {
                agjoker("#translate_popup").fadeOut();
            });
           

            var speed = "normal" 
            var bgcolor = "#fff";                    
            agjoker("#translate_popup a").each(function(){
                agjoker(this).css("position","relative");
                var html = agjoker(this).html();
                agjoker(this).html("<span class=\"oneageent\">"+ html +"</span>");
                agjoker(this).append("<span class=\"twoageent\">"+ html +"</span>");        
                if(agjoker.browser.msie){
                    agjoker("span.oneageent",agjoker(this)).css("background",bgcolor);
                    agjoker("span.twoageent",agjoker(this)).css("background",bgcolor);    
                    agjoker("span.oneageent",agjoker(this)).css("opacity",1);            
                };
                agjoker("span.twoageent",agjoker(this)).css("opacity",0);        
                agjoker("span.twoageent",agjoker(this)).css("position","absolute");        
                agjoker("span.twoageent",agjoker(this)).css("top","0");
                agjoker("span.twoageent",agjoker(this)).css("left","0");        
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
        }
    });
})(Ageent);