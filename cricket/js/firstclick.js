function  newSeries() {
    if(document.getElementById("term_check").checked == true){
        window.location="./../php/Series_info.php";
    }
    else {
      alert(" Warning !!.. Please read the terms and conditions and agree to it");
    }
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
    element.setAttribute("value", "text");
    element.setAttribute("name", "text_"+hid_stat);
    element.setAttribute("id", "text_"+hid_stat);
    var foo = document.getElementById("fooBar");
    foo.appendChild(element);
    foo.appendChild(break_element);
    hid_stat++;
    document.getElementById('hidden_stat').value = hid_stat;
}

function AddPlayers() {
    var num_team = document.getElementById('num_teams').value;
    document.getElementById('num_teams').value = num_team - 1;
    document.getElementById('teams_list').disabled=true;
    document.getElementById('show_players').style.display='block';
}

function GetNumofPlayers() {
    alert(document.getElementById('num_players').value);
    return document.getElementById('num_players').value;
}



