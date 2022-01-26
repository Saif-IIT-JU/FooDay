<?php

$hostname= "localhost";
$username="root";
$password="";
$dbname="fooday";
$connect = mysqli_connect($hostname,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $u_name= $_POST['name'];
    $u_phone= $_POST['phone'];
    $u_email= $_POST['email'];
    $u_message= $_POST['message'];

    $sql="INSERT INTO contact (id,name,phone,email,message) VALUES (NULL,'$u_name','$u_phone','$u_email','$u_message')";
    $insertion = mysqli_query($connect,$sql);


}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
   
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
 ></script>
    <script>
        $(document).ready(function(){
            $(".fa-search").click(function(){
                $(".icon").toggleClass("active");
                $("input[type='text']").toggleClass("active");

            });

        });
    </script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    * {
    padding: 0;
    margin: 0;
    outline: 0px;
}

img {
    width: 100%;
}
body {
	height: 100vh;
	display: grid;
	align-items: center;
	font-family: 'Poppins', sans-serif;
}
.back_img1 {
   
   
 background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0.8,0.1)), url('images/bg7.jpg');
   height: 87vh;
   
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
   background-attachment: fixed;
    margin-top: 71px;
   
}

.text3{
    
   padding-top: 291px;
        
 }
 .navbar{
    text-transform:uppercase;
    font-weight: 700;
    font-size: .9rem;
    letter-spacing: .1rem;
    background-color: black!important;
}
.navbar-brand img{
    height: auto;
    width: auto;
    margin: auto;
}
.navbar-nav li {
    padding-right:.7rem;
}
.navbar-dark .navbar-nav .nav-link {
    color:white;
    padding-top: .8rem;
}
.navbar-dark .navbar-nav .nav-item .nav-link {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 17px;
    margin: 5px 7px;
    
}

.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
  color:tomato;

    border-radius: 5px;
  
   

}

.dropdown-menu .dropdown-item{
    color:white;
    padding-top: .8rem; 
}
.dropdown-menu .dropdown-item:hover{
  
  color: tomato;
    

}


.navbar .searchbar{
    position: relative;
}
.navbar .searchbar input[type="text"]{
    border:  0;
    padding: 0 px;
    width: 0px;
    height: 35px;
    border-radius: 3px;
    transition: all 0.3s ease;

}
.navbar .searchbar .icon{
    position: absolute;
    top:0;
    right: 0;
    background:none;
    width: 35px;
    height: 100%;
    border-radius: 3px;
    color: #fff;
    transition: all 0.5s 0.2s ease;
}

.navbar .searchbar .icon i{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;

}
.navbar .searchbar .icon.active{
    background: rgb(30, 39, 46);
    transition: all 0.3s ease;
}

.navbar .searchbar input[type="text"].active{
    width: 250px;
    padding: 0 10px;
    transition: all 0.5s 0.2s ease;
}
.contact-wrap {
	width: 80%;
	height: auto;
	margin: auto;
	display: flex;
	flex-wrap: wrap;
	padding-bottom: 40x;
}

.contact-in {
	padding: 40px 30px;
}

.contact-in:nth-child(1) {
	flex: 30%;
	background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0.8,0.6)), url('images/contact13.jpg');
	color: white;
}

.contact-in:nth-child(2) {
	flex: 45%;
	background: #fafafa;
	box-shadow: 10px 15px 20px rgba(0, 0, 0, .2);
}

.contact-in:nth-child(3) {
	flex: 25%;
	padding: 0;
}

.contact-in h1 {
	font-size: 24px;
	color: white;
	text-transform: uppercase;
	font-weight: 500;
	margin-bottom: 20px;
}

.contact-in h2 {
	font-size: 20px;
	font-weight: 400;
	margin-bottom: 15px;
}

.contact-in h2 i {
	font-size: 16px;
	width: 40px;
	height: 40px;
	margin-right: 10px;
	background: #f5f5f5;
	color: #000;
	border-radius: 50px;
	line-height: 40px;
	text-align: center;
}

.contact-in p {
	font-size: 14px;
	font-weight: 300;
	margin-bottom: 20px;
}

.contact-in ul {
	padding: 0;
	margin: 0;
}

.contact-in ul li {
	list-style: none;
	display: inline-block;
	margin-right: 5px;
	margin-top: 5px;
}

.contact-in ul li a {
	display: block;
	width: 30px;
	height: 30px;
	text-align: center;
	background: black;
	border-radius: 50px;
}

