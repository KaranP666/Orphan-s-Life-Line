<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>SIGNUP | Orphans's LifeLine | Charity</title>
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
    require_once "config.php";

    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //CHECK IF USERNAME IS EMPTY
        if(empty(trim($_POST["username"]))){
            $username_err = "Username cannot be Blank!!!";
        }else{
            $sql = "SELECT id FROM users WHERE username = ?";
            $stmt = mysqli_prepare($conn,$sql);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"s", $param_username);

                //set the value of param username
                $param_username =   trim($_POST['username']);

                //try to execute this statement
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken";
                    }else{
                        $username = trim($_POST['username']);
                    }
                }
                else{
                    echo "Somthing went wrong";
                }
            }  
        }
        mysqli_stmt_close($stmt);

    //Check for password

    if(empty(trim($_POST['password']))){
        $password_err = "Password cannot be blank";
    }elseif(strlen(trim($_POST['password'])) < 5){
        $password_err = "Password cannot be less than 5 characters";
    }else{
        $password = trim($_POST['password']);
    }

    //Check for confirm password

    if(trim($_POST['password']) != trim($_POST['confirm_password'])){
        $password_err = "Password should match";
    }


    //if there is no errors, insert the data into the database 

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO users (username,password) VALUES(?,?)";
        $stmt = mysqli_prepare($conn,$sql);
        if ($stmt){
            mysqli_stmt_bind_param($stmt,"ss",$param_username,$param_password);

            //set these parameters
            $param_username = $username;
            $param_password = password_hash($password,PASSWORD_DEFAULT);

            //try to execute the query
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            }
            else{
                echo "somthing went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);

}
    
    ?>


</head>

<body>

    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">SING UP <span class="title-under"></span></h1>
            <p class="page-description">
                Orphans's LifeLine | Charity
            </p>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-7 col-sm-12 col-form">

                    <h2 class="title-style-2">SIGNUP <span class="title-under"></span></h2>

                    <form action="" class="contact-form ajax-form" method="post">

                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Name*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Lastname*" required>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="Password" name="password" id="password" class="form-control" placeholder="Password*" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <input type="Password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password*" required>
                            <!-- <small id="emailHelp" class="form-text text-muted mx-3">Make sure to type the same password</small> -->
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
                        </div>

                        <div class="clearfix"></div>

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