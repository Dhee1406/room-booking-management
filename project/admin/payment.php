<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "hotel management";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>
<?php  
// define variables to empty values  
$nameErr =  $mobilenoErr =  "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["payment_method"])) {  
         $nameErr = "*payment method is required";  
    } else {  
        $payment_method = input_data($_POST["payment_method"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$payment_method)) {  
                $nameErr = "*Only alphabets and white space are allowed";  
            }  
    }  
	if (empty($_POST["payment_amount"])) {  
		$mobilenoErr = "*payment amount is required";  
  } else {  
		$payment_amount = input_data($_POST["payment_amount"]);  
		if (!preg_match ("/^[0-9]*$/", $payment_amount) ) {  
		$mobilenoErr = "*Only numeric value is allowed.";  
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>hotel dbms project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../bootstrap.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <style>
            .header{
             background-image: url('../images/ho1.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-position: center ;
             background-size:cover;
         }
        </style>
         <script>
            function clickFun(){
                alert('Payment updated..!');
            }
        </script>
    </head>
         <!-- header  -->
        <header class="header" id="header">
            <div class="head-top">
                <div class="site-name">
                    <span>OTELSHIA</span>
                </div>
                <div class="site-nav">
                        <a href="../home.html">HOME</a>
                        <a href="admin_dashboard.php">ADMIN</a>
                        <a href="../rooms.php">BOOKING</a>
                        <a href="payment.php">PAYMENT</a>
                    </div>
                </div>
            </div>
  <body>
  <br>
        <div class="row">
       	<div class="col-md-12">
       		<center><h3>FILL THE DETAILS!</h3></center>
       	</div>
       </div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
		PAYMENT ID:<br>
		<input type="text" name="payment_id">
		<br>
		PAYMENT AMOUNT:<br>
		<input type="text" name="payment_amount">
		<span class="error"> <?php echo $mobilenoErr; ?> </span>  
		<br>
		PAYMENT DATE:<br>
		<input type="date" name="payment_date">
		<br>
		PAYMENT METHOD:<br>
		<input type="text" name="payment_method">
		<span class="error"> <?php echo $nameErr; ?> </span> 
		<br>
        CUSTOMER ID:<br>
		<input type="text" name="customerid">
		<br><br>
        <br><br>
		<input type="submit" name="submit" value="submit">
	</form>
  </body>
</html>


<?php
if(isset($_POST['submit']))
{	
	if($nameErr == "" && $mobilenoErr == "" ){
	 $payment_id = $_POST['payment_id'];
	 $payment_date = $_POST['payment_date'];
     $customerid = $_POST['customerid']; 
	 $payment_method = $_POST ['payment_method'];  
	 $payment_amount = $_POST['payment_amount'];
	 $sql = "INSERT INTO payments (payment_id,payment_amount,payment_date,payment_method,customerid)
	 VALUES ('$payment_id','$payment_amount','$payment_date','$payment_method','$customerid')";
	  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
       echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }
 }

?>
