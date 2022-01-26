<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
   
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/reservation.css">
    
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
<body>
  <style >
    * {
    padding: 0;
    margin: 0;
    outline: 0px;
}

img {
    width: 100%;
}

.back_img1 {
   
   background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0.8,0.9)), url('img/bg10.jpg');
     height: 90vh;
     width: auto;
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
     background-attachment: fixed;
     margin-top: 46px;
     
  }
  
  .text3{
      
      padding-top: 250px;
          
   }

      .navbar{
    
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
.navbar-nav ul{
  display: inline;
  cursor: pointer;
}

.navbar-nav ul li {
    padding-right:.7rem;
}
.navbar-dark .navbar-nav .nav-link {
    color:white;
    padding-top: .8rem;
}
.navbar-dark .navbar-nav .nav-item .nav-link {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 18px;
    margin: 5px 7px;
    
}

.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
  color:tomato;
  
}

.dropdown-menu .dropdown-item{
    color:white;
    padding-top: .8rem; 
}
.dropdown-menu .dropdown-item:hover{
  
  color: tomato;
      border-radius: 5px;
      text-align: 17px;


}


.navbar .searchbar{
    position: relative;
}
.navbar .searchbar input[type="text"]{
    border:  0;
    padding: 0px;
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
    background-color: rgb(30, 39, 46);
    transition: all 0.3s ease;
}

.navbar .searchbar input[type="text"].active{
    width: 250px;
    padding: 0 10px;
    transition: all 0.5s 0.2s ease;
}



body{
	font-family: Arial;
	background-color: #f1f1f1;
}
*{
	box-sizing: border-box;
}
.row:after{
	content: '';
	display: table;
	clear: both;
}


h2{
	color:#000000;
margin:1.5 0px;	
}
.left-column{
float: left;
width: 65%;	
}

.right-column{
 width: 35%;
 float: right;
 padding-left:20px;
}
.card{
	padding: 20px;
	background-color: #ffffff;
 margin-top:20px;
}

.card img{
	width: 100%;
}


.right-column .card img{
	margin-bottom: 10px;
}

/*responsive */

@media(max-width:800px){
	.left-column,.right-column{
    width: 100%;
    padding: 0px;
	}
}

