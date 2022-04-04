<?php
    $conn=new mysqli("localhost","root","","bbank");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{ 
        $name=$_POST['oname'];
        $new=$_POST['name'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $bg=$_POST['group'];
        $date=$_POST['date'];
        $sql="UPDATE bloodbank SET name='$new', sex='$sex', age='$age', bgroup='$bg', date='$date' WHERE name='$name'";
        if($conn->query($sql)){
            echo"<script>alert('updated')</script>";
            require('index.php');
        }
    }
?>