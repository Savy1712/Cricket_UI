<!DOCTYPE HTML> 
<html lang="en">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="/css/style.css">

<script  src="/js/firstclick.js"> </script>
</head>

<body>

<div id="overall">
<?php
$teams_particip = trim($_GET['teams']);
$teams_list= explode(',', trim($teams_particip));
$total_count = count($teams_list) + 1;
$num_players = "";
?>

<div id="SideHeadings"> ADDING TEAMS</div>
<div id="InnerBox">
TEAM NAME: 
<div id="ValueBox">
<select id="teams_list" class="TextCenter">
<?php
for($i=0; $i<$total_count; $i++) {
    echo "<option>".$teams_list[$i]."</option>";
}

?>
</select> 
</div></div>
<input type="hidden" id="teams" value="<?php echo $teams_particip; ?>" />
<input type="hidden" id="num_teams" value="<?php echo $total_count - 1; ?>" />
<div id="InnerBox">
NUMBER OF PLAYERS:
<div id = "ValueBox">
<div id = "Boxed">
<input type="text" id="num_players" name="num_players_name" value="<?php echo $num_players; ?>" class="TextCenter" onkeyup="HideList" /></div>
<div id="ButtonBox">
<input type="submit" class= "AddPlayers" id="add_players" name="add_players" value="ADD PLAYERS" onclick="ShowPlayers()" />
<br/></div>
<div id="normal">*Including all substitutes</div>
</div></div>
<div id="show_players" style="display:none"></div>
</div>
</body>
</html>

