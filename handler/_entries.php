<?php
    session_start();
    include 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];

    if( $name=="" || $email=="" || $phno==""){
        $_SESSION['msg'] = -1;
        header("Location: /winnerpickerv2/index.php");
    }
    
    $sql ="select * from entries where name='$name' and email='$email' and phno='$phno'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $sql = "UPDATE entries SET submissions = submissions+1
                 WHERE name='$name' and email='$email' and phno='$phno';
                ";
        if($conn->query($sql) === TRUE) {
            $_SESSION['msg'] = 1;
            header("Location: /winnerpickerv2/index.php");
        }else{
            echo "Error: <br>" . $conn->error;
        }
    }else{
        //simple insert hog wrna
        $sql = "insert into entries(name,email,phno) values ('$name', '$email', '$phno')";
        if($conn->query($sql) === TRUE) {
            $_SESSION['msg'] = 1;
            header("Location: /winnerpickerv2/index.php");
        }else{
            echo "Error: <br>" . $conn->error;
        }
    }
  
$conn->close();
?>