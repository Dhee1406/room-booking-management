<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .btn{
           margin-right: 15px;
         }
        .col-md-12{
            background-color:grey;
        }
        .col-md-12 h3{
            margin-top:20px;
            color:black;
            font-size: 25 px;
            font-weight: bolder;
            text-shadow: 2px 2px grey;
        }
        .col-md-12 h5{
            margin-top:20px;
            color:darkblue;
            font-size: 20 px;
            font-weight: bold;
        }
        .card-header{
            color:BLACK;
            font-weight:bold;
        }
        .row .card-text{
            color:BLACK;
            font-weight:bold;
        }
        .row .card-text b{
            color:blue;
        }
        .row .card {
            margin-left:20px;
            border: solid black 1px;
            width:33.33%;
            padding:10px;
            height: auto;
        }
        
        .row .card:hover {
        box-shadow:0px 3px 65px 0px grey;
        }
    </style>
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="row">
       	<div class="col-md-12">
       		<center><h3>ROOM BOOKING</h3></center>
       	</div>
       </div><br><br>
       <center><h5>ROOM TYPE:SINGLE AC ROOM</h5></center><br>
       <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel management");
                $query = "select * from singleroom";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["roomno"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['roomno'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div>
        <br><br><br><br><br><br>
      
</body>
</html>