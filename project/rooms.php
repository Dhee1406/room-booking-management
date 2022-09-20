<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <style type="text/css">
            .btn{
                margin-right: 15px;
            }
			.form{
            margin-top:0px;
           }
        .form p{
            color:rgb(4, 4, 61);
          }
          .header{
            background-image: url('images/ho1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center ;
            background-size:cover;
        }
          
    </style>
    <title>Document</title>
   </head>
     <body>


        <!-- header  -->
        <header class="header" id="header">
            <div class="head-top">
                <div class="site-name">
                    <span>OTELSHIA</span>
                </div>
                <div class="site-nav">
                        <a href="home.html">HOME</a>
                        <a href="index.php">ADMIN</a>
                        <a href="rooms.php">BOOKING</a>
                        <a href="admin/payment.php">PAYMENT</a>
                    </div>
                </div>
            </div>
            
            <div class="head-bottom flex">
                <h2>WELCOME TO OTELSHIA</h2>
                <p>Land of volcanic peaks, scenic waterfalls, hot springs and rich flora and fauna. National parks, wildlife refuges, quaint villages, historic sites and a countless sum of golden beaches in the area provide a variety of activities for guests that seek an authentic Costa Rican experience.</p>
                <button type="button" class="head-btn">ROOM BOOKING</button>
            </div>
        </header>
        <!-- end of header  -->
        <section class="room sec-width" id="rooms">
            <div class="title">
                <h2>ROOMS</h2>
            </div>
            <div class="rooms-container">
                <!-- single room  -->
                <article class="room">
                    <div class="room-image">
                        <img src="images/i1.jpg" alt="room image">
                    </div>
					<div class = "room-text">
                        <h3>SINGLE AC ROOM</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Single bed(queen/kingsize)
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                 AC
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Spacious
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₹7000.00 /</span>PER DAY
                        </p>
                    
                        <button id="myButton" class="float-left submit-button" >book now</button>
                        <script type="text/javascript">
                        document.getElementById("myButton").onclick = function () {
                         location.href = "singleroom.php";
                         };
                         </script>
                        <!-- <button type="button" class="btn">book now</button> -->

                    </div>
                </article>
                <!-- end of single room  -->
                <!-- single non room  -->
                <article class = "room">
                   
                    <div class = "room-image">
                        <img src = "images/i2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>SINGLE NON AC ROOM</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Single bed(queen/kingsize)
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Non AC
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Spacious
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₹10000.00 /</span>PER DAY
                        </p>
                        <button id="MYButton" class="float-left submit-button" >book now</button>
                        <script type="text/javascript">
                        document.getElementById("MYButton").onclick = function () {
                         location.href = "singlenonacroom.php";
                         };
                         </script>
                        <!-- <button type = "button" class = "btn">book now</button> -->
                    </div>
                </article>
                <!-- end of single non room -->
                <!-- double room -->
                <article class = "room">
                    
                     <div class = "room-image">
                        <img src = "images/i3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>DOUBLE BED ROOM</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Double bed(queen/kingsize)
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                AC/Non AC
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Spacious
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>₹15000.00 /</span> PER DAY
                        </p>
                         <!-- <button type = "button" class = "btn">book now</button> -->
                        <button id="Buton" class="float-left submit-button" >book now</button>
                        <script type="text/javascript">
                        document.getElementById("Buton").onclick = function () {
                         location.href = "doubleroom.php";
                         };
                         </script>
                    </div>
                </article>
                <!-- end of double room -->
            </div>
        </section>
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores autem veniam illum? Delectus aliquam dicta officiis, quae tenetur reprehenderit cum optio impedit voluptas fugiat iusto id nulla natus aperiam dolorem.</p>
                    <ul class="social-icons">
                        <li class="flex"><i class="fa fa-twitter fa-2x"></i></li>
                        <li class="flex"><i class="fa fa-facebook fa-2x"></i></li>
                        <li class="flex"><i class="fa fa-instagram fa-2x"></i></li>
                    </ul>
                </div>
                <div>
                    <h2>Useful Links</h2>
                    <a href="#">Blog</a>
                    <a href="#">Rooms</a>
                    <a href="#">Subcriptions</a>
                    <a href="#">Gift Card</a>
                </div>
                <div>
                    <h2>Privacy</h2>
                    <a href="#">Career</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Services</a>
                </div>
                <div>
                    <h2>Have A Question?</h2>
                    <div class="contact-item">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer  -->
</body>
</html>