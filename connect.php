<?php



$servername = "192.168.1.9";
$username = "vgportal_u";
$password = "vgportal@1";
$dbname = "vgportal_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
// 	echo "yes connected";
// }



$sql = "SELECT * FROM vg_openJobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    $row1[] = $row;
    }


    // echo "<pre>";

     print_r(json_encode($row1)); 
    //die;
}

 ?>
