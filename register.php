<?php
session_start();

include("code.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //something was posted
    $un = $_POST['username'];
    
    $p = $_POST['password'];
    

    if(!empty($un) && !empty($p) && !is_numeric($un))
    { //save to database
        $user_id = random_num(20);
        $query = "INSERT INTO USERS (user_id,username,password) VALUES ('$user_id','$un','$p')";
        mysqli_query($conn , $query);
        header("Location: login.php");
        die;
    }else{
        echo "Please enter some valid information";
    }
}
?>
<html>
    <title>Register Now</title>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    </head>
    <style>
    body{
        background-image: url("https://avante.biz/wp-content/uploads/Background-Images-For-Websites/Background-Images-For-Websites-003.jpg");
        font-family: Times New Roman;
    }
    .card{
        
       background-color:initial;
        border:initial;

    }
    .card-header{
        
        color: white;
        
        border: 5px dotted crimson;
        
    }
    #btn1{
        border-radius: 20px;
        width: 150px;
        height: 40px;
        background-color:crimson;
        border:none;
        color: white;
        
    }
    #btn1:hover{
        transform: translateY(-5px);
        
    }
    label{
        color:white;
        font-size:20px;
    }
    input{
        border: 3px solid crimson;
        border-radius : 60px;
        height : 40px;
    }

    input:focus{
        border: 5px solid maroon;
    }

    .card-header h2{
        font-size : 50px;
    }
    .card-header h2::first-letter{
        color:crimson;
    }
    #username::first-letter{
        color:crimson;
    }
    #pass::first-letter{
        color:crimson;
    }
    </style>
    <body>
        <div class="container text-center">
            <div class="py-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h2>Register</h2>
                            
                        </div>
                        <div class="card-body">
                            <form  method="post">
                                <table align="center" cellspacing="10%" cellpadding="10px">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <tr><td>
                                    <label id="username">Username:</label></td>
                                <td><input type="text" name="username" required placeholder="Enter Username"></td></tr>
                                </div>
                            </div>
                           
                            <div class="col-md-10">
                                <div class="form-group">
                                    <tr><td>
                                    <label id="pass">Password:</label></td>
                                <td><input type="password" name="password"  required placeholder="Enter password"></td></tr>
                                </div>
                            </div>
                            
                            <div class="col-md-10">
                                <tr><td align="center" colspan="2">
                                <br><br><button type="submit" name="submit" id="btn1">Register</button></td></tr>
                                </div>
                                <div class="col-md-10">
                                    <br>
                                    <tr><td align="center" colspan="2">
                                    <h6 style="color:white;"><strong>Have an account? &nbsp;<a href="login.php" style="text-decoration:None;" >Login Here</strong></a></h6></td></tr>
                                </div>
                        </div>
                    </table>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>