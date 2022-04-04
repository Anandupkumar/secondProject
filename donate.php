<?php           
   $conn=new mysqli("localhost","root","","bbank");
    if(!$conn){
          die("Connection failed: " . $conn->connect_error);
    }else{ 
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        if($age>17){
            $group=$_POST['group'];
            $date=$_POST['date'];
            $sql="INSERT INTO bloodbank (name,sex,age,bgroup,date) VALUES ('$name','$sex','$age','$group','$date')";
            if($conn->query($sql)){
                echo"<script>alert('Your details inserted')</script>";
                require('index.php');
            }else{
                echo "not inserted";
            }
        }else{
            echo"<script>alert('you cannot donate at this age')</script>";
            require('index.php');
        }
    }
?>