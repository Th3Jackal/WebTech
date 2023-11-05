<html>
<body>
        <?
            if(!file_exists("data.txt"))
            {
                echo "The file cannot be found!";
                exit;
            }
            
            $file = fopen("data.txt", "r");
            
            if(!$file)
            {
                echo "The file cannot be opened!";
                exit;
            }
            
            echo "<table border = 4>";

            while(!feof($file))
            {
                $name = fgets($file);
                echo "<tr><td>$name</td>";
                $name = fgets($file);
                echo "<td>$name</td>";
            }

            echo "</table>";
            fclose($file)
            
        ?>
    </body>
</html>