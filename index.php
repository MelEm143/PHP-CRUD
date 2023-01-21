<?php
session_start();
include 'assets/header.php';
include 'conn.php';
?>

<!-- Button trigger modal -->

<!-- Modal Add Functionality -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="add-student.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter a First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter a Last Name">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Enter a Age">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter a Address">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="add-student" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Functionality -->
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="update-student.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter a First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter a Last Name">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Enter a Age">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter a Address">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update-data" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete Functionality -->
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="delete-student.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete-id" id="delete-id">
                    <h6>Do you want to delete this data?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" name="delete-data" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-3 p-5">

    <h2>PHP CRUD</h2>
    <p>Student Management System</p>
    <?php include('message.php'); ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Student
    </button>
    <table id="datatableid" class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM students";
            $conn = mysqli_query($conn, $sql);
            if (mysqli_num_rows($conn) > 0) {
                foreach ($conn as $students) {
            ?>
                    <tr>
                        <td><?= $students['id']; ?></td>
                        <td><?= $students['firstname']; ?></td>
                        <td><?= $students['lastname']; ?></td>
                        <td><?= $students['age']; ?></td>
                        <td><?= $students['address']; ?></td>
                        <td>
                            <!-- <a href="" class="btn btn-success btn-sm btn-edit">Edit</a> -->
                            <button type="button" class="btn btn-success btn-edit">Edit</button>
                            <button type="button" class="btn btn-danger btn-delete">Delete</button>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<h5>No Record Found</h5>";
            }

            ?>
        </tbody>
    </table>
</div>