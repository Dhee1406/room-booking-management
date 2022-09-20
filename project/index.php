<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <style>
            .header{
            background-image: url('images/ho1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center ;
            background-size:cover;
        }
        .form p{
            color:rgb(4, 4, 61);
        }
        </style>
    </head>  
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
    <div id = "frm">  
        <h1>Admin Login Page</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
        <div class="form">
            <div class="container">
                 <p>  
                   <label> UserName: </label>  
                   <input type = "text" id ="user" name  = "user" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" />  
                </p>  
                <p>   
                     <input type =  "submit" id = "btn" value = "Admin login" />  
                </p>  
            </div>
            <div class="container">
                  <button type="button" class="cancelbtn">Cancel</button>
           </div>
        </div>
     </form>  
    </div>  
    </header>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                         
            }  
        </script>  
</body>     
</html>  