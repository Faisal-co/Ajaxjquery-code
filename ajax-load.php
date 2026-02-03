<?php
$conn = mysqli_connect("127.0.0.1","root","","ajax");
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$output = "";
if(mysqli_num_rows($query) > 0){
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="0">
            <tr>
            <th>Id</th>
            <th>Name</th>
            </tr>';
            while($row = mysqli_fetch_assoc($query)){
                $output .= "<tr>
                        <td>{$row['id']}</td> 
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        </tr>";

            }
            
            "</table>";
            echo $output; // pehle .html result men jaye ga, phir HTML men jaye ga jqueryajax.php
            mysqli_close($conn);
            
            }
            else{
                echo "No Data Found";
            }





?>