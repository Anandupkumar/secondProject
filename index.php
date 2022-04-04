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
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="blood1.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>DONATE</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>SEARCH</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>DONORS</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">DONATE</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">SEARCH</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">DONORS</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Donate blood.</h1>
    <p>Be greatful and donate Blood.</p>
    <img src="blood2.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">This website</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about this website. Some text about this website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">Donate</h3>
    
    <h3>Enter your details to doante blood</h3><br>

    <div class="dform">
    <form action="donate.php" method="post">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="sex">sex</label>
        <select id="sex" name="sex">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
        </select>

        <label for="lname">age</label>
        <input type="number" id="lname" name="age" placeholder="Your age..">

        <label for="bloodgroup">Blood group</label>
        <select id="blood" name="group">
        <option value="apos">A +</option>
        <option value="aneg">A -</option>
        <option value="bpos">B +</option>
        <option value="bneg">B -</option>
        <option value="abpo">AB +</option>
        <option value="abne">AB -</option>
        <option value="opos">O +</option>
        <option value="oneg">O -</option>
        </select>

        <label for="ldate">Last donated date</label>
        <input type="date" id="date" name="date" placeholder="Your last donated date..">
    
        <input type="submit" value="Donate">
    </form>
    </div>
    
  <!-- End donation Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Search Blood</h2>
    <hr style="width:200px" class="w3-opacity">

    <form action="index.php" method="post">
        <label for="fname">Search blood group</label><br><br>
        <select id="blood" name="bgroup">
        <option value="apos">A +</option>
        <option value="aneg">A -</option>
        <option value="bpos">B +</option>
        <option value="bneg">B -</option>
        <option value="abpo">AB +</option>
        <option value="abne">AB -</option>
        <option value="opos">O +</option>
        <option value="oneg">O -</option>
        </select>
        <button type="submit" class="search" name="search"><i class="fa fa-search"></i></button>
    </form>

    <?php           
        $conn=new mysqli("localhost","root","","bbank");
        if(!$conn){
            die("Connection failed: " . $conn->connect_error);
        }else{ 
            if(isset($_POST['search'])){
                $blood=$_POST['bgroup'];
                $sql="SELECT name,sex,age,date FROM bloodbank WHERE bgroup='$blood'";
                $result=$conn->query($sql);
                if($result->num_rows >0){  
                    ?>
                        <h3 class="w3-padding-16 w3-text-light-grey">Result</h3>
                    <?php         
                        while($row=$result->fetch_assoc()){
                            $name=$row['name'];
                            $age=$row['age'];
                            $sex=$row['sex'];
                            $date=$row['date'];
                            ?>
                            <form>
                                <div class="w3-third w3-margin-bottom">
                                                        
                                    <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off" >
                                    <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="login_avatar.jpg" style="width:100%"></li>
                                    <li class="w3-padding-16"><b><?php echo "$name"; ?></b></li>
                                    <li class="w3-padding-16"><b><?php echo "$age"; ?></b></li>
                                    <li class="w3-padding-16"><b><?php echo "$sex"; ?></b></li>
                                    <li class="w3-padding-16"><b><?php echo "$date"; ?></b></li>
                                    </ul>
                                
                                </div>
                            </form>
                            <?php
                        }
                }else{
                    ?>
                    <h4 class="w3-padding-16 w3-text-light-grey">No results</h4>
                    <?php
                }
            }
        }
    ?>
    
    </div>
  <!-- End Portfolio Section -->

  <!-- Contact Section -->
    <div class="w3-padding-64 w3-content" id="contact">
        <h2 class="w3-text-light-grey">Search and Edit Donors</h2>
        <hr style="width:200px" class="w3-opacity"><br>
        
           <br>
            <form action="index.php" method="post">
                <label for="fname">Search name</label><br><br>
                <input type="text" id="fname" name="name" placeholder="Enter name..">
                <button type="submit" class="search" name="search2"><i class="fa fa-search"></i></button>
            </form> 
            
            <?php
                $conn=new mysqli("localhost","root","","bbank");
                if(!$conn){
                    die("Connection failed: " . $conn->connect_error);
                }else{
                    if(isset($_POST['search2'])){
                        $donor=$_POST['name'];
                        $sql="SELECT sex,age,bgroup,date FROM bloodbank WHERE name='$donor'";
                        $result=$conn->query($sql);
                        if($result->num_rows >0){  
                            ?>
                              <h3 class="w3-padding-16 w3-text-light-grey">Result</h3>  
                            <?php
                            while($row=$result->fetch_assoc()){
                                $blood=$row['bgroup'];
                                $age=$row['age'];
                                $sex=$row['sex'];
                                $date=$row['date'];
                                $bg=bloodGroup($blood);
                                ?>
                                    <form>
                                        <div class="w3-third w3-margin-bottom">
                                                        
                                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off" >
                                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="login_avatar.jpg" style="width:100%"></li>
                                            <li class="w3-padding-16"><b><?php echo "$donor"; ?></b></li>
                                            <li class="w3-padding-16"><b><?php echo "$age"; ?></b></li>
                                            <li class="w3-padding-16"><b><?php echo "$sex"; ?></b></li>
                                            <li class="w3-padding-16"><b><?php echo "$bg"; ?></b></li>
                                            <li class="w3-padding-16"><b><?php echo "$date"; ?></b></li>
                                            </ul>
                                
                                        </div>
                                    </form>
                                <?php
                            }
                        }else{
                            ?>
                                <h4 class="w3-padding-16 w3-text-light-grey">No results</h4>
                            <?php
                        }
                    }
                }
            ?> 
            <div class="w3-bar">
                <br>
                <form action="view.php" method="post">
                    <button class="w3-bar-item w3-button" style="width:50%" name="view">View all Donors</button>
                    <button class="w3-bar-item w3-button" style="width:50%" name="edit">Edit or Delete Donors</button>
                </form>
            </div>      
    </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="" target="_blank" class="w3-hover-text-white">Anandu_P_kumar</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>
</body>
</html>