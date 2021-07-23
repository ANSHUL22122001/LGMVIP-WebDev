<?php
    session_start();
    if (!isset($_SESSION['role'])) {
        header('location:index.php');
    }
?>
<?php
    include 'connection.php';

    $id = $_POST['id'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    if($role === "exam"){
        $query = "update exam set resultPublish='Yes' WHERE examId='$id'";

        if (mysqli_query($con, $query)) {

        } 
        header('location: ../Exam.php');
    }
        