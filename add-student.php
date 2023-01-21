<?php

$conn = mysqli_connect("localhost","root","");
$database = mysqli_select_db($conn, 'student_db');

if(isset($_POST['add-student']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (`firstname`,`lastname`,`age`,`address`) VALUES ('$firstname','$lastname','$age','$address')";
    $conn = mysqli_query($conn, $sql);

    if($conn)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>