footer{
      margin-top: 100px;
      width: 100%;
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
    
  </style>
   
  <!--navbar start-->
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
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(0,0,0.7,0.3);important;">
                     <a class="dropdown-item" href="dailymenu.php">Daily Items</a>
                                <a class="dropdown-item" href="menu1.php">Special Menu</a>
                                <a class="dropdown-item" href="menu2.php">Evening Items</a>

                   
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
                  <input type="text" placeholder="search">
                  <div class="icon">
                      <i class="fa fa-search fa-1.5x"></i>  
                  </div>
              </div>
            </div>
          </div>
          </nav>
          
    <!--navbar end-->

      <!--content  heading start-->
      
           <div class="back_img1">
      <div class="text3">
        <h2 class="text-center wow bounceInDown " data-wow-duration="2s" data-wow-delay="1s" style="color: white ;font-size:34px ;font-family: 'Righteous', cursive; font-style: italic;">
          NEWEST BLOG</h2> <br>
        <p class="text-center text-white wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1.2s" style="font-size:30px;  font-style: italic;"> All information and stories from our blog will help you have a best meal for your day.</p>
  
      </div>
     </div>
  
      
      <!--content  heading end-->

<div class="container">
<div class="row">
        <div class="left-column">
          <div class="card">
            <h2 class="wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Amazing Shrimp Rice Noodle with Enriching Broth</h2>
            <h5 style="font-weight: 500;">Posted on, Dec 7, 2017, by<span style="color: rgb(255, 121, 63,.9); padding-left: 5px;">Raechel</span></h5>
            <img src="img/salad4.jpg" alt="blog " style="height: 420px;">
            
            <p  class="pt-2" style="font-size:17px;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur 
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
               veniam, quis nostrud exercitation incididunt ut labore et dolore magna aliqua. Ut enim ad ullamco.<br><a href="#" style="color: black">
                <i class="fas fa-arrow-circle-right"></i>
                Read More
              </a></p>
          </div>
          <div class="card">
            <h2 class="wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Teriyaki Fish Salad with Sour Lemon</h2>
            <h5 style="font-weight: 500;">Posted on, Oct 7, 2019, by<span style="color: rgb(255, 121, 63,.9); padding-left: 5px;">Rick Nick</span></h5>
            <img src="img/salmon1.jpg" alt="blog " style="height: 420px;">
           
            <p  class="pt-2" style="font-size:17px;">Sunt in culpa qui officia deserunt mollit anim id est
               laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
               et dolore magna aliqua. Ut enim ad minim veniam, incididunt ut labore et dolore magna aliqua. Ut enim adquis nostrud exercitation ullamco.<br><a href="#" style="color: black">
                <i class="fas fa-arrow-circle-right"></i>
                Read More
              </a> </p>
          </div>

          <div class="card">
            <h2 class="wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Rasian Chicken with Vegetable Souces</h2>
            <h5 style="font-weight: 500;">Posted on, March 9, 2020, by<span style="color: rgb(255, 121, 63,.9); padding-left: 5px;">Thomas min</span></h5>
            <img src="img/chicken1.jpg" alt="blog " style="height: 420px;">
            
            <p  class="pt-2" style="font-size:17px;">Sunt in culpa qui officia deserunt mollit anim id est laborum 
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation incididunt ut labore et dolore magna aliqua. Ut enim adullamco.<br><a href="#" style="color: black">
                <i class="fas fa-arrow-circle-right"></i>
                Read More
              </a></p>
          </div>
          <div class="card">
            <h2 class="wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Salad with Macaroni Vegetable</h2>
            <h5 style="font-weight: 500;">Posted on, March 9, 2020, by<span style="color: rgb(255, 121, 63,.9); padding-left: 5px;">Thomas min</span></h5>
            <img src="img/macaroni1.jpg" alt="blog " style="height: 420px;">
           
            <p class="pt-2" style="font-size:17px;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
               adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation incididunt ut labore et dolore magna aliqua. Ut enim ad ullamco. <br><a href="#" style="color: black">
                  <i class="fas fa-arrow-circle-right"></i>
                  Read More
                </a></p>
          </div>
        </div>
   
        <div class="right-column">
            <div class="card">
                 <h2 class="wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">About Our Restaurant.</h2>
                 <img src="img/restu1.jpg" alt="me"/>
                 <p>There are many variations of passages of Lorem Ipsum available, but 
                   the majority have suffered alteration in some form, by injected humour, or 
                   randomised words which don't look even slightly believable. If you are going to use a 
                   passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                    in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                     predefined chunks as necessary, making this the first true generator on the Internet.
                     he standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                      Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
                      reproduced in their exact original form, accompanied by English versions 
                      from the 1914 translation by H. Rackham
                   Some in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                 <h3 class="wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">Some Popular Story of US....</h3>
                 <img src="img/grp1.jpg" alt="popular"/>
                 <img src="img/grp2.jpg" alt="popular"/>
                 <img src="img/grp11.jpg" alt="popular"/>
                 <img src="img/grp10.jpg" alt="popular"/>
                 <img src="img/grp8.jpg" alt="popular"/>
                 <img src="img/grp7.jpg" alt="popular"/>
                 
            </div>
            <div class="card">
              <h3 class="text-black pt-1 wow bounceInDown " data-wow-duration="2s" data-wow-delay="1s">Follow Us</h3>
              <p class="text-black wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s"> Please Follow us on our social Media Profile in order to keep updated.</p>
              <div class="row">
                <div class="col-3">
                  <a href="#"  style="padding-right: 8px ;color:black;"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
                <div class="col-3">
                  <a href="#" style="padding-right: 8px; color:black;"><i class="fab fa-twitter-square fa-2x"></i></a>

                </div>
                <div class="col-3">
                  <a href="#"  style="padding-right: 8px; color:black;"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <div class="col-3">
                  <a href="#" style="color:black;"><i class="fab fa-pinterest-square fa-2x"></i></a>

                </div>

              </div>
             

            </div>
        </div>
    </div>
</div>
    


    
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
                  <h4 class="text-center">Reservation Numbers <br>
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