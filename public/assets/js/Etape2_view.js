
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

  $( "#o1, #c1, #r1, #m1" ).draggable();

  $( "#b1" ).draggable({stop : function(e, ui){
    console.log(ui.position.top); 
    console.log(ui.position.left);

    if (ui.position.top> 50 && ui.position.top< 250 && ui.position.left>170 && ui.position.left<400  ){
      console.log("super!");
      a=1;
    } else {

      a=0;

    }
    if( b==1 && a==1 && c==1){
      console.log("ok");
      $("#b1").hide();
      $("#c1").hide();
      $("#m1").hide();
      $("#j1").hide();
      $("#o1").hide();
      $("#r1").hide();
      $("#v1").hide();
      $("#phrase1").hide();

      $("#b2").show();
      $("#c2").show();
      $("#m2").show();
      $("#j2").show();
      $("#o2").show();
      $("#r2").show();
      $("#v2").show();
      $("#phrase2").show();
    } 


  }

});

  $( "#j1" ).draggable({stop : function(e, non){
    console.log(non.position.top); 
    console.log(non.position.left);

    if (non.position.top> 30 && non.position.top< 150 && non.position.left>-90 && non.position.left<90  ){
      console.log("super!");
      b=1;
    } else {

      b=0;

    }
    if( b==1 && a==1 && c==1){
      console.log("ok");
      $("#b1").hide();
      $("#c1").hide();
      $("#m1").hide();
      $("#j1").hide();
      $("#o1").hide();
      $("#r1").hide();
      $("#v1").hide();
      $("#phrase1").hide();

      $("#b2").show();
      $("#c2").show();
      $("#m2").show();
      $("#j2").show();
      $("#o2").show();
      $("#r2").show();
      $("#v2").show();
      $("#phrase2").show();
    } 


  }

});

  $( "#v1" ).draggable({stop : function(e, lo){
    console.log(lo.position.top); 
    console.log(lo.position.left);

    if (lo.position.top> 150 && lo.position.top< 270 && lo.position.left>511 && lo.position.left<750  ){
      console.log("super!");
      c=1;
    } else {
      console.log("nul");
      c=0;

    }
    if( b==1 && a==1 && c==1){
      console.log("ok");
      $("#b1").hide();
      $("#c1").hide();
      $("#m1").hide();
      $("#j1").hide();
      $("#o1").hide();
      $("#r1").hide();
      $("#v1").hide();
      $("#phrase1").hide();

      $("#b2").show();
      $("#c2").show();
      $("#m2").show();
      $("#j2").show();
      $("#o2").show();
      $("#r2").show();
      $("#v2").show();
      $("#phrase2").show();
    } 


  }

});


// partie 2 



$( "#b2, #c2, #v2, #m2" ).draggable();

$( "#r2" ).draggable({stop : function(e, ui2){
  console.log(ui2.position.top); 
  console.log(ui2.position.left);

  if (ui2.position.top> 0 && ui2.position.top<140 && ui2.position.left>-160 && ui2.position.left<80  ){
    console.log("super!");
    d=1;
  } else {

    d=0;

  }
  if( d==1 && e==1 && f==1){
    console.log("ok");
    $("#b2").hide();
    $("#c2").hide();
    $("#m2").hide();
    $("#j2").hide();
    $("#o2").hide();
    $("#r2").hide();
    $("#v2").hide();
    $("#phrase2").hide();

    $("#b3").show();
    $("#c3").show();
    $("#m3").show();
    $("#j3").show();
    $("#o3").show();
    $("#r3").show();
    $("#v3").show();
    $("#phrase3").show();
  } 


}

});

$( "#j2" ).draggable({stop : function(e, non2){
  console.log(non2.position.top); 
  console.log(non2.position.left);

  if (non2.position.top> 45 && non2.position.top< 180 && non2.position.left>-418 && non2.position.left<-190  ){
    console.log("super!");
    e=1;
  } else {

    e=0;

  }
  if( d==1 && e==1 && f==1){
    console.log("ok");
    $("#b2").hide();
    $("#c2").hide();
    $("#m2").hide();
    $("#j2").hide();
    $("#o2").hide();
    $("#r2").hide();
    $("#v2").hide();
    $("#phrase2").hide();

    $("#b3").show();
    $("#c3").show();
    $("#m3").show();
    $("#j3").show();
    $("#o3").show();
    $("#r3").show();
    $("#v3").show();
    $("#phrase3").show();
  } 

}

});

$( "#o2" ).draggable({stop : function(e, lo2){
  console.log(lo2.position.top); 
  console.log(lo2.position.left);

  if (lo2.position.top> 350 && lo2.position.top< 470 && lo2.position.left>-260 && lo2.position.left<-97  ){
    console.log("super!");
    f=1;
  } else {
    console.log("nul");
    f=0;

  }
  if( d==1 && e==1 && f==1){
    console.log("ok");
    $("#b2").hide();
    $("#c2").hide();
    $("#m2").hide();
    $("#j2").hide();
    $("#o2").hide();
    $("#r2").hide();
    $("#v2").hide();
    $("#phrase2").hide();

    $("#b3").show();
    $("#c3").show();
    $("#m3").show();
    $("#j3").show();
    $("#o3").show();
    $("#r3").show();
    $("#v3").show();
    $("#phrase3").show();
  } 


}

});


// partie 3


$( "#r3, #j3, #v3, #o3" ).draggable();

$( "#c3" ).draggable({stop : function(e, ui3){
  console.log(ui3.position.top); 
  console.log(ui3.position.left);

  if (ui3.position.top>-9 && ui3.position.top<160 && ui3.position.left>-15 && ui3.position.left<180  ){
    console.log("super!");
    g=1;
  } else {

    g=0;

  }
  if( g==1 && h==1 && i==1){
    console.log("ok");
    $("#b3").hide();
    $("#c3").hide();
    $("#m3").hide();
    $("#j3").hide();
    $("#o3").hide();
    $("#r3").hide();
    $("#v3").hide();
    $("#phrase3").hide();
    $("#scene").hide();


    $("#texte3").show();
    $("#lien").show();
  } 


}

});

$( "#m3" ).draggable({stop : function(e, non3){
  console.log(non3.position.top); 
  console.log(non3.position.left);

  if (non3.position.top>-6 && non3.position.top< 150 && non3.position.left> 410 && non3.position.left< 670  ){
    console.log("super!");
    h=1;
  } else {

    h=0;

  }
  if( g==1 && h==1 && i==1){
    console.log("ok");
    $("#b3").hide();
    $("#c3").hide();
    $("#m3").hide();
    $("#j3").hide();
    $("#o3").hide();
    $("#r3").hide();
    $("#v3").hide();
    $("#phrase3").hide();
    $("#scene").hide();

    $("#texte3").show();
    $("#lien").show();

  } 

}

});

$( "#b3" ).draggable({stop : function(e, lo3){
  console.log(lo3.position.top); 
  console.log(lo3.position.left);

  if (lo3.position.top> 350 && lo3.position.top< 470 && lo3.position.left>513 && lo3.position.left<670  ){
    console.log("super!");
    i=1;
  } else {
    console.log("nul");
    i=0;

  }
  if( g==1 && h==1 && i==1){
    console.log("ok");
    $("#b3").hide();
    $("#c3").hide();
    $("#m3").hide();
    $("#j3").hide();
    $("#o3").hide();
    $("#r3").hide();
    $("#v3").hide();
    $("#phrase3").hide();
    $("#scene").hide();

    $("#texte3").show();
    $("#lien").show();


  } 


}

});



} );

