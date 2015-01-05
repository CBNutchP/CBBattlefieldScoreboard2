function shTurn(){
  $.ajax({ 
        url: "testedit2.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        var max = -1;
        for(var i=0;i<21;i++){
            if(max<obj[i]["Total"]){
                max=obj[i]["Total"];
                //document.getElementById("demolist").innerHTML="<li role=\'presentation\'>"+"<a role=\'menuitem\' tabindex=\'-1\' href=\'#\'>"+obj[i]["Total"]+"</a>"+"</li>";
            }
          }
    console.log(max);
      });}
      //setInterval(shTurn, 10);
