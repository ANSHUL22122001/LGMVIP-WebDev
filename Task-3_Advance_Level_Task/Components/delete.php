<?php
    session_start();
    if ($_SESSION['role'] !== "Admin") {
        header('location: index.php');
    }
    include 'connection.php';

    $id = $_POST['id'];
    $role=$_POST['role'];

    if($role === "Faculity"){
        $query = "delete from faculity where faculityId='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Faculity.php');
        }
    }
    elseif($role === "class"){
        $query = "delete from class where classId='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Classes.php');
        }
    }
    elseif($role === "exam"){
        $query = "delete from exam where examId='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Exam.php');
        }
    }
    elseif($role === "Student"){
        $query = "delete from student where studentId='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Student.php');
        }
    }

?>