<!DOCTYPE HTML> 
<html lang="en">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="/css/style.css">

<script  src="/js/firstclick.js"> </script>
</head>

<body>
<div id="SideHeadings"> ADDING TEAMS</div>
<div id="InnerBox">
TEAM NAME: 
<div id="ValueBox">
<select id="teams_list">
<?php
$teams_particip = trim($_GET['teams']);
$teams_list= explode(',', trim($teams_particip));
$total_count = count($teams_list) + 1;
for($i=0; $i<$total_count; $i++) {
    echo "<option>".$teams_list[$i]."</option>";
}
?>
</select> 
</div></div>
<input type="hidden" id="num_teams" value=<?php echo $total_count - 1; ?> />
<div id="InnerBox">
NUMBER OF PLAYERS:
<div id = "ValueBox">
<input type="text" id="num_players" name="name_players" value="15" />

<button class= "AddPlayers" id="add_players" name="add_players" form="1" onclick="AddPlayers()">ADD PLAYERS</button>
<br>
<div id="normal">*Including all substitutes</div>
</div></div>
<div id="InnerBox">
<div id="show_players" style="display:none">
ADDING PLAYERS:
<?php 
for($i=0; $i< 2; $i++) {
    echo "<div id='PlayersList'>";
    echo "<input type='text' name='players' value='' disabled/>";
    echo "</div>";
}
?>
</div>
</div>
</body>
</html>

