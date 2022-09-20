<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"hotel management");
    if($_GET['rt'] == 'a'){
    	$query = "update singleroom set customer_name = null, customerid = null,customer_mobile = null,customer_address = null,child = null,adult = null,indate = null,outdate = null,status = 0 where roomno = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "update singlenonacroom set customer_name = null, customerid = null,customer_mobile = null,customer_address = null,child = null,adult = null,indate = null,outdate = null,status = 0 where roomno = $_GET[rn]";	
    }
    if($_GET['rt'] == 'c'){
    	$query = "update doubleroom set customer_name = null, customerid = null,customer_mobile = null,customer_address = null,child = null,adult = null,indate = null,outdate = null,status = 0 where roomno = $_GET[rn]";
    }
    // if($_GET['rt'] == 'd'){
    // 	$query = "update double_ac set customer_name = null, customerid = null,customer_mobile = null,customer_address = null,child = null,adult = null,indate = null,outdate = null,status = 0 where roomno = $_GET[rn]";
    // }
    $query_run = mysqli_query($connection,$query);
    header("location:redirect.php");   
?>