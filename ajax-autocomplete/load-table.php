<?php
$conn = mysqli_Connect("127.0.0.1", "root","","ajax") or die("Connection failed");
$sql = "SELECT * FROM students WHERE first_name = '{$_POST['city']}'";
$result = mysqli_query($conn, $sql) or die("Query failed");
$output = "";
if(mysqli_num_rows($result) > 0){
        $output .= "<table border='0' width= '100%' cellpadding='0'>
                    <tr>
                    <th>Id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    </tr>";
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<tr>
                        <td align='center'>{$row['id']}</td>
                        <td align='center'>{$row['first_name']}</td>
                        <td align='center'>{$row['last_name']}</td>
            </tr>";
        }
        $output .= "</table>";
        echo $output;
}
else{
        echo "No record found";
}



?>