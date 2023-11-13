<?php
    $name = "cookie";
    $value = "1";
    $if(!isset($_COOKIE[$name]))
    {
        setcookie($name, $value, time() + (90), "/");
    }
?>

<html>
<body>
<?php
    $if(isset($_COOKIE[$name]))
    {
        echo "Cookie '" . $name . "' is set";
    }
?>
</body>
</html>