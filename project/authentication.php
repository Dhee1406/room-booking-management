 <?php      
    include('connection.php');  
    $error="";
    $LOGINUSERNAME = $_POST['user'];  
    $LOGINPASSWORD = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $LOGINUSERNAME = stripcslashes($LOGINUSERNAME);  
        $LOGINPASSWORD = stripcslashes($LOGINPASSWORD);  
        $LOGINUSERNAME = mysqli_real_escape_string($con, $LOGINUSERNAME);  
        $LOGINPASSWORD = mysqli_real_escape_string($con, $LOGINPASSWORD);  
      
        $sql = "select *from login where LOGINUSERNAME = '$LOGINUSERNAME' and LOGINPASSWORD = '$LOGINPASSWORD'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("Location: admin/admin_dashboard.php"); 
        }  
        else{  
            // echo "<script>alert('You Have Entered Wrong Username Or Password!');</script>";
            // header("Location: index.php"); 
            echo "<script>";
            echo "alert('You Have Entered Wrong Username Or Password!');";
            echo "window.location = 'index.php';"; // redirect with javascript, after page loads
            echo "</script>";
                    }     
?>  