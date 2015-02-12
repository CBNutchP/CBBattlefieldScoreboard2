function shTurn(){
  $.ajax({ 
        url: "testedit2.php" ,
        type: "POST",
        data: '',
        dataType: "json",
        success: function(result) { 
          
          console.log(result);
          console.log(result[0]);
        }
        });}
