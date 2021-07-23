<?php
    session_start();
    if (!isset($_SESSION['role'])) {
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
                    <li class="item" id="faculity">
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
                    <div class="card-content">
                        <div class="card-text">
                            <div class="card-title">
                                <h3>Total Result Published</h3>
                                <p>11</p>
                            </div>
                            <div class="card-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-text">
                            <div class="card-title">
                                <h3>Total Student</h3>
                                <p>11</p>
                            </div>
                            <div class="card-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-text">
                            <div class="card-title">
                                <h3>Total Class</h3>
                                <p>11</p>
                            </div>
                            <div class="card-icon">
                                <i class="fas fa-university"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-text">
                            <div class="card-title">
                                <h3>Total Faculity</h3>
                                <p>11</p>
                            </div>
                            <div class="card-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-text">
                            <div class="card-title">
                                <h3>Total Subject</h3>
                                <p>11</p>
                            </div>
                            <div class="card-icon">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-text">
                            <div class="card-title">
                                <h3>Total Exam</h3>
                                <p>11</p>
                            </div>
                            <div class="card-icon">
                                <i class="fas fa-paste"></i>
                            </div>
                        </div>
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
        </script>

    </body>
</html>
      