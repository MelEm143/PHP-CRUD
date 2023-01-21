<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!-- // if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "<br>";
//       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "Address: ". $row["address"]."<br>" ;
        
//     }
//   }else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$conn->close(); -->