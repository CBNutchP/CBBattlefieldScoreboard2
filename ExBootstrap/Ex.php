<html>
  <head>
    <title>Battle Field Score</title>
  </head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <script type="text/javascript" src="jquery.js">
      function hideP()
      {
        $('p').toggle('slow');
      }
    </script>
    <script type="text/javascript"></script>
      <ul class="nav nav-tabs" role="tablist">
            <button class="btn btn-danger" onclick="hideP()">Input</button>
            <button class="btn btn-danger" onclick="hideP()">Score</button>
      </ul>
    <body>
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="bgred border">
            </div>
          </div>
            <div class="span6">
              <form action="insert.php" method="post">Team A<br>  
              Turn: <input type="text" name="Turn"><br>
              Team: <input type="text" name="ATeam"><br>
              Commander1: <input type="text" name="ACMD1"><br>Commander2: <input type="text" name="ACMD2"><br>KO: <input type="text" name="AKO"><br>  Penalty: <input type="text" name="APEN"><br>  PIT: <input type="text" name="APIT"><br>
              <input type= "submit" value="Add">
              <input type="reset" value="Reset">
            </div>
        </div>
        <section>
          
        </section>
        <div>
        </div>
      </div>
    </body>
</ul>
</html>
