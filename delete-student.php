<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, 'student_db');

if(isset($_POST['delete-data']))
{
    $id = $_POST['delete-id'];

    $query = "DELETE FROM students WHERE id='$id'";
    $sql = mysqli_query($conn, $query);

    if($sql)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:index.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>