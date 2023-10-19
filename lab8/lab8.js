
function getDataFromForm(fname, lname) {
  //alert("it worked!");
  runAjax(fname, lname);
}

function runAjax(fname, lname) {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "ajax.php?fname="+fname+"&lname="+lname, true);
  xhttp.onload = function() {
    if(xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("responseString").innerHTML = this.responseText;
    }
  }
  //xhttp.open("GET", "ajax.php?fname="+fname+"&lname="+lname, true);
  xhttp.send();
}
