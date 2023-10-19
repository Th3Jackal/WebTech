
function getDataFromForm(fname, lname) {
  alert("it worked!");
  runAjax(this.fname, this.lname);
}

function runAjax(fname, lname) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responseString").innerHTML = this.responseText;
  }
  xhttp.open("GET", "ajax.php?fname="+fname+"&lname="+lname);
  xhttp.send();
}
