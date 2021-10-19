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
    { //read from database
        
        $query = "SELECT * FROM users WHERE username = '$un' limit 1";
        $result = mysqli_query($conn , $query);

        if($result){
            $row = mysqli_num_rows($result);
            if($result && $row> 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $p){
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: newindex.php");
                 die;
            }
        }
        }
        //header("Location: newindex.php");
        //die;
        echo "Wrong username or password";
    }else{
        echo "Please enter some valid information";
    }
}

?>

<html>
    <title>Login</title>
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
            background-color: initial;
            border:initial
        }
        .card-header{
            color: white;
            border: 5px dotted crimson;
        }
        #btn{
            border-radius: 20px;
            width: 150px;
            height: 40px;
            background-color:crimson;
            border:none;
            color: white;
        }
        .card-header h2{
            font-size:50px;
        }
        .card-header h2::first-letter{
        color:crimson;
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
    #username::first-letter{
        color:crimson;
    }
    #pass::first-letter{
        color:crimson;
    }
    #btn:hover{
        transform: translateY(-5px);
        
    }
    </style>
    <body>
        <div class="container text-center">
            <div class="py-5">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h2>Login</h2>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="col-md-12">
                                    <div class="form-group"><br>
                                <label id="username">Username:</label>
                                <input type="text" name="username"  required placeholder="Enter Username"><br><br>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                <label id="pass">Password:</label>
                                <input type="password" name="password" required placeholder="Enter Password"><br><br>
                            </div>
                        </div>
                                <div class="col-md-12">
                                    
                                <button type="submit" name="submit" id="btn">Login</button>
                                
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <h6 style="color:white;"><strong>Don't have an account? &nbsp;<a href="register.php" style="text-decoration:None;">Register Here</strong></a></h6>
                                    
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>