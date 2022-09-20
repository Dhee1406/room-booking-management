<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\bootstrap.css">
        <style>
           .header{
            background-image: url('images/ho1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center ;
            background-size:cover;
        }
          img{
                width: 100%;
                display: block;
            }
            @media(max-width: 500px){
                body{
                    font-size: 14px;
                }
            }

            /* header */
            .header{
                min-height: 100vh;
                color: rgb(4, 4, 61);
                padding: 25px;
                display: flex;
                flex-direction: column;
                align-content: stretch;
                font-weight: bold;
            }
            .head-top{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .site-nav a{
                text-decoration:none;
                margin-right:20px;
                text-align:center;
                align-items:center;
                align-content:center;
                justify-content:center;
                font-size:medium;
                font-weight: bold;
                font-family: Times New Roman;
                color:rgb(145, 18, 18);
            }
            .site-nav a:hover{
                color:var(--yellow);
                text-decoration: underline;
            }
            .head-top span{
                cursor: pointer;
                letter-spacing: 2px;
                transition: var(--transition);
            }
            .head-top span:hover{
                color: var(--yellow);
            }
            .head-bottom{
                flex: 1;
                text-align: center;
                width: 80vw;
                margin: 0 auto;
            }
            .head-bottom h2{
                padding: 22px 0;
                font-size: 45px;
                color:rgb(4, 4, 61);
                border-bottom: 1px solid #fff;
            }
            .head-bottom p{
                opacity: 0.7;
                font-size: 20px;
                margin: 45px auto;
                width: 60vw;
                color:rgb(145, 18, 18);
            }
            footer{
                background: var(--dark);
                color: #fff;
                text-align: center;
            }
        .footer-container{
            width: 85vw;
            margin: 0 auto;
            padding: 30px 0;
        }
        .footer-container p, .footer-container a, .footer-container span{
            opacity: 0.8;
        }
        .footer a{
            display: block;
            color: #fff;
            text-decoration: none;
        }
        .social-icons{
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 15px 0;
        }
        .social-icons li{
            margin: 0 10px;
            width: 50px;
            height: 50px;
            background: #2e2e2e;
            border-radius: 50%;
            transition: var(--transition);
            cursor: pointer;
        }
        .social-icons li:hover{
            background: #fff;
            color: #2e2e2e;
        }
        .contact-item span{
            display: block;
        }
        @media(min-width: 900px){
            .footer-container{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 20px;
            }
        }
        @media(min-width: 1170px){
            .footer{
                text-align: left;
            }
            .footer-container{
                grid-template-columns: repeat(4, 1fr);
            }
            .footer-container div:nth-child(1) p{
                padding-right: 20px;
            }
            .contact-item{
                display: grid;
                grid-template-columns: 10% 90%;
                margin-bottom: 15px;
                align-items: center;
            }
        }
        .table{
            background-color:#d7daca;
        }

        </style>
</head>  
<body>  
    <!-- header  -->
    <header class="header" id="header"> 
            <div class="head-top">
                <div class="site-name">
                    <span>OTELSHIA</span>
                </div>
                <div class="site-nav">
                        <a href="..\home.html">HOME</a>
                        <a href="admin_dashboard.php">ADMIN</a>
                        <a href="rooms.php">BOOKING</a>
                        <a href="payment.php">PAYMENT</a>
                    </div>
             </div>  
    
    <br><br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post">
                    <a class="btn btn-primary" href="rooms.php">Book Room</a>
                    <a class="btn btn-success" href="py.php">Payment Details</a>
                    <a class="btn btn-warning" href="admin_dashboard.php">View Users Detail</a>
                    <a class="btn btn-info" href="customer.php">Customers</a>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br><br><br>
        <div class="rows">
           <div class="col-nd-12">
            <centre><h3>CHECKED IN USER DETAILS</h3></centre>
           </div>
            </div>
            <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Customer Name</th>
                            <th>Customer ID</th>
                            <th>Customer Mobile</th>
                            <th>Room No</th>
                            <th>Customer Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel management");
                    $query = "select * from singleroom where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['customer_name'];?></td>
                                <td><?php echo $row['customerid'];?></td>
                                <td><?php echo $row['customer_mobile'];?></td>
                                <td><?php echo $row['roomno'];?></td>
                                <td><?php echo $row['customer_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['indate'];?></td>
                                <td><?php echo $row['outdate'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        <br><br>
        <div class="rows">
           <div class="col-nd-12">
            <centre><h3>CHECKED IN USER DETAILS</h3></centre>
           </div>
           <br>
            </div>
            <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Customer Name</th>
                            <th>Customer ID</th>
                            <th>Customer Mobile</th>
                            <th>Room No</th>
                            <th>Customer Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel management");
                    $query = "select * from singlenonacroom where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['customer_name'];?></td>
                                <td><?php echo $row['customerid'];?></td>
                                <td><?php echo $row['customer_mobile'];?></td>
                                <td><?php echo $row['roomno'];?></td>
                                <td><?php echo $row['customer_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['indate'];?></td>
                                <td><?php echo $row['outdate'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        
        <b><br>
        <br><br><br>
        <div class="rows">
           <div class="col-nd-12">
            <centre><h3>CHECKED IN USER DETAILS</h3></centre>
           </div>
           <br>
            </div>
            <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Customer Name</th>
                            <th>Customer ID</th>
                            <th>Customer Mobile</th>
                            <th>Room No</th>
                            <th>Customer Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel management");
                    $query = "select * from doubleroom where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['customer_name'];?></td>
                                <td><?php echo $row['customerid'];?></td>
                                <td><?php echo $row['customer_mobile'];?></td>
                                <td><?php echo $row['roomno'];?></td>
                                <td><?php echo $row['customer_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['indate'];?></td>
                                <td><?php echo $row['outdate'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
 </header>
        <br><br>
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <h2>About Us</h2>
                    <p>Land of volcanic peaks, scenic waterfalls, hot springs and rich flora and fauna. National parks, wildlife refuges, quaint villages, historic sites and a countless sum of golden beaches in the area provide a variety of activities for guests that seek an authentic Costa Rican experience.</p>
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

        <script srs="java1.js"></script>
    </body>
</html>

