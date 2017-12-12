<!DOCTYPE HTML>  
<html lang="en">
<head> <b> ADDING TEAMS </b>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script  src="/js/firstclick.js"> </script>
</head>

<body>

<p> TEAM NAME: 
<select id="teams_list">
<?php
$teams_particip = trim($_POST['teams_participating']);
$teams_list= explode(',', trim($teams_particip));
$total_count = count($teams_list) + 1;
for($i=0; $i<$total_count; $i++) {
    echo "<option>".$teams_list[$i]."</option>";
}
?>
</select> </p>
<form name="form1" type="GET">
<input type="hidden" id="num_teams" value=<?php echo $total_count - 1; ?> />
<p>NUMBER OF PLAYERS:<input type="text" id="num_players" name="name_players" value="15" />
<button id="add_players" name="add_players" form="1" onclick="AddPlayers()">ADD PLAYERS</button>
<br>*Including all substitutes</p>


<div id="show_players" style="display:none">
ADD PLAYERS:
<?php 
$num_players = $_GET['name_players'];
echo $num_players;
for($i=0; $i< $num_players; $i++) {
    echo "<input type='text' name='players' value='' disabled/>";
}
?>
</div>
</form>

</body>
</html>

