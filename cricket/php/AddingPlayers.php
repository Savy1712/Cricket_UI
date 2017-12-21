<!DOCTYPE HTML> 
<html lang="en">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="/css/style.css">

<script  src="/js/firstclick.js"> </script>
</head>

<body>
<?php
  $num_players = $_GET["number"];
  echo "<div id='InnerBox'>";
  echo strtoupper($_GET["team_selected"])." PLAYERS:".$num_players;
  for($i=0; $i < $num_players; $i++) {
    echo "<div id='PlayersList'>";
    echo "<input type='text' name='players' value='' />";
    echo "</div>";
  }
  echo "</div>";
?>

</body>
</html>

