<?php
    session_start();
    if ($_SESSION['role'] !== "Admin") {
        header('location:index.php');
    }

    
    include 'connection.php';
    $role=$_POST['role'];

    if($role === "Faculity"){
        $lastuser = $_POST['lastUser'];

        $user = substr($lastuser,0,5);
        $check = substr($lastuser,5,9);
        $newcheck = (int)$check + 1;
        $newlen = 4-strlen((string)$newcheck);
        for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $id = $user.(string)$newcheck;
        $name = $_POST['name'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        
        $query = "insert into faculity(faculityId, name, email, password, contactNumber, gender, status) VALUES ('$id','$name','$email','$contactNumber','$contactNumber','$gender','enable')";

        if (mysqli_query($con, $query)) {
            header('location: ../Faculity.php');
        }   
    }
    elseif($role === "Student"){
        $lastuser = $_POST['lastUser'];

        $user = substr($lastuser,0,5);
        $check = substr($lastuser,5,9);
        $newcheck = (int)$check + 1;
        $newlen = 4-strlen((string)$newcheck);
        for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $id = $user.(string)$newcheck;
        $name = $_POST['name'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $class = $_POST['classname'];
        $gender = $_POST['gender'];

        $query = "insert into student(studentId, name, email, password, className, contactNumber, gender, status) VALUES ('$id','$name','$email','$contactNumber','$class','$contactNumber','$gender','enable')";

        if (mysqli_query($con, $query)) {
            header('location: ../Student.php');
        }   
    }
    elseif($role === "class"){
        $lastuser = $_POST['lastUser'];

        $user = substr($lastuser,0,5);
        $check = substr($lastuser,5,9);
        $newcheck = (int)$check + 1;
        $newlen = 4-strlen((string)$newcheck);
        for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $id = $user.(string)$newcheck;
        $name = $_POST['name'];
        $faculityname = $_POST['faculityname'];
        $query = "insert into class(classId, className,incharge, status) VALUES ('$id','$name', '$faculityname','enable')";

        if (mysqli_query($con, $query)) {
            header('location: ../Classes.php');
        }
    }
    elseif($role === "exam"){
        $lastuser = $_POST['lastUser'];

        $user = substr($lastuser,0,5);
        $check = substr($lastuser,5,9);
        $newcheck = (int)$check + 1;
        $newlen = 4-strlen((string)$newcheck);
        for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $id = $user.(string)$newcheck;
        $classname= $_POST['classname'];

        echo $check;
        echo $id;
        echo $classname;

        $query = "insert into exam(examId, className, resultPublish, status) VALUES ('$id','$classname','No','enable')";

        if (mysqli_query($con, $query)) {
            header('location: ../Exam.php');
        }
    }




?>