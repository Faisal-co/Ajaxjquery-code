<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "ajax") or die("Connection failed");
$search_term = $_POST['city'];  // getting city name from var city & then data: {city:city}.
// mean whatever user start typing will come into this variable, $search_term.
$sql = "SELECT distinct(first_name) FROM students WHERE first_name LIKE '%{$search_term}%'";
$result = mysqli_query($conn, $sql);
$output = "<ul>";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<li>{$row['first_name']}</li>";
}

}
else{
    $output .= "<li>First name not Found</li>";
}
$output .= "</ul>";
echo $output; // this echo is Sending data to $("#cityList") in index.php file.

?>