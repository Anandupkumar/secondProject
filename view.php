<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="w3-black" style="margin:0">
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="blood1.png" style="width:100%">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
  </div>
</div>
</nav>
<!-- Page Content -->
<div class="" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Donate blood.</h1>
    <p>Be greatful and donate Blood.</p>
    <img src="blood2.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  
<?php
            $conn=new mysqli("localhost","root","","bbank");
            if(!$conn){
                die("Connection failed: " . $conn->connect_error);
            }else{ 
                if(isset($_POST['view'])){
                    ?>
                    <div class="w3-padding" id="main">
                    <a href="#" class="w3-button">1</a>
                    <a href="#second" class="w3-button">2</a>
                    <a href="#" class="w3-button">3</a>
                    <a href="#" class="w3-button">4</a>
                    <a href="#" class="w3-button">5</a>
                    <?php
                    $sql="SELECT * FROM bloodbank";
                    $result=$conn->query($sql);
                    if($result->num_rows >0){     
                        while($row=$result->fetch_assoc()){
                            $name=$row['name'];
                            $group=$row['bgroup'];
                            $age=$row['age'];
                            $sex=$row['sex'];
                            $date=$row['date'];
                            $bg=bloodGroup($group);
                            ?>
                            
                                <form>
                                    <div class="w3-third w3-margin-bottom">
                                                            
                                        <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off" >
                                        <li class="w3-white w3-xxxlarge" style="padding: 0"><img src="login_avatar.jpg" style="width:50%"></li>
                                        <li class="w3-padding-16"><b><?php echo "$name"; ?></b></li>
                                        <li class="w3-padding-16"><b><?php echo "$bg"; ?></b></li>
                                        <li class="w3-padding-16"><b><?php echo "$age"; ?></b></li>
                                        <li class="w3-padding-16"><b><?php echo "$sex"; ?></b></li>
                                        <li class="w3-padding-16"><b><?php echo "$date"; ?></b></li>
                                        </ul>
                                    
                                    </div>
                                </form>
                        <?php
                        }
                    }
                }else if(isset($_POST['edit'])){
                    ?>
                        <br>
                       <form action="next.php" method="post">
                            <label for="fname">Delete Donor</label><br><br>
                            <input type="text" id="fname" name="name" placeholder="Enter name for delete">
                            <button type="submit" class="search" name="delete">Delete</button>
                        
                        </form> 
                    <?php
                }
            }
?>

</div>
<?php
   function bloodGroup($group){
        if($group=="aposi"){
            $bg="A+";
            return $bg;
        }else if($group=="aneg"){
            $bg="A-";
            return $bg;
        }else if($group=="bpos"){
            $bg="B+";
            return $bg;
        }else if($group=="bneg"){
            $bg="B-";
            return $bg;
        }else if($group=="abpo"){
            $bg="AB+";
            return $bg;
        }else if($group=="abne"){
            $bg="AB-";
            return $bg;
        }else if($group=="opos"){
            $bg="O+";
            return $bg;
        }else{
            $bg="O-";
            return $bg;
        }
   }
?>
</div>
</body>
</html>