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
                    <?php
                        if($_SESSION['role'] === "Admin" or $_SESSION['role'] === "Faculity"){
?>
                    <li class="item" id="student">
                        <a href="Student.php" class="menu-btn" >
                            <i class="fas fa-user-graduate"></i><span> Student</span>
                        </a>
                    </li>
                    <?php
                        }
                        if($_SESSION['role'] === "Admin"){
?>
                    <li class="item" id="faculity">
                        <a href="Faculity.php" class="menu-btn">
                            <i class="fas fa-user"></i><span> Faculity</span>
                        </a>
                    </li>
<?php
                        }
                        if($_SESSION['role'] === "Admin" or $_SESSION['role'] === "Faculity"){
?>
                    <li class="item active" id="classes">
                        <a href="Classes.php" class="menu-btn">
                            <i class="fas fa-university"></i><span>Classes</span>
                        </a>
                    </li>
<?php
                        }
?>
                    <li class="item" id="exam">
                        <a href="Exam.php" class="menu-btn">
                            <i class="fas fa-paste"></i><span> Exams</span>
                        </a>
                    </li>
                    <li class="item active" id="result">
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
                    <div id="wrapper">
                        <div class="top">
                            <h1>Result Detail</h1>
                        </div>
                        <table id="keywords" >
                            <thead>
                                <tr>
                                <th><span>Exam Id</span></th>
                                <th><span>Class Name</span></th>
                                <th><span>Result</span></th>
                                </tr>
                            </thead>
                           <tbody>

<?php
                                include 'Components/connection.php';
                            
                                $user_Login_query = "select * from exam where resultPublish = 'Yes' order by examId DESC";            
                                $user_Login_submit = mysqli_query($con, $user_Login_query);

                                if(mysqli_num_rows($user_Login_submit)){
                                    while($row = mysqli_fetch_assoc($user_Login_submit)){
?>
                             <tr>
                                <td><?php echo $row['examId']; ?></td>
                                <td><?php echo $row['className']; ?></td>
                                <td><button class="enable-btn" type="submit">View</button></td>
                                
                             </tr>
<?php
                                    }
                                }
?>                           
                           </tbody>
                         </table>
                        </div> 
                </div>
            </div>
            <!--main container end-->
        </div>

<!-- The Modal -->
        <!--wrapper end-->
        <!-- pm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --> -->
        <script type="text/javascript">
            $(document).ready(function(){
                $(".sidebar-btn").click(function(){
                    $(".wrapper").toggleClass("collapse");
                });
            });
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script>

    </body>
</html>
      