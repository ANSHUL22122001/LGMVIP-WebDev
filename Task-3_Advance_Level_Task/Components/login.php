  
<?php
session_start();

?>
<?php
    include 'connection.php';

    $id = $_POST['roleId'];
    $password = $_POST['password'];

    $user_Login_query = "select * from admin where adminId='$id' and password='$password'";            
    $user_Login_submit = mysqli_query($con, $user_Login_query);
    $adminCount = mysqli_num_rows($user_Login_submit);

    if ($adminCount){
        $row = mysqli_fetch_assoc($user_Login_submit);

        $_SESSION['id'] = $row['adminId'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = "Admin";
?>
        <script>
            if (confirm("Successfull login")) {
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/Dashboard.php");
            } 
            else{
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/Dashboard.php");
            }
        </script>
<?php
    }

    $user_Login_query = "select * from faculity where faculityId='$id' and password='$password'";            
    $user_Login_submit = mysqli_query($con, $user_Login_query);
    $adminCount = mysqli_num_rows($user_Login_submit);

    if ($adminCount){
        $row = mysqli_fetch_assoc($user_Login_submit);

        $_SESSION['id'] = $row['faculityId'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = "Faculity";
?>
        <script>
            if (confirm("Successfull login")) {
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/Dashboard.php");
            } 
            else{
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/Dashboard.php");
            }
        </script>
<?php
    }


    $user_Login_query = "select * from student where studentId='$id' and password='$password'";            
    $user_Login_submit = mysqli_query($con, $user_Login_query);
    $adminCount = mysqli_num_rows($user_Login_submit);

    if ($adminCount){
        $row = mysqli_fetch_assoc($user_Login_submit);

        $_SESSION['id'] = $row['studentId'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = "Student";
?>
        <script>
            if (confirm("Successfull login")) {
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/Dashboard.php");
            } 
            else{
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/Dashboard.php");
            }
        </script>
<?php
    }
?>


        <script>
            if (confirm("Email Id or Password is incorrect try again")) {
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/");
            } 
            else{
                window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/StudentResultManagementSystem/");
            }
        </script>

