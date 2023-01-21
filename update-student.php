<?php
$conn = mysqli_connect("localhost","root","");
$sql = mysqli_select_db($conn, 'student_db');

    if(isset($_POST['update-data']))
    {   
        $id = $_POST['id'];
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $sql = "UPDATE students SET firstname='$firstname', lastname='$lastname', age='$age', address=' $address' WHERE id='$id'  ";
        $conn = mysqli_query($conn, $sql);

        if($conn)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>