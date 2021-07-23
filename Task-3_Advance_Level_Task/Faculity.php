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
                    <div id="wrapper">
                        <div class="top">
                            <h1>Faculity Detail</h1>
                            <button id="myBtn"><i class="fas fa-plus"></i></button>
                        </div>
                        <table id="keywords" >
                            <thead>
                                <tr>
                                <th><span>Roll Number</span></th>
                                <th><span>Name</span></th>
                                <th><span>Email Id</span></th>
                                <th><span>Contact Number</span></th>
                                <th><span>Gender</span></th>
                                <th><span>Status</span></th>
                                <th><span>Action</span></th>
                                </tr>
                            </thead>
                           <tbody>

<?php
                                include 'Components/connection.php';
                            
                                $user_Login_query = "select * from faculity order by faculityId DESC";            
                                $user_Login_submit = mysqli_query($con, $user_Login_query);
                                $check = true;
                                $checkuser = "no";

                                if(mysqli_num_rows($user_Login_submit)){
                                    while($row = mysqli_fetch_assoc($user_Login_submit)){
                                        if($check){
                                            $checkuser = $row['faculityId'];
                                            $check = false;
                                        }
?>
                             <tr>
                                <td><?php echo $row['faculityId']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['contactNumber']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td>
<?php
                                        if($row['status'] === "enable"){
?>
                                        <form method="POST" action="Components/statuschange.php">
                                            <input type="text" name="id" value="<?php echo $row['faculityId']; ?>" style="display: none">
                                            <input type="text" name="role" value="Faculity" style="display: none">
                                            <input type="text" name="status" value="enable" style="display: none">
                                            <button class="enable-btn" type="submit">Enable</button>
                                        </form>
<?php }else{ ?>
                                        <form method="POST" action="Components/statuschange.php">
                                            <input type="text" name="id" value="<?php echo $row['faculityId']; ?>" style="display: none">
                                            <input type="text" name="role" value="Faculity" style="display: none">
                                            <input type="text" name="status" value="disable" style="display: none">
                                            <button class="disable-btn" type="submit">Disable</button>
                                        </form>
<?php
                                        }
?>  
                                </td>
                                <td>
                                    <!--            change            -->
                                    <div class="action-icon">
                                        <form method="POST" action="view.php">
                                            <input type="text" name="id" value="<?php echo $row['faculityId']; ?>" style="display: none">
                                            <input type="text" name="role" value="Faculity" style="display: none">
                                            <button class="btn1" type="submit"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form method="POST" action="Components/delete.php">
                                            <input type="text" name="id" value="<?php echo $row['faculityId']; ?>" style="display: none">
                                            <input type="text" name="role" value="Faculity" style="display: none">
                                            <button class="btn2" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
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
        <div id="myModal" class="modal">

        <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="Components/insert.php" method="POST">
                    <input type="text" name="lastUser" value="<?php echo $checkuser; ?>" style="display: none">
                    <input type="text" name="role" value="Faculity" style="display: none">
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="text" name="contactNumber" placeholder="Contact Number"><br>
                    <input type="text" name="email" placeholder="Email"><br>
                    <select name="gender" >
                        <option value=".">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select><br>
                    <button type="submit">Add</button>
                </form>
            </div>

        </div>
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
      