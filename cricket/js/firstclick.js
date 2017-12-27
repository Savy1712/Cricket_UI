function  newSeries() {
    if(document.getElementById("term_check").checked == true){
        window.location="/cricket/php/Series_info.php";
    }
    else {
      alert(" Warning !!.. Please read the terms and conditions and agree to it");
    }
}

function GoBack() {
    window.history.back();

}

function checkterms() {
    window.location="/cricket/html/Series.html";
}


function AddMore() {
    var hid_stat = document.getElementById('hidden_stat').value;
    var d = document.getElementById('div');
    var element = document.createElement("input");
    var break_element = document.createElement("br");
    element.setAttribute("type", "text");
    element.setAttribute("value", "");
    element.setAttribute("class", "TextCenter");
    element.setAttribute("name", "text_"+hid_stat);
    element.setAttribute("id", "text_"+hid_stat);
    var foo = document.getElementById("fooBar");
    foo.appendChild(element);
    foo.appendChild(break_element);
    hid_stat++;
    document.getElementById('hidden_stat').value = hid_stat;
}



function NextTeamCall(teams) {  
  alert(teams);
  window.location = "/cricket/php/AddTeamplayers.php?teams="+teams;
}

function ConfirmPlayerList() {
  document.getElementById("teams_list").disabled = true;
  document.getElementById("change_players").disabled=true;
  document.getElementById("confirm_players").disabled=true;
  var teams = document.getElementById("teams").value;
  var num_teams = document.getElementById("num_teams").value;
  document.getElementById("num_teams").value = num_teams - 1;
  var xmlhttp = new XMLHttpRequest();
  /* Getting the selected team content */
  var team_selected = document.getElementById("teams_list").value;
  var number_of_players = document.getElementById("num_players").value;
  //var team_players = document.getElementById("player_name").value;
  var param="number="+number_of_players;
  xmlhttp.open("POST", "/cricket/php/AddingPlayers.php?number="+number_of_players+"&teams="+teams+"&team_selected="+team_selected, true);
  xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("show_players").innerHTML = this.responseText;       
    }
  };
  xmlhttp.send(param);  
}


function ShowPlayers() {
  document.getElementById("num_players").disabled=true;
  document.getElementById("change_players").disabled=false;
  document.getElementById("add_players").disabled = true;
  if(document.getElementById("num_change").value == 1) {
    document.getElementById("teams_list").disabled=false;
  }
  var number_of_players = document.getElementById("num_players").value;
  document.getElementById("num_change").value = 1;
  if(number_of_players > 0) {
    document.getElementById('show_players').style.display='block';
    document.getElementById('hidebox').style.display="block";
  } else if(number_of_players == "") {
      alert("Enter number of players ");
      location.href = window.location;
  } else {
      alert("Number of players selected is "+number_of_players+" : Invalid");
      location.href = window.location; 
  } 
}

function InformationAboutPlayer() {
  var name = document.getElementById("player_id").value;
  var country = document.getElementById("teams_list").value;
  var xmlhttp = new XMLHttpRequest();
  var param = "player_name="+name+"&player_country="+country;
  xmlhttp.open("POST", "/cricket/php/PlayerInfo.php", true);
  /* Must for sending POST request to other page */
  xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("PlayerInfo").innerHTML = this.responseText;       
    }
  };
  document.getElementById("PlayerInfo").style.display="block";
  xmlhttp.send(param);  
}

function NumChange() {
  document.getElementById("add_players").disabled = false;
  if(document.getElementById("num_change").value == 1)  {
    document.getElementById("hidebox").style.display="none";
    document.getElementById("show_players").style.display="none";   
    document.getElementById("change_players").disabled=true;
    document.getElementById("num_players").disabled=false;
    document.getElementById("confirm_players").disabled=false;
  }
}



function NextPlayerInfo() {
  var player_count = document.getElementById("num_players").value 
  document.getElementById("num_players").value =  player_count - 1;
  ConfirmPlayerList();
}

