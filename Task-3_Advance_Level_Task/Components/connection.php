<?php
        $con = mysqli_connect("localhost","root","anshulsharma","srms");
        if (!$con) {
?>
            <script>
                alert('Connection Failed');
            </script>
<?php
            header('location: index.php');
        }
        else{
?>
            <script>
                // alert('Connection Successfull');
            </script>
<?php
        }
?>