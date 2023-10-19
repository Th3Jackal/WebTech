
function getDataFromForm() {
  //alert("it worked!");
  var fnamestr = document.getElementByName('fname').value;
  var lnamestr = document.getElementByName('lname').value;
  runAjax(fnamestr, lnamestr);
}

function runAjax(fname, lname) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responseString").innerHTML = this.responseText;
  }
  xhttp.open("GET", "ajax.php?fname="+fname+"&lname="+lname, true);
  xhttp.send();
}
