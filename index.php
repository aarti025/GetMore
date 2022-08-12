<?php 
include'function.php';
$register=new Register();   //object of class Register.
if(isset($_post["submit"])){
$result=$register->registration($_POST["name"],$_POST["email"],$_POST["password"],$_POST["cpassword"]);
if($result==1){
    echo"<script>alert('Registration Successful');</script>";
}
if($result==10){
    echo"<script>alert('Username or Email has already exist');</script>";
}
if($result==100){
    echo"<script>alert('Password does not match');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sonam project</title>
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    console.log('sdfsdf');
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</head>
<body>
    <div class="super-main light1">
        <nav class="navbar">
            <div class="logo">
                Logo...
            </div>
            <div class="nav1">
                <div class="nav11">
                    <a class="light" href="index.html">Home</a>
                </div>
                <div class="nav11">
                    <a class="light" href="#about">About Us</a>
                </div>
                <div class="nav11 nav12">
                    <a class="light" href="#">Login</a>
                </div>
            </div>
        </nav>

        <!-- Mobile hamburger -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="sdi">
               <!--<button class="mode1">Dark Mode</button>--> 
                <a onclick="closeNav()" href="index.html">Home</a>
                <a onclick="closeNav()" href="#about">About Us</a>
                <a onclick="closeNav()" href="#">Login</a>
            </div>
        </div>
        <!-- <span style="font-size:30px;cursor:pointer">&#9776;</span> -->
        <div>
            <svg class="navbtn" onclick="openNav()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
         <div class="main">
            <div class="main11 bg-img">   
                <h1 class="white-font"><span class="bold">Hello</span> guys this is my website<br> </h1><br>
                <p class="white-font sub-title">I am Sonam Thapliyal</p>
                <div class="btn-box">
                    <div></div>
                    <button class="btn btn1">Get Started</button>
                </div>               
            </div>
        </div>
        
        
        <div class="main">
            <div class="main11 " style="width:50%" id="about">
                <h1 class="light">About Us</h1>
                <p class="light ">The first Blockchain resources for real-time crypto news, market analyses,
                    education & portfolio
                    research entities actively publishing content across Telegram, YouTube, Twitter, Instagram, and
                    LinkedIn to a community of 500k+ active crypto traders and subscribers across all social media
                    platforms combined.</p>
            </div> 
            <div class="main12 " id="about">
              <img src="img/Tourist.png"alt="turist">
            </div> 
        </div>
       
        <div class="news">
            <div class="news1">
                <h1 class="light">SignUp</h1>
            </div>
            <div class="news2">
                <form action="index.php" method="post">
                    <input class="light2" type="text" name="name" placeholder="Name">
                    <input class="light2" type="email"name="email" placeholder="Email">
                    <input class="light2" type="password"name="password" placeholder="Password">
                    <input class="light2" type="password"name="cpassword" placeholder="Confirm Password">
                    <div class="btn-box">
                    <div></div>
                    <button class="btn" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="foot">
                <div class="foot1">
                    <h1>Logo..</h1>
                    <p class="light">Our team releases frequent market analyses to offer you an overall picture of
                        Bitcoin, altcoins
                        and the market sentiment.</p>
                </div>
                <div class="foot2">
                    <div><img  src="img/Facebook - Original.png" alt=""></div>
                    <div><img  src="img/Instagram - Original.png" alt=""></div>
                    <div><img  src="img/Path 3.png" alt=""></div>
                    <div><img src="img/Twitter - Original.png" alt=""></div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>

