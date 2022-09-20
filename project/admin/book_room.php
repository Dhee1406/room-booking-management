<?php 
 session_start();   
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "hotel management";  
// define variables to empty values  
$nameErr =  $mobilenoErr = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["customer_name"])) {  
         $nameErr = "*Name is required";  
    } else {  
        $customer_name = input_data($_POST["customer_name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$customer_name)) {  
                $nameErr = "*Only alphabets and white space are allowed";  
            }  
    }  
    if (empty($_POST["customer_mobile"])) {  
        $mobilenoErr = "*Mobile no is required";  
} else {  
        $customer_mobile = input_data($_POST["customer_mobile"]);  
        // check if mobile no is well-formed  
        if (!preg_match ("/^[0-9]*$/", $customer_mobile) ) {  
        $mobilenoErr = "*Only numeric value is allowed.";  
        }  
    //check mobile no length should not be less and greator than 10  
    if (strlen ($customer_mobile) != 10) {  
        $mobilenoErr = "*Mobile no must contain 10 digits.";  
        }  
}  
}
function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  
?>
<?php 
    // session_start();   
    // $host = "localhost";  
    // $user = "root";  
    // $password = '';  
    // $db_name = "hotel management";  
    if(isset($_POST['book_room']))            
    {
        if($nameErr == "" && $mobilenoErr == ""  ){  
        $connection = mysqli_connect($host, $user, $password, $db_name);  
        $db = mysqli_select_db($connection,"hotel management");
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        if($_POST['room_type'] == 'Single AC'){
            $query = "update singleroom set customer_name = '$_POST[customer_name]', customerid = $_POST[customerid],customer_mobile = '$_POST[customer_mobile]',customer_address = '$_POST[customer_address]',child = $_POST[child_no],adult = $_POST[adult_no],indate = '$_POST[check_in_date]',outdate = '$_POST[check_out_date]',status = 1 where roomno = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Single non AC'){
            $query = "update singlenonacroom set customer_name = '$_POST[customer_name]', customerid = $_POST[customerid],customer_mobile = '$_POST[customer_mobile]',customer_address = '$_POST[customer_address]',child = $_POST[child_no],adult = $_POST[adult_no],indate = '$_POST[check_in_date]',outdate = '$_POST[check_out_date]',status = 1 where roomno = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Double AC'){
        $query = "update doubleroom set customer_name = '$_POST[customer_name]', customerid = $_POST[customerid],customer_mobile = '$_POST[customer_mobile]',customer_address = '$_POST[customer_address]',child = $_POST[child_no],adult = $_POST[adult_no],indate = '$_POST[check_in_date]',outdate = '$_POST[check_out_date]',status = 1 where roomno = $_GET[rn]";
        }
        // if($_POST['room_type'] == 'Double AC'){
        //     $query = "update double_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        // }
        $query_run = mysqli_query($connection,$query);
        if($_SESSION['user'] = 'gun123'){
            header("location: redirect_page.php");   
        }
        else{
            header("location: redirect.php");   
        }
    }
    }
?>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <link rel="stylesheet" href="..\style.css">
    <link rel="stylesheet" href="..\bootstrap.css">
    
        <style>
            .header{
            background-image: url('../../images/room2.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center ;
            background-size:cover;
        }
        
        </style>
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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
        
       
        <!--================Header Area Finish=================-->
        <br>
        <div class="row">
       	<div class="col-md-12">
       		<center><h3>FILL THE DETAILS!</h3></center>
       	</div>
       </div>
        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group">
		    	<label for="name">Room No:</label>
		    	<input type="text" class="form-control" name="roomno" value="<?php echo $_GET['rn'];?>" disabled>
		  	</div>
			<div class="form-group">
		    	<label for="email">Room Type:</label>
		    	<input type="text" class="form-control" name="room_type" value="<?php if($_GET['rt'] == 'a'){echo 'Single AC';}if($_GET['rt'] == 'b'){echo 'Single non AC';}if($_GET['rt'] == 'c'){echo 'Double AC';}?>">
		  	</div>
            <div class="form-group">
                <label for="email">Customer Name:</label>
                <input type="text" class="form-control" name="customer_name" required="">
                <span class="error"><?php echo $nameErr; ?> </span> 
            </div>
            <div class="form-group">
                <label for="email">Customer ID:</label>
                <input type="text" class="form-control" name="customerid" required="">
            </div>
            <div class="form-group">
                <label for="email">Customer Mobile:</label>
                <input type="text" class="form-control" name="customer_mobile" required="">
                <span class="error"> <?php echo $mobilenoErr; ?> </span> 
            </div>
            <div class="form-group">
                <label for="email">Customer Address:</label>
                <textarea rows="3" cols="40" class="form-control" name="customer_address"></textarea>
            </div>
            <div class="form-group">
                <label>No of Child:</label>
                <select class="form-control" name="child_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="select_adult">No of Adult:</label>
                <select class="form-control" id="select_adult" name="adult_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Check-In Date:</label>
                <input type="date" class="form-control" name="check_in_date" required="">
            </div>
            <div class="form-group">
                <label for="email">Check-Out Date:</label>
                <input type="date" class="form-control" name="check_out_date" required="">
            </div>
        
			<button type="submit" name="book_room" class="btn btn-warning">Book Now</button>
		</form>
        	</div>
        	<div class="col-md-4"></div>
        </div>
        <br><br><br>
    </header>   
        <!--================footer =================-->
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <h2>About Us</h2>
                   <p> Land of volcanic peaks, scenic waterfalls, hot springs and rich flora and fauna. National parks, wildlife refuges, quaint villages, historic sites and a countless sum of golden beaches in the area provide a variety of activities for guests that seek an authentic Costa Rican experience.</p>
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