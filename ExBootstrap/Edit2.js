function shTurn(){
  $.ajax({ 
        url: "testedit2.php" ,
        type: "POST",
        data: '',
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        console.log(result);
        for(var i=0;i<20;i++){
        console.log(obj[i]);
         document.getElementById("demolist").innerHTML+="<li role =\'presentation\'>"+"<a role = \'menuitem\' tabindex=\'-1\' href=\'#\' onclick=\'cloneTurn()\'>"+obj[i]["Turn"]+"</a>"+"</li>";
        }
        });
    }
function shTeam(){
  $.ajax({ 
        url: "teamedit.php" ,
        type: "POST",
        data: '',
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        var display;
        console.log(result);
        for(var i=0;i<20;i++){
        console.log(obj[i]);
         document.getElementById("teamlist").innerHTML+="<li role =\'presentation\'>"+"<a role = \'menuitem\' tabindex=\'-1\' href=\'#\' onclick=\'cloneTeam()\'>"+obj[i]["Team"]+"</a>"+"</li>";
        }
        });
      console.log(display[i])
    }
