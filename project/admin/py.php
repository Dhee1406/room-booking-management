<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <style type="text/css">
           
          .header{
            background-image: url('../images/ho1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center ;
            background-size:cover;
        }
         th,td{
                background-color:lightgrey;
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
                        <a href="admin_dashboard.php">ADMIN</a>
                        <a href="rooms.php">BOOKING</a>
                        <a href="admin/payment.php">PAYMENT</a>
                </div>
                </div>
            </div><br><br><br><br>
         
            <?php
              $host = "localhost";  
              $user = "root";  
              $password = '';  
              $db_name = "hotel management";  
              $connection = mysqli_connect($host, $user, $password, $db_name);  
              $db = mysqli_select_db($connection,"hotel management");
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              echo "<table border='1'>
              <tr>
              <th>PAYMENT ID</th>
              <th>PAYMENT AMOUNT</th>
              <th>PAYMENT DATE</th>
              <th>PAYMENT METHOD</th>
              <th>CUSTOMER ID</th>

              </tr>" ;

              // $query = "SELECT * from singleroom;";
              // $query .= "update customer set ";

              /* execute multi query */

                     $result = mysqli_query($connection,"SELECT * FROM PAYMENTS");
                     // $result = mysqli_multi_query($connection, "select * from singleroom") ;
                     while($row = mysqli_fetch_array($result))
                     {
                     echo "<tr>";
                     echo "<td>" . $row['payment_id'] . "</td>";
                     echo "<td>" . $row['payment_amount'] . "</td>";
                     echo "<td>" . $row['payment_date'] . "</td>";
                     echo "<td>" . $row['payment_method'] . "</td>";
                     echo "<td>" . $row['customerid'] . "</td>";
                     echo "</tr>";
                     }
                     mysqli_close($connection);
              ?>
       
       </header>