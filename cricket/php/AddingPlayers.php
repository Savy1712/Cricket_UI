<!DOCTYPE HTML> 
<html lang="en">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="/cricket/css/style.css">

<script  src="/cricket/js/firstclick.js"> </script>
</head>

<body>
  <div id="InnerBox">
<?php
  $num_players ="";
  $name = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_players = $_GET["number"];
    $name = $_GET["player_name"];
  }
  echo "<input type='hidden' name='player_count_name' id='player_count' />";
  echo "<div id='RightCornering'> ADDING ".strtoupper($_GET["team_selected"])." PLAYERS : ".$num_players."</div>";
  echo "<div id='PlayerBox'>";

  echo "<table id='PlayersList'>";
  echo "<tr>";
  echo "<td></td>";
  echo "</tr>";
  for($i=0; $i < $num_players; $i++) {
    echo "<tr>";
    if ( $i == 0) {
    echo '<td><div id="Player"><input type="text" id="player_id" value='.$name.' name="player_name" onchange="InformationAboutPlayer()" /></div></td>';
    } else  {
        echo '<td><div id="Player"><input type="text" id="player_id" value='.$name .' name="player_name" onchange="InformationAboutPlayer()" disabled /></div></td>';
    }
    echo '<div id="PlayerInfo" style="display:none"></div>';
    echo "</tr>";
  }
  echo "</table>";
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
?>
<?php 
  if($total_count == 1) {  
?>
    <input type="submit" name="match_type_button" value="FINISH" onclick="" class="NextBut"/>    
<?php 
  } else if($total_count > 1) {
?> 
    <input type="submit" name="next_button" value="NEXT TEAM" onclick="NextTeamCall('<?php echo $teams; ?>')" class="NextBut"/>
<?php
  } else {
    
  }
?>
  </div>
  <div>
</body>
</html>

