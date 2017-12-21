function  newSeries() {
    if(document.getElementById("term_check").checked == true){
        window.location="./../php/Series_info.php";
    }
    else {
      alert(" Warning !!.. Please read the terms and conditions and agree to it");
    }
}

function GoBack() {
    window.history.back();

}

function checkterms() {
    window.location="/html/Series.html";
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


function ShowPlayers() {
  document.getElementById("teams_list").disabled=true;
  var num_teams = document.getElementById("num_teams").value;
  document.getElementById("num_teams").value = num_teams - 1;
  var xmlhttp = new XMLHttpRequest();
  var number_of_players = document.getElementById("num_players").value;
  var teams = document.getElementById("teams").value;
  var team_selected = document.getElementById("teams_list").value;
  
  if(number_of_players > 0) {
    document.getElementById('show_players').style.display='block';
  } else if(number_of_players == "") {
      alert("Enter number of players ");
      location.href = window.location;
  } else {
      alert("Number of players selected is "+number_of_players+" : Invalid");
      location.href = window.location; 
  }
 
  var param="number="+number_of_players;
  xmlhttp.open("POST", "/php/AddingPlayers.php?number="+number_of_players+"&team_selected="+team_selected,true);
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("show_players").innerHTML = this.responseText;       
    }
  };

  xmlhttp.send(param);  
}


function HideList() {
  
  
}



function AddPlayers() {
    var num_team = document.getElementById('num_teams').value;
    var num_players = document.getElementById('num_players').value;
    }

function GetNumofPlayers() {
    alert(document.getElementById('num_players').value);
    return document.getElementById('num_players').value;
}



