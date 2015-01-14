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
         document.getElementById("demolist").innerHTML+="<li role =\'presentation\'>"+"<a role = \'menuitem\' tabindex=\'-1\' href=\'#\' onclick=\'cloneTurn\'>"+obj[i]["Turn"]+"</a>"+"</li>";
        }
        });
    }

