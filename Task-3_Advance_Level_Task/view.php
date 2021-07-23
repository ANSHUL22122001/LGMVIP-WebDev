<?php
    session_start();
    if ($_SESSION['role'] !== "Admin") {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php
        include "Components/head.php"
    ?>
    <body>

        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <?php
                include "Components/navbar.php"
            ?>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="https://ssl.gstatic.com/images/branding/product/2x/avatar_circle_grey_512dp.png" alt="">
                        <p><?php echo $_SESSION['name']; ?></p>
                        <span><?php echo $_SESSION['role']; ?></span>
                    </center>
                    <li class="item" id="dashboard">
                        <a href="Dashboard.php" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="student">
                        <a href="Student.php" class="menu-btn" >
                            <i class="fas fa-user-graduate"></i><span> Student</span>
                        </a>
                    </li>
<?php
                        if($_SESSION['role'] === "Admin"){
?>
                    <li class="item active" id="faculity">
                        <a href="Faculity.php" class="menu-btn">
                            <i class="fas fa-user"></i><span> Faculity</span>
                        </a>
                    </li>
<?php
                        }
?>
                    <li class="item" id="classes">
                        <a href="Classes.php" class="menu-btn">
                            <i class="fas fa-university"></i><span>Classes</span>
                        </a>
                    </li>
                    <li class="item" id="exam">
                        <a href="Exam.php" class="menu-btn">
                            <i class="fas fa-paste"></i><span> Exams</span>
                        </a>
                    </li>
                    <li class="item" id="result">
                        <a href="Result.php" class="menu-btn">
                            <i class="fas fa-graduation-cap"></i>Result</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div class="card">
                    <div id="profile">
<?php
                        $id = $_POST['id'];
                        $role = $_POST['role'];

                        if($role === "Faculity"){
                            include 'Components/connection.php';
                            
                            $user_Login_query = "select * from faculity where faculityId='$id'";            
                            $user_Login_submit = mysqli_query($con, $user_Login_query);
                            if(mysqli_num_rows($user_Login_submit)){
                                while($row = mysqli_fetch_assoc($user_Login_submit)){
                        
?>
                            <form  method="POST" action="Components/update.php">
                                    <h1>Profile</h1>
                                    <br><label for="id">faculityId</label><br>
                                    <input type="text" name="id" value="<?php echo $row['faculityId']; ?>" disabled>

                                    <br><label for="role">Post</label><br>
                                    <input type="text" name="role" value="Faculity" disabled>

                                    <br><label for="name">Name</label><br>
                                    <input type="text" name="name" value="<?php echo $row['name']; ?>">

                                    <br><label for="gender">Gender</label><br>
                                    <input type="text" name="gender" value="<?php echo $row['gender']; ?>" disabled>

                                    <br><label for="email">Email</label><br>
                                    <input type="text" name="email" value="<?php echo $row['email']; ?>">

                                    <br><label for="Contact Number">Contact Number</label><br>
                                    <input type="text" name="contactnumber" value="<?php echo $row['contactNumber']; ?>"><br>
                                
                                    <button type="submit"><i class="fas fa-edit">Edit</i></button>
                            </form>
<?php
                                }
                            }
                        }
?>
                    </div>
                </div>
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->
        <!-- pm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --> -->
        <script type="text/javascript">
            $(document).ready(function(){
                $(".sidebar-btn").click(function(){
                    $(".wrapper").toggleClass("collapse");
                });
            });
            const touch=(e)=>{
                alert(e);
            }
        </script>

    </body>
</html>
      