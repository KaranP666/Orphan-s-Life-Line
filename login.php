<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Login | Orphans's LifeLine | Charity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizr -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>

<?php
    //This script will handle login
    session_start();
    
    //Check if the user is already logged in
    if(isset($_SESSION['username'])){
        header("location: index.php");
        exit;
    }
    require_once "config.php";

    $username = $password = "";
    $err = "";

    //if req method is post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
            $err = "Please enter Username And Password!";
        }else{
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
        }
        //if there is no error
        if(empty($err)){ 
            $sql = "SELECT id, username, password FROM users WHERE username = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt,"s",$param_username);
            $param_username = $username;

            //try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            //this means the password is correct, allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            
                            //Redirect user to main/home page
                            header("location: index.php");
                        }
                    }
                }
        }

    }
}
?>

</head>

<body>

    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">LOG IN <span class="title-under"></span></h1>
            <p class="page-description">
                Orphans's LifeLine | Charity
            </p>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-7 col-sm-12 col-form">

                    <h2 class="title-style-2">LOGIN <span class="title-under"></span></h2>

                    <form action="" class="contact-form ajax-form" method="post">

                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="Password" name="password" id="password" class="form-control" placeholder="Password*" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>
                            
                        </div>
                        
                        <!-- <div class="clearfix"></div> -->
                    </form>
                </div>

                <div class="col-md-4 col-md-offset-1 col-contact">

                    <h2 class="title-style-2"> Orphan's LifeLine CONTACTS <span class="title-under"></span></h2>
                    <p>
                        <b>Orphans's LifeLine</b>
                    </p>

                     <div class="contact-items">

                        <ul class="list-unstyled contact-items-list">
                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Mumbai</li>
                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 00 210 25 55 55 11</li>

                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> contact@OrphansCharity.org</li>
                            </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>