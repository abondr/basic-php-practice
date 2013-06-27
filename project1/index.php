
<?php
//this is select page. 
    require_once("header.php");
    $sql = "select * from users";
    $rows = mysql_query($sql,$connect);
?>
<body onload="myFunction()">
    <a href="insert.php">insert values.</a>
    <table>
        <?php
        while($row = mysql_fetch_array($rows))
        {
            echo "<tr><td>".$row['u_id']."</td><td><a href=update.php?id={$row[u_id]}>".
            $row['full_name']."</a></td><td><a href=delete.php?id={$row[u_id]}>delete</a></td></tr>";
        }
        ?>        
    </table>
    </body>
</html>
<?php require_once("footer.php"); ?>
    
