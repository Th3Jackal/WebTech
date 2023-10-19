
function getDataFromForm(fname, lname) {
  runAjax(fname, lname);
  alert("it worked!");
}

function runAjax(fname, lname) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responseString").innerHTML = this.responseText;
  }
  xhttp.open("GET", "ajax.php", true);
  xhttp.send();
}
