<?php
    $cname = "Test";
    $cvalue = "yes";
    $if(!isset($_COOKIE[$cname]))
    {
        setcookie("Test", $cvalue, time()+90, "/");
    }
?>

<html>
<body>

<?php
if(isset($_COOKIE[$cname]))
{
    echo "<p>Cookie '" . $cname . "' is set with value of " . $cvalue . ".</p>"; 
}
?>

</body>
</html>