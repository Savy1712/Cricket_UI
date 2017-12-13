
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["series_name"];
    $type = $_POST["series_type"];
    $year = $_POST["series_year"];
    $country = $_POST["Country"];
    $teams_particip = $_POST['teams_participating'];
}
?>





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
<!-- Debugging purpose 
<form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' > 
-->

<div id="SeriesInfo">
 <div id="SideHeadings"> NEW SERIES INFORMATION </div>
<form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' > 

<!-- <form name="series_info" method='POST' action="AddTeamplayers.php"> <!--'./series_info_collection.php'> -->
<div id="InnerBox">
SERIES NAME :
<div id ="ValueBox">
<input type='text' name='series_name' id="new_series_name" value='' /></div></div>
<!--TODO: Add more of series types -->
<div id="InnerBox">
SERIES TYPE :
<div id="ValueBox">
<div id="normal">
<input type="radio" name="series_type" 
<?php if (isset($series_type) && $series_type=="bilateral") echo "checked";?>
value="Bilateral"> Bilateral
<input type="radio" name="series_type"
<?php if (isset($series_type) && $series_type=="Triangular") echo "checked";?>
value="Triangular">Triangular</div>
</div></div>
<div id="InnerBox">
SERIES YEAR: 
<div id="ValueBox">
<input type="text" name="series_year" id="new_series_year" value='<?php echo date('Y');?>' /></div></div>

<div id="InnerBox">
TEAMS PARTICIPATING:
<div id="ValueBox">
<input type="text" name="teams_participating" id="teams_part" />
<div id="normal">
separate country names with ','
</div> </div></div>

<div id="InnerBox">
COUNTRY :
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
VENUES :
<div id="ValueBox">
<div id="div">
  <input type="hidden" id="hidden_stat" name="hidden_stat" value = "0" />
  <button name="add_button" id="add" form="dummy_form" onclick="AddMore()">+ADD</button>
  <span id="fooBar">&nbsp;<br></span>
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
