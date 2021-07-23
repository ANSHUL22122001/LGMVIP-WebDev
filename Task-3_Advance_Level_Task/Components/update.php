<?php
    session_start();
    if ($_SESSION['role'] !== "Admin") {
        header('location:index.php');
    }
    include 'connection.php';

    $role=$_POST['role'];
    echo $role;
    if($role === "Faculity"){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $contact = $_POST['contactNumber'];
        $email = $_POST['email'];

        echo $id;
        echo $name;
        echo $contact;
        echo $email;

        $query = "update faculity set contactNumber='$contact', name='$name', email='$email' where faculityId='$id'";

        if (mysqli_query($con, $query)) {
            echo done;
        }
    }
    elseif($role === "Student"){
        
    }
    echo "kuchbhi";

?>