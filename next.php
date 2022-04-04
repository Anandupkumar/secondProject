<?php
     $conn=new mysqli("localhost","root","","bbank");
     if(!$conn){
         die("Connection failed: " . $conn->connect_error);
     }else{ 
        if(isset($_POST['delete'])){
            $user=$_POST['name'];
            $sql="DELETE FROM bloodbank WHERE name='$user'";
            if($conn->query($sql)){
                echo"<script>alert('deleted')</script>";
                require('index.php');
            }
        }
    }
?>