<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://static.timesofisrael.com/www/uploads/2022/08/iStock-907563158.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method='POST'>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Autism Detection App</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register  your account</h5>



                  <div class="form-outline mb-4">
                    <input name="name" type="text" id="form2Example17" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form2Example17">Name</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="mob"  type="text" id="form2Example17" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form2Example17">Mobile number</label>
                  </div>



                  <div class="form-outline mb-4">
                    <input name="email"  type="text" id="form2Example17" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="pass"  type="password" id="form2Example27" class="form-control form-control-lg" required />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button name='sub'  class="btn btn-dark btn-lg btn-block" type="submit">REGISTER</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already Registered ? <a href="index.php"
                      style="color: #393f81;">LogIn here</a></p>
               
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
    
</body>
</html>


<?php


if(isset($_POST['sub']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autism";

$getName=$_POST['name'];
$getMobile=$_POST['mob'];
$getEmail=$_POST['email'];
$getPassword=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `users`( `name`, `mobile`, `email`, `password`) VALUES ('$getName','$getMobile','$getEmail','$getPassword')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert(' New User created successfully') </script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}



?>