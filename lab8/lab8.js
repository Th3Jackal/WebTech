
function getDataFromForm(fname, lname) {
  alert("it worked!");
  runAjax(fname, lname);
}

function runAjax(fname, lname) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responseString").innerHTML = this.responseText;
  }
  xhttp.open("GET", "ajax.php?"+fname+lname, true);
  xhttp.send();
}
