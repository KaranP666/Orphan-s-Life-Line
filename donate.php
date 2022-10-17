<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Donate</title>
    <?php
    include 'database.php';

    if(isset($_POST['submit']))
    {
        $DName = $_POST['DName'];
        $Contactno = $_POST['Contactno'];
        $Email = $_POST['Email'];
        $DAddress = $_POST['DAddress'];
        $Donation = $_POST['Donation'];
        $Description = $_POST['Description']; 
        submit($DName,$Contectno,$Email,$DAddress,$Donation,$Description);
    }
    ?>
</head>
<body>
    <div class="container my-4">
        <h1 style="text-align: center; ">Donation</h1>
        <form action="" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="DName"
                    name="DName">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="number" class="form-control" id="Contactno" name="Contactno">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="Email" name="Email">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" id="DAddress" name="DAddress">
            </div><br>

            <div class="form-group">
                <label> Select Donation products:</label>
                <select id="Donation" name="Donation" value="select">
                    <option value="Books">Book</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Grocery">Grocery</option>
                    <option value="Toys">Toys</option>
                    <option value="Chairs">Chairs</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="floatingTextarea">Description</label><br><br>
                    <textarea class="form-control" placeholder="Description about product" id="Description" name="Description"></textarea>          
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>