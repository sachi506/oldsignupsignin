<!doctype html>
<html lang="en">

<head>
  

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="signin.css">

    <title>Signin Page</title>
</head>

<body>
    <div class="loginbox">
        <form action="validation.php" method="POST">
            <div class="leftbox">
                <h3>Signin with<br>Email Address</h3>
                <input type="text" class="input-box" name="Fname" placeholder="First Name">
                <input type="email" class="input-box" name="email" placeholder="Email">
                <input type="password" class="input-box" name="password" placeholder="Password">
                <input type="submit" class=" btn btn-primary submit-btn" value="signin">
            </div>
            <div class="rightbox">
                <span class="right-title">Signin with <br>Social Networks</span>
                <button type="submit" class="social facebook">Signin With Facebook</i></button>
                <button type="submit" class="social google">Signin With Google+</button>
                <button type="submit" class="social link">Signin With Linkedin</button>
            </div>
            <div class="or">
                or
            </div>
            <!-- <i class="fa fa-google"> -->
        </form>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>