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
  

  $team_selected = $_GET["team_selected"];
  $teams_list = explode(",", $_GET["teams"]);
  $total_count = count($teams_list); 
  $teams = "";
  for($i = 0; $i < $total_count; $i++) {
    if($teams_list[$i] != $team_selected) {
      if( $i+1 < $total_count) $teams = $teams. $teams_list[$i].',';
      else $teams = $teams . $teams_list[$i];   
    } 
  }
  echo "<input type='submit' name='next_button' value='NEXT TEAM' onclick='NextTeamCall()' class='NextBut'/>";
  echo "</div>";
?>

</body>
</html>