.contact-in ul li a i {
	font-size: 14px;
	line-height: 30px;
	color: #000;
}

.contact-in form {
	width: 100%;
	height: auto;
}

.contact-in-input {
	width: 100%;
	height: 40px;
	margin-bottom: 20px;
	border: 1px solid black;
	outline: none;
	padding-left: 5px;
	background: transparent;
	color: black;
	font-size: 12px;
	font-weight: 300;
	font-family: 'Poppins', sans-serif;
}

.contact-in-input::placeholder {
	color: black;
}

.contact-in-textarea {
	width: 100%;
	height: 140px;
	margin-bottom: 20px;
	border: 1px solid black;
	outline: none;
	padding-top: 5px;
	padding-left: 5px;
	background: transparent;
	color: black;
	font-size: 12px;
	font-weight: 300;
	font-family: 'Poppins', sans-serif;
}

.contact-in-textarea::placeholder {
	color :black;
}

.contact-in-btn {
	width: 100%;
	height: 40px;
	border: 1px transparent;
	outline: none;
	background: #ff793f;;
  color: white;
  border-radius: 110px;
	font-size: 12px;
	font-weight: 300;
	font-family: 'Poppins', sans-serif;
  cursor: pointer;
  bor
}

.contact-in-btn:hover{
	  background-color:#ff793f; ;
color: white;
font-weight: bold;
padding: 10px 45px;
border: none;
font-size: 14px;
border-radius: 110px;
transform: scale(1.03);
box-shadow:  10px 12px 15px rgba(0, 0, 0, .4);
cursor: pointer;
transition: all .3s;

}


.contact-in iframe {
	width: 100%;
	height: 100%;
}

