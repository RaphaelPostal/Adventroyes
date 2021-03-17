
var a=0;
var b=0;
var c=0;
var d=0;
var e=0;
var f=0;
var g=0;
var h=0;
var i=0;

$( function() {


  $( "#item1" ).draggable({stop : function(e, ui){
    console.log(ui.position.top); 
    console.log(ui.position.left);

    if (ui.position.top>-370 && ui.position.top<-340 && ui.position.left>250 && ui.position.left<290  ){
      console.log("super!");
      console.log(a);

      a=1;
    } else {
      console.log(a);
      a=0;

    }
    
    if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
      console.log("ok");
      $("#item1").hide();
      $("#item2").hide();
      $("#item3").hide();
      $("#item4").hide();
      $("#item5").hide();
      $("#item6").hide();
      $("#item7").hide();
      $("#item8").hide();
      $("#puzzle10").hide();

      $("#item9").hide();

  
      $("#texte3").hide();

      $("#texte4").show();

      
    } 
  }

});

  $( "#item2" ).draggable({stop : function(e, non){
    console.log(non.position.top); 
    console.log(non.position.left);

    if (non.position.top>-380 && non.position.top<-330 && non.position.left>-45 && non.position.left<5  ){
      console.log("super!");
      b=1;
      console.log(b);

    } else {
      console.log(b);

      b=0;

    }
    if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
      console.log("ok");
      $("#item1").hide();
      $("#item2").hide();
      $("#item3").hide();
      $("#item4").hide();
      $("#item5").hide();
      $("#puzzle10").hide();

      $("#item6").hide();
      $("#item7").hide();
      $("#item8").hide();
      $("#item9").hide();
      $("#texte3").hide();

      $("#texte4").show();

    } 
  }

});

  $( "#item3" ).draggable({stop : function(e, lo){
    console.log(lo.position.top); 
    console.log(lo.position.left);

    if (lo.position.top>-380 && lo.position.top<-330 && lo.position.left>-135 && lo.position.left<-90  ){
      console.log("super!");
      c=1;
    } else {
      console.log("nul");
      c=0;

    }
    if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
      console.log("ok");
      $("#item1").hide();
      $("#item2").hide();
      $("#item3").hide();
      $("#item4").hide();
      $("#item5").hide();
      $("#item6").hide();
      $("#item7").hide();
      $("#puzzle10").hide();

      $("#item8").hide();
      $("#item9").hide();

      $("#texte3").hide();

      $("#texte4").show();

    } 
  }

});


// partie 2 

$( "#item4" ).draggable({stop : function(e, po){
  console.log(po.position.top); 
  console.log(po.position.left);

  if (po.position.top>-270 && po.position.top<-220 && po.position.left>40 && po.position.left<90  ){
    console.log("super!");
    d=1;
  } else {

    d=0;

  }
  if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
    console.log("ok");
    $("#item1").hide();
    $("#item2").hide();
    $("#item3").hide();
    $("#item4").hide();
    $("#item5").hide();
    $("#item6").hide();
    $("#item7").hide();
    $("#item8").hide();
    $("#item9").hide();
    $("#puzzle10").hide();

    $("#texte3").hide();

    $("#texte4").show();


  } 
  
}

});

$( "#item5" ).draggable({stop : function(e, vroum){
  console.log(vroum.position.top); 
  console.log(vroum.position.left);

  if (vroum.position.top>-275 && vroum.position.top<-230 && vroum.position.left>-440 && vroum.position.left<-395  ){
    console.log("super!");
    e=1;
  } else {

    e=0;

  }
  if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
    console.log("ok");
    $("#item1").hide();
    $("#item2").hide();
    $("#item3").hide();
    $("#item4").hide();
    $("#item5").hide();
    $("#item6").hide();
    $("#item7").hide();
    $("#item8").hide();
    $("#item9").hide();
    $("#puzzle10").hide();
    $("#texte3").hide();

    $("#texte4").show();

  } 
}

});

$( "#item6" ).draggable({stop : function(e, miaou){
  console.log(miaou.position.top); 
  console.log(miaou.position.left);

  if (miaou.position.top>-275 && miaou.position.top<-230 && miaou.position.left>-35 && miaou.position.left<5  ){
    console.log("super!");
    f=1;
  } else {
    console.log("nul");
    f=0;

  }
  if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
    console.log("ok");
    $("#item1").hide();
    $("#item2").hide();
    $("#item3").hide();
    $("#item4").hide();
    $("#item5").hide();
    $("#item6").hide();
    $("#item7").hide();
    $("#item8").hide();
    $("#puzzle10").hide();
    $("#item9").hide();

    $("#texte3").hide();

    $("#texte4").show();

  } 
}

});


$( "#item7" ).draggable({stop : function(e, bv){
  console.log(bv.position.top); 
  console.log(bv.position.left);

  if (bv.position.top>-170 && bv.position.top<-120 && bv.position.left>-55 && bv.position.left<-10  ){
    console.log("super!");
    g=1;
  } else {

    g=0;

  }
  if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
    console.log("ok");
    $("#item1").hide();
    $("#item2").hide();
    $("#item3").hide();
    $("#item4").hide();
    $("#item5").hide();
    $("#item6").hide();
    $("#item7").hide();
    $("#item8").hide();
    $("#item9").hide();
    $("#puzzle10").hide();
    $("#texte3").hide();

    $("#texte4").show();



  } 
}

});

$( "#item8" ).draggable({stop : function(e, pro){
  console.log(pro.position.top); 
  console.log(pro.position.left);

  if (pro.position.top>-170 && pro.position.top<-115 && pro.position.left>-340 && pro.position.left<-300  ){
    console.log("super!");
    h=1;
  } else {

    h=0;

  }
  if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
    console.log("ok");
    $("#item1").hide();
    $("#item2").hide();
    $("#item3").hide();
    $("#item4").hide();
    $("#item5").hide();
    $("#item6").hide();
    $("#item7").hide();
    $("#item8").hide();
    $("#item9").hide();
    $("#puzzle10").hide();
    $("#texte3").hide();

    $("#texte4").show();

  } 

}

});

$( "#item9" ).draggable({stop : function(e, wouf){
  console.log(wouf.position.top); 
  console.log(wouf.position.left);

  if (wouf.position.top>-160 && wouf.position.top<-115 && wouf.position.left>360 && wouf.position.left<405  ){
    console.log("super!");
    i=1;
  } else {
    console.log("nul");
    i=0;

  }
  if( b==1 && a==1 && c==1 && d==1 && e==1 && f==1 && g==1 && h==1 && i==1){
    console.log("ok");
    $("#item1").hide();
    $("#item2").hide();
    $("#item3").hide();
    $("#item4").hide();
    $("#item5").hide();
    $("#item6").hide();
    $("#item7").hide();
    $("#item8").hide();
    $("#item9").hide();
    $("#puzzle10").hide();
    $("#texte3").hide();

    $("#texte4").show();


  } 

}

});

} );

