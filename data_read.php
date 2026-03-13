

<table border="1">
<tr>
<th>ID</th>
<th>name</th>
<th>email</th>
<th>course</th>
</tr>

    <?php 
        include 'connection.php';
        // retrieve data - read (R)

        $sql = "SELECT * FROM students";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)){

            echo "<tr>";
            echo "<td>". $row['ID'] . "</td>";
            echo "<td>". $row['name'] . "</td>";
            echo "<td>". $row['email'] . "</td>";
            echo "<td>". $row['course']. "</td>";
            echo "</tr>";
        }   


    ?>

</table>