footer{
      margin-top: 100px;
  }
  .foot{
    background-image:url('images/footer.jpg') ;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
   
}
.logo2{
      
      width: 180px;
      margin-top: 50px;
	  
  }
  .form{
      
    background-image:url('images/foot.jpg') ;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  .segment-two h5:before{
	  content: '|';
	  color: white;
	  padding-right:10px ;
  }
  .segment-two ul {
	  margin :0;
	  padding: 0;
	  list-style: none;

  }

  .segment-two ul li {
	  border-bottom: 1px solid rgba(255,255,255,0.3);
	  line-height: 29px;
  }
  .segment-two ul li a {
	  color : skyblue;
	  text-decoration: none;

  }
  .segment-three form input [type=submit]{
	  background: #c65039;
	  border :none;
	  padding : 3px 15px;
	  margin-left :-5px;
	  color :#fff;
	  text-transform : uppercase;
  }

@media only screen and (max-width:480px) {
	.contact-in:nth-child(1) {
		flex: 50%;
	}

	.contact-in:nth-child(2) {
		flex: 50%;
	}

	.contact-in:nth-child(3) {
		flex: 100%;
	}

}

@media only screen and (max-width:360px) {
	.contact-in:nth-child(1) {
		flex: 50%;
	}

	.contact-in:nth-child(2) {
		flex: 50%;
	}

	.contact-in:nth-child(3) {
		flex: 100%;
	}

}

</style>
<body>

    <body data-spy="scroll" data-target="navbarResponsive">
   
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark fixed-top">
            <div class="container">
            
                    <a class="navbar-brand" href="#">
                        <img src="images/logo1.png"  style="height: auto; width: auto; padding-top: 3px ; padding-bottom: 3px;" class="d-inline-block align-top" alt="" loading="lazy">
    
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
    
                </button>
          
            <div class="collapse navbar-collapse " id="navbarResponsive">
            
              <ul class="navbar-nav mx-auto ">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu <span class="sr-only">(current)</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(47, 54, 64,.6)!important;">
                    <a class="dropdown-item" href="dailymenu.php">Daily Items</a>
                    <a class="dropdown-item" href="menu1.php">Special Menu</a>
                    <a class="dropdown-item" href="menu2.php">Evening Items</a>
                    <a class="dropdown-item" href="#"></a>
                   
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="blog.php" >Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php" >Contact</a>
                  </li>
              </ul>
              
              
            </div>
            <div class="col-auto">
                <div class="searchbar">
                    <form action="search.php" method="post">
            <input type="text" name="keyword" placeholder="search">
            
          </form>
                    <div class="icon">
                        <i class="fa fa-search"></i>  
                    </div>
                </div>
              </div>
            </div>
          </nav>
		  


		  <div class="back_img1">
			<div class="text3">
				<h2 class="text-center wow bounceInDown " data-wow-duration="2s" data-wow-delay="1s" style="color: white ;font-size:38px;font-family: 'Righteous', cursive; font-style: italic;">
					 Contact With US</h2> <br>
				<h4 class="text-center text-white wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1.2s" style="font-size:30px;  font-style: italic;">Contact With US If You Have Any Query.</h4>
	
			</div>
		 </div>

		<br><br><br>
		  

        <div class="contact-wrap">
			<div class="contact-in">
				<h1>Contact Info</h1>
				<h2><i class="fa fa-phone"  aria-hidden="true"></i> Phone</h2>
				<p>123-456-789</p>
				<h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
				<p>info@democompany.com</p>
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
				<p>PC Culture Housing , Dhaka, Bangladesh</p>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="contact-in">
				<h1 style="color: black;">Send a Message</h1>
				<form action="" method="POST">
					<input type="text" name="name" placeholder="Full Name" class="contact-in-input">
					<input type="text" name="phone" placeholder="Phone" class="contact-in-input">
					<input type="email" name="email" placeholder="Email" class="contact-in-input">
					<textarea name="message" placeholder="Message" class="contact-in-textarea"></textarea>
					<input type="submit"  name="submit" value="SUBMIT" class="contact-in-btn">
				</form>
			</div>
			<div class="contact-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703965236!
                2d90.27923822956305!3d23.780573256519368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1607
                613573431!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" 
				aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
          
		<br><br>
		

      <footer>
        <div class="foot">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-6">
                    <img class="logo2 " src="images/logo1.png" alt="">
                         <p class=" text-white mt-5">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>
                      incididunt ut labore et dolore magna aliqua.</p>
                           <hr class="my-4"> <br>

                  </div>
                  <div class="col-6 segment-two">
                    <h5 class="text-white mt-5">QUICK LINKS</h5>
                   <ul>
                    <li><a href="#" style="color:#ff793f;" >ABOUT.......</a></li>
                      <li><a href="#" style="color:#ff793f;">MENU.......</a></li>
                      <li><a href="#" style="color:#ff793f;">BLOG........</a></li>
                      <li><a href="#" style="color:#ff793f;">CONTACT.....</a></li>
                   </ul>

                  </div>
                </div>
                  
                   
                <div class="row">
                  <div class="col-6">
                    <address class="text-white">
                      <i class="far fa-address-card fa-1x" style="padding-right: 9px;"></i>57 White Oak Drive Kansas City <br>
                      689 Lynn Street South Boston<br><br>
                      <i class="fas fa-phone fa-1x" style="padding-right: 9px;"></i>(617)-276-8031<br> 
                      (617)-276-8031
                    </address>
                  </div>
                  <div class="col-6 segment-three pt-1">
                    <h4 class="text-white pt-1" >Follow Us</h4>
                    <p class="text-white"> Please Follow us on our social Media Profile in order to keep updated.</p>
                    <a href="#"  style="padding-right: 8px ;color:white;"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" style="padding-right: 8px; color:white;"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <a href="#"  style="padding-right: 8px; color:white;"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" style="color:white;"><i class="fab fa-pinterest-square fa-2x"></i></a><br><br>

                    <form style="padding-top: 2px" >
                      <input type="email" class="footform" >
                      <input type="submit" value="send" style="background-color:rgb(205, 97, 51); font-size: 14px; font-weight: bold; padding: 2px 14px ;">
                    </form>


                  </div>
      
                </div>
      
      
              </div>
              <div class="col-md-4">
                <div class="form">
                  <h3 class="text-center text-white ">Open Hour</h3>
                  <p class="mt-3 ml-4">
                    Tuesday .......................................7AM - 9PM <br> <br>
                    
                    Wednesday .....................................7AM - 9PM <br> <br>
                    Thursday ......................................7AM - 9PM <br> <br>
                    
                    Friday ........................................7AM - 9PM <br> <br>
                    Saturday.......................................7AM - 9PM <br> <br>
                    
                    Sunday ........................................7AM - 9PM <br> <br>
                    Monday ........................................7AM - 9PM <br> <br>
                    
                  </p>
                  <h4 class="text-center pb-2">Reservation Numbers <br>
                    (617)-276-8031</h4> <br>
                  
                
                </div>
              </div>
            </div>
      
          </div>
        </div>
      
      </footer>
          <!--footer end-->



    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>

    <script>
        new WOW().init();
    </script>
    
</body>
</html>