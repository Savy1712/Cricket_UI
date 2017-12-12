<!DOCTYPE HTML>  
<html lang="en">
<head> <b> NEW SERIES INFORMATION </b>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script  src="/js/firstclick.js"> </script>
</head>

<body>
<!-- Debugging purpose 
<form method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' > 
-->
<div id="series_info" align="center">
<form name="series_info" method='POST' action='./AddTeamplayers.php'> <!--'./series_info_collection.php'> -->

<p align="center" > Series Name:
<input type='text' name='series_name' id="new_series_name" value='' /><br> </p>
<!--TODO: Add more of series types -->
<p align="center" > Series Type:
<input type="radio" name="series_type" 
<?php if (isset($series_type) && $series_type=="bilateral") echo "checked";?>
value="Bilateral">Bilateral
<input type="radio" name="series_type"
<?php if (isset($series_type) && $series_type=="Triangular") echo "checked";?>
value="Triangular">Triangular<br>
</p> 

<p align="center" >Series Year: 
<input type="text" name="series_year" id="new_series_year" value='<?php echo date('Y');?>' /><br></p>

<p align="center">Teams Participating:
<input type="text" name="teams_participating" id="teams_part" /> <br>
separate country names with ','</p>


<p align="center" >Country: <select name="Country" id = "CountryList">
             <option value = "Australia">Australia</option>
             <option value = "India">India</option>
             <option value = "SouthAfrica">South Africa</option>
             <option value = "England">England</option>
         </select></p>
<!--Venues : <input type="text" name="series_name" id="new_series_name" value= ""><br> -->    
Venues:
<div id="div">
  <input type="hidden" id="hidden_stat" name="hidden_stat" value = "0" />
  <button name="add_button" id="add" form="dummy_form" onclick="AddMore()">+ADD</button>
  <span id="fooBar">&nbsp;<br></span>
</div>
<p> </p>
<button name="search" id="search" form="dummy_form" onclick="search_node('asf')">Search</button>
<input type='submit' name= 'submit_button' value='NEXT' />
</form>       
</div> 
</body>
</html>
