<?php
include 'db_config.php';

    $query="insert into user values('farooq haque','farooq12','3456')";
    $query = "select * from users";
    $result =get($query);
    echo "<table border='1'>";
    echo "<tr>
            <th>Id</th><th>name</th><th>Username</th>
        </tr>";
    foreach($result as $row)
    {
        echo"<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["username"]."</td>";
        echo"</tr>";
    }
    echo"</table>";

?>