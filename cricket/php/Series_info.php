<!DOCTYPE HTML>  
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="/css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">
<style> .err { color:red;} </style>
<script  src="/js/firstclick.js"> </script>
</head>

<body>

<?php 
$name = "";
$nameErr = "";

$type = "";
$typeErr = "";

$year = "";
$yearErr = "";

$country = "";
$countryErr = "";

$team_particip = "";
$team_participErr = "";

$venueErr = "";
$count_hidden = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $count_hidden = $_POST['hidden_stat'];
    /* Checking for Series Name */
    if(!empty($_POST["series_name"])) {
        $name = $_POST["series_name"];
    } else {
        $nameErr = "Missing";
    }
    /* Checking for Type */
    if(!empty($_POST['series_type'])) {
        $type = $_POST["series_type"];
    } else  {
        $typeErr = "Missing"; 
    }

    /* Checking for Year*/
    if(!empty($_POST['series_year'])) {
        $year = $_POST["series_year"];
    } else  {
        $yearErr = "Missing"; 
    }
    
    /* Checking for country*/
    if(!empty($_POST["Country"])) {
        $country = $_POST["Country"];
    } else  {
        $countryErr = "Missing"; 
    }
 
    /* Checking for Teams participating */
    if(!empty($_POST['teams_participating'])) {
        $team_particip = $_POST['teams_participating'];
    } else  {
        $team_participErr = "Missing"; 
    }
    
    if($_POST['hidden_stat'] == 0) {
        $venueErr = "Missing"; 
    }
    if($nameErr == "" && $typeErr == "" && $yearErr == "" && $countryErr == "" && $team_participErr == "" && $venueErr == "") {
        header('Location:AddTeamplayers.php'); 
        exit();
    } 


}
?>

<!-- Debugging purpose 
<form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' > 
-->

<div id="SeriesInfo">
 <div id="SideHeadings"> NEW SERIES INFORMATION </div>
<form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' > 
<!-- <form name="series_info" method='POST' action="AddTeamplayers.php"> <!--'./series_info_collection.php'> -->
<div id="InnerBox">
SERIES NAME :<span class="err">*<?php echo $nameErr; ?></span>
<div id ="ValueBox">
<input type='text' name='series_name' id="new_series_name" value='<?php echo $name; ?>' />

</div></div>
<!--TODO: Add more of series types -->
<div id="InnerBox">
SERIES TYPE : <span class="err">*<?php echo $typeErr; ?></span>
<div id="ValueBox">
<div id="normal">

<input type="radio" name="series_type" 
<?php if(isset($type) && $type =="Bilateral") echo "checked"; ?> value="Bilateral"> Bilateral
<input type="radio" name="series_type" 
<?php if(isset($type) && $type =="Triangular") echo "checked"; ?> value="Triangular">Triangular

</div>
</div></div>
<div id="InnerBox">
SERIES YEAR: <span class="err">*<?php echo $yearErr; ?></span>
<div id="ValueBox">
<input type="text" name="series_year" id="new_series_year" value='<?php echo date('Y');?>' />

</div></div>

<div id="InnerBox">
TEAMS PARTICIPATING:<span class="err">*<?php echo $team_participErr; ?></span>
<div id="ValueBox">
<input type="text" name="teams_participating" id="teams_part" value="<?php echo $team_particip; ?>" />

<div id="normal">
separate country names with ','
</div> </div></div>

<div id="InnerBox">
COUNTRY :<span class="err">*<?php echo $countryErr; ?></span>
<div id="ValueBox">
<select name="Country" id = "CountryList">
    <option value = "Australia">Australia</option>
    <option value = "India">India</option>
    <option value = "SouthAfrica">South Africa</option>
    <option value = "England">England</option>
</select>

</div></div>
<!--Venues : <input type="text" name="series_name" id="new_series_name" value= ""><br> -->    
<div id="InnerBox">
VENUES :  <span class="err">*<?php echo $venueErr; ?></span>
<div id="ValueBox">
<div id="div">
  <input type="hidden" id="hidden_stat" name="hidden_stat" value = "<?php echo $count_hidden; ?>" />
  <button name="add_button" id="add" form="dummy_form" onclick="AddMore()">+ADD</button>

  <span id="fooBar">&nbsp;<br></span>
  <?php 
	echo "<span id=fooBar>";
        if($_POST['hidden_stat'] > 0) {
            for($i = 0; $i < $_POST['hidden_stat']; $i++) { 
                echo '<input type="text" value= '.$_POST["text_".$i].'><br>'; 
            }
	} echo "</span>";
   ?>
 
</div>
</div></div>
<div id="InnerBox">
<button class="back_main" id="back_but" form="form1" onclick="GoBack()">BACK</button>
<input class="NextBut" type='submit' name= 'submit_button' value='NEXT' />
</div>
</form>       
</div> 
</body>
</html>
