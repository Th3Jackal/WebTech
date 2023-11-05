<html>
<body>
<?
    if(!file_exists("data.txt"))
    {
        echo "The file from above cannot be found!";
        exit;
    }
    
    $file = fopen("data.txt", "r");
    
    if(!$file)
    {
        echo "Somehow the file cannot be opened! :)";
        exit;
    }
    echo "<table border = 4>";
    $i = 1;
    while(!feof($file))
    {
        $name = fgets($file);
        if($i = 1) {
            echo "<tr><td>$name</td>";
            $i = 0;
        }
        else if($i = 0) {
            echo "<td>$name</td>";
            $i = 1;
        }

    }
        echo "</table>";
    fclose($file)
    
?>
</body>
</html>