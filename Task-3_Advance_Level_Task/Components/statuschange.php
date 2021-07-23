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

    if($role === "Faculity"){
        if($status === "enable"){
            $query = "update faculity set status='disable' WHERE faculityId='$id'";

            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Faculity.php');
        }
        elseif($status === "disable"){
            $query = "update faculity set status='enable' WHERE faculityId='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Faculity.php');
        }
    }
    elseif($role === "class"){
        if($status === "enable"){
            $query = "update class set status='disable' WHERE classId='$id'";

            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Classes.php');
        }
        elseif($status === "disable"){
            $query = "update class set status='enable' WHERE classId='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Classes.php');
        }
    }
    elseif($role === "exam"){
        if($status === "enable"){
            $query = "update exam set status='disable' WHERE examId='$id'";

            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Exam.php');
        }
        elseif($status === "disable"){
            $query = "update exam set status='enable' WHERE examId='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Exam.php');
        }
    }
    elseif($role === "Student"){
        if($status === "enable"){
            $query = "update student set status='disable' WHERE studentId='$id'";

            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Student.php');
        }
        elseif($status === "disable"){
            $query = "update student set status='enable' WHERE studentId='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Student.php');
        }
    }
    
?>