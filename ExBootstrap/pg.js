var sec=60;
var wsec=2;
var cturn=0;
var maxturn=21;
var turn=maxturn;
var rank;
var nrank;
var teamwin;
var p=0;
var $bar1 = $('#timebar');
var $bar2 = $('#overallbar');
var cset;
var wcset;
var boolp =false;
var cp=0;
function keydown(e){
    var key = e.keyCode;
    //p
    if(key == 80){
        if(p==0){pgstart();
            p=1;}
        else{pgpause();
            p=0;}
    }
    //s
    if(key == 83){      
        pgstop();     
    }
    //space
    if(key == 32){
        pgpause();
        p=0;
    }
    // left arrow
    if(key == 37){
        maxturn=maxturn-1;
        turn=maxturn;
        tplus();
        pgstop(); 
    }
    // rigth arrow
    if(key == 39){
       maxturn=maxturn+1;
        turn=maxturn;
        tplus();
        pgstop();
    }
    // ,
    if(key == 44){
        pgpause();
        turn=turn+1;
        cturn=cturn-1;
    }
    // .
     if(key == 46){
        pgpause();
        turn=turn-1;
        cturn=cturn+1;
    }
}
function pgstart(){
    if(sec==60 || sec==0){
   // sec=60;
   // turn=21;  
   // count=0;
    $bar1.width(sec*(100/60)+"%");
    $bar2.width(turn*(100/maxturn)+"%");
    tplus();
    progresstime();}
}
function pgstop(){
    sec=60;
    turn=maxturn; 
    cturn=0;
    clearTimeout(cset); 
    $bar1.width(sec*(100/60)+"%");
    $bar2.width(turn*(100/maxturn)+"%");

}
function pgpause(){
    if(cp%2==0){
    clearTimeout(cset);
    $('#btn3').html('RESUME');
    }
    else if(cp%2==1){
    cset=setTimeout("tplus()",1000);  
    $('#btn3').html('PAUSE');
    }
    cp++;
}
function twait() {
    wsec-=1;
    if (wsec==0) {
        $bar1.removeClass();
        $bar1.addClass('progress-bar progress-bar-success progress-bar-striped active');
        wsec=1;
    }
    if (wsec>0) {wcset=setTimeout("twait()",1000);}
}
function tplus() {
    sec-=1;
    document.getElementById("OutputText").innerHTML="<font color=\'red\'  style=\'font-size:40px\'>" + (sec) +  "Sec." +" </font>";
    document.getElementById("cturn").innerHTML="<font color=\'white\' style=\'font-size:45px\'>"+"Turn:" + cturn + "/" + maxturn;
    if (sec==0) {
        $bar1.removeClass();
        $bar1.addClass('progress-bar progress-bar-success progress-bar-striped active');
        twait();
        turn-=1;
        cturn++;
        getDataFromDb();
        sec=60;
    }
    if(sec==44){
         getDataFromDb();
    }

    if(sec==29){
        $bar1.removeClass();
         $bar1.addClass('progress-bar progress-bar-warning progress-bar-striped active');
         getDataFromDb();
    }
    if(sec==14){
        $bar1.removeClass();
         $bar1.addClass('progress-bar progress-bar-danger progress-bar-striped active');
         getDataFromDb();
    }
    if (sec>0) {cset=setTimeout("tplus()",1000);}
}

function progresstime(){
     var progress = setInterval(function() {
    if ($bar1.width()==0) {
        $bar1.width(0+"%");
    } else {
        $bar1.width(sec*(100/60)+"%");
    }
    if ($bar2.width()==0) {
        $bar1.width(0+"%");
        clearInterval(progress);
        clearTimeout(cset); 
        if(rank ==0){
            teamwin ="A";
        } else if(rank ==1){
            teamwin ="B";
        } else if(rank ==2){
            teamwin ="C";
        } else if(rank ==3){
            teamwin ="D";
        } else if(rank ==4){
            teamwin ="E";
        } else if(rank ==5){
            teamwin ="F";
        } else if(rank ==6){
            teamwin ="G";
        } else if(rank ==7){
            teamwin ="H";
        } else if(rank ==nrank){
            teamwin ="draw"
        }else{
            teamwin = "nowin";
        }
        alert("winner team : "+ teamwin);
    }
    else{
        $bar2.width(turn*(100/maxturn)+"%");
    }
    $bar2.text(turn+'/' + maxturn + 'turn');
    } , 800);
    if(turn==0){
        
    }
    // if (turn==0) {
    //     $bar1.width(0+"%");
    //     clearInterval(progress);
    //     clearTimeout(cset); 
    //     if(rank ==0){
    //         teamwin ="A";
    //     } else if(rank ==1){
    //         teamwin ="B";
    //     } else if(rank ==2){
    //         teamwin ="C";
    //     } else if(rank ==3){
    //         teamwin ="D";
    //     } else if(rank ==4){
    //         teamwin ="E";
    //     } else if(rank ==5){
    //         teamwin ="F";
    //     } else if(rank ==6){
    //         teamwin ="G";
    //     } else if(rank ==7){
    //         teamwin ="H";
    //     } else if(rank ==nrank){
    //         teamwin ="draw"
    //     }else{
    //         teamwin = "nowin";
    //     }
    //     alert("winner team : "+ teamwin);
    // }
    // else{
    //     $bar2.width(turn*(100/maxturn)+"%");
    // }
    // $bar2.text(turn+'/' + maxturn + 'turn');
    // } , 800);
    // if(turn==0){
        
    // }
}
function getDataFromDb()
{
  $.ajax({ 
        url: "testgetdata.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        var max = -100;  
       document.getElementById("team0").innerHTML="<h1>"+"<font color=\'red\' style=\'font-size:80px\'>" + obj[0]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback0').src="";
    
       document.getElementById("team1").innerHTML="<h1>"+"<font color=\'green\' style=\'font-size:80px\'>" + obj[1]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback1').src="";

       document.getElementById("team2").innerHTML="<h1>"+"<font color=\'yellow\' style=\'font-size:80px\'>" + obj[2]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback2').src="";
       
       document.getElementById("team3").innerHTML="<h1>"+"<font color=\'blue\' style=\'font-size:80px\'>" + obj[3]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback3').src="";
       
       document.getElementById("team4").innerHTML="<h1>"+"<font color=\'cyan\' style=\'font-size:80px\'> " + obj[4]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback4').src="";
       
       document.getElementById("team5").innerHTML="<h1>"+"<font color=\'pink\' style=\'font-size:80px\'>" + obj[5]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback5').src="";
       
       document.getElementById("team6").innerHTML="<h1>"+"<font color=\'purple\' style=\'font-size:80px\'>" + obj[6]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback6').src="";
       
       document.getElementById("team7").innerHTML="<h1>"+"<font color=\'orange\' style=\'font-size:80px\'>" + obj[7]["Total"] + " </font>"+"</h1>";
       document.getElementById('teamback7').src="";
       
        for(var i=0;i<=7;i++){ 
            if(max< parseInt(obj[i]["Total"])){
                max= parseInt(obj[i]["Total"]);
                rank=i;
                
            }
        console.log(max);
        console.log(rank);
        }
        for(var n=0;n<=7;n++){   
            if(parseInt(obj[n]["Total"]) == max){
                max = parseInt(obj[n]["Total"]);
                document.getElementById('teamback'+n).src="Play.png";
                nrank=n;               
            }
        }
        document.getElementById('teamback'+rank).src="Play.png"; 
        // document.getElementById('teamback'+nrank).src="Play.png";
    console.log(result);
      });

}