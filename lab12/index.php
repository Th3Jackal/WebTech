<?php
    $name = "cookie";
    $value = "1";
    $if(!isset($_COOKIE[$name]))
    {
        setcookie($name, $value, time() + (90), "/");
    }
    else
    {
        $message = 'Cookie named ' . $name . ' is set';
    }
?>

<html>
<body>
<p><?= $message ?></p>
</body>
</html>