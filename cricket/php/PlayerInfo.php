<!DOCTYPE HTML> 
<html lang="en">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="/css/style.css">

<script  src="/js/firstclick.js"> </script>
</head>

<body>
<div id = "PlayerInfo">
<?php 
$name = "";
$country = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["player_name"]);
  $country = htmlspecialchars($_POST["player_country"]);
}
?>	 
<div id = "SideHeadings"> PLAYER INFORMATION </div>

<div id="InnerBox">
PLAYER NAME:
<div id = "ValueBox">
<input type="text" name="player_name" value="<?php echo $name ?>" class="TextCenter" disabled />
</div>
</div>

<div id="InnerBox">
COUNTRY:
<div id = "ValueBox">
<input type="text" name="player_country" value="<?php echo $country ?>" class="TextCenter" disabled />
</div>
</div>


<div id ="InnerBox">
<div id="ValueBox">

<div id="EnclosingPlayerInfo">
<div id="PlayerFeature">
<table style="width:100%">
<tr>
<div id = "SideHeadings"> PLAYER FEATURE </div>
<td ><input type="radio" name="batsman" <?php if(isset($type) && $type =="Batsman") echo "checked"; ?> value="Batsman"></td>
<td align="left">BATSMAN</td>
</tr>
<tr>
<td><input type="radio" name="bowler" <?php if(isset($type) && $type =="Bowler") echo "checked"; ?> value="Bowler"></td>
<td align="left">BOWLER</td>
</tr>
<tr>
<td ><input type="radio" name="wk" <?php if(isset($type) && $type =="wk") echo "checked"; ?> value="wk"></td>
<td align="left">WICKET KEEPER</td>
</tr>
</table>
</div>

<div id="PlayerRole">
<table>
<tr>
<div id = "SideHeadings"> PLAYER ROLE </div>
<td ><input type="radio" name="captain" <?php if(isset($type) && $type =="captain") echo "checked"; ?> value="captain"></td>
<td align="left">CAPTAIN</td>
</tr>

<tr>
<td ><input type="radio" name="vc" <?php if(isset($type) && $type =="vc") echo "checked"; ?> value="vc"></td>
<td align="left">VICE CAPTAIN</td>
</tr>

<tr>
<td ><input type="radio" name="subs" <?php if(isset($type) && $type =="subs") echo "checked"; ?> value="subs"></td>
<td align="left">SUBSTITUTE</td>
</tr>

</table>
</div>

</div> 
</div>
</div>

<div id="ValueBox">
<input type="submit" class="NextBut" value="Confirm" onclick="NextPlayerInfo()" />
<input type="submit" class="NextBut" value="Delete" onclick="" />

</div>


</body>
</html>

