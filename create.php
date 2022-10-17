<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Create Orphan</title>

    <?php


    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
    {
        
        header("location: login.php");
    }
    include 'database.php';

    if(isset($_POST['register']))
    {
        $fname = $_POST['fname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $location = $_POST['location'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $birth_mk = $_POST['birth_mk'];
        $add_info = $_POST['add_info'];
        register($fname,$gender,$age, $location,$height,$weight,$birth_mk,$add_info);
 

        // link otp timeing part then payment
    }
    ?>

  </head>
  <body>
    <div class="container my-4">
        <h1 style="text-align: center; ">Child Admission form</h1>
        <form action="" method="post">
           <div class="form-group">
               <label>Person's name who find the child</label>
               <input type="text" class="form-control" id="fname" name="fname" >
               
           </div>
           <div class="form-group">
             <label >Gender (Child)</label>
             <input type="text" class="form-control" id="gender" name="gender">
         </div>
       
         <div class="form-group">
               <label>Age</label>
               <input type="text" class="form-control" id="age" name="age">
           </div>
         
           <div class="form-group">
               <label>Place</label>
               <input type="text" class="form-control" id="location" name="location">
           </div>
           <div class="form-group">
               <label>Height</label>
               <input type="text" class="form-control" id="height" name="height">
           </div>
          <div class="form-group">
               <label>Weight</label>
               <input type="text" class="form-control" id="weight" name="weight">
           </div>
        <div class="form-group">
          <label>Any identification mark</label>
          <input type="text" class="form-control" id="birth_mk" name="birth_mk">
        </div>
        <div class="form-group">
          <label>Any Additional information</label>
          <input type="text" class="form-control" id="add_info" name="add_info">
        </div><br><br>
           <button type="submit" class="btn btn-primary" name="register">Submit</button>
        </form>
       </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>