<?php           
   $conn=new mysqli("localhost","root","","bbank");
    if(!$conn){
          die("Connection failed: " . $conn->connect_error);
    }else{ 
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $group=$_POST['group'];
        $date=$_POST['date'];
        $sql="INSERT INTO bloodbank (name,sex,age,bgroup,date) VALUES ('$name','$sex','$age','$group','$date')";
        if($conn->query($sql)){
            echo "inseted";
        }else{
            echo "not inserted";
        }
    }
?>