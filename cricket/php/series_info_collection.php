<html>
<body>
<div id="overall">
<?php
$name = "";
$number = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num = $_POST["number"];
  $name = $_POST["series_name"];
  $type = $_POST["series_type"];
  $year = $_POST["series_year"];
  $country = $_POST["Country"];
  $teams_particip = $_POST['teams_participating'];
}
?>
<b> Informations from previous page </b>
<p align = "center">
Number:"<?php echo $num ?>";
Name :"<?php echo $name ?>"
Type :"<?php echo $type ?>"
Year :"<?php echo $year ?>"
Country:"<?php echo $country ?>" 
Venues:"
<?php 
$x = $_POST['hidden_stat'];
for($i = 0; $i < $x ; $i++) {
  $test = 'text_'.$i;
  echo $_POST[$test];
  echo "<br>";
} 
?>"

Teams participating:"
<?php
$teams_particip = trim($teams_particip, ',');
$teams_list= explode(',', trim($teams_particip));
$total_count = count($teams_list) + 1;
for($i = 0; $i < $total_count; $i++) {
    echo $teams_list[$i];
}
?>"
</p> 
</div>
</body>
</html>


