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

<p>
<?php
if(isset($_COOKIE[$cname]))
{
    echo "Cookie '" . $cname . "' is set with value of " . $cvalue . "."; 
}
?>
</p>

</body>
</html>