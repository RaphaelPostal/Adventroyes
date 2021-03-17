

$( function() {


  var a=0;
  var b=0;
  var c=0;
  var d=0;
  var e=0;


  $( "#gd1" ).draggable({stop : function(e, ui){
    console.log(ui.position.top); 
    console.log(ui.position.left);

    if (ui.position.top>550 && ui.position.top<600 && ui.position.left>980 && ui.position.left<1020  ){
     a=1;
     console.log("super!");
     console.log(a);

     $("#gd1").hide();
     $("#gg1").hide();

   } 


 }

});

  $( "#gd3" ).draggable({stop : function(e, uo){
    console.log(uo.position.top); 
    console.log(uo.position.left);

    if (uo.position.top>220 && uo.position.top<260 && uo.position.left>180 && uo.position.left<230  ){
      console.log("super!");
      console.log(b);

      $("#gd3").hide();
      $("#gg3").hide();

    } 

  }

});

  $( "#gg4" ).draggable({stop : function(e, ma){
    console.log(ma.position.top); 
    console.log(ma.position.left);

    if (ma.position.top>-10 && ma.position.top<30 && ma.position.left>670 && ma.position.left<700  ){
      console.log("super!");
      console.log(c);

      $("#gd4").hide();
      $("#gg4").hide();

    } 
  }

});


  $( "#gg5" ).draggable({stop : function(e, mi){
    console.log(mi.position.top); 
    console.log(mi.position.left);

    if (mi.position.top>-400 && mi.position.top<-350 && mi.position.left>180 && mi.position.left<230  ){
      console.log("super!");
      console.log(d);

      $("#gd5").hide();
      $("#gg5").hide();
      $("#gargouille").show();
      $("#texte2").hide();
      $("#texte3").show();
      $("#reponsetmtc").show();
      $("#sendreponse").show();
      $("#gg1").hide();
      $("#gg2").hide();
      $("#gg3").hide();
      $("#gg4").hide();
      $("#gd1").hide();
      $("#gd2").hide();
      $("#gd3").hide();
      $("#gd4").hide();


    }



  }

});


  $( "#gg2" ).draggable({stop : function(e, pu){
    console.log(pu.position.top); 
    console.log(pu.position.left);

    if (pu.position.top>-15 && pu.position.top<30 && pu.position.left>-315 && pu.position.left<-270  ){
      console.log("super!");
      console.log(e);

      $("#gd2").hide();
      $("#gg2").hide();




    }




  }

});

  
});