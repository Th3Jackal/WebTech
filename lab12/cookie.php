<?php
    $cname = "Test";
    $cvalue = "yes";
    if(isset($_COOKIE[$cname]))
    {
        echo "<p>Cookie '" . $cname . "' is set with value of " . $cvalue . ".</p>"; 
    }
    else
    {
        setcookie("Test", $cvalue, time()+90, "/");
    }
?>

