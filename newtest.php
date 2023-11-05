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

  <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Autism  Prediction</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">LogOut</a>
      </li>

    </ul>
  </nav>


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

                <form method="POST">


                <div class="row g-3">

<div class="col-12 col-sm-6 col-md-6 col-lg-6">
        <label for="" class="form-label"> Name</label>
        <input name="name" type="text" class="form-control">
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 1 Result</label>
      <select name="q1" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>

    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 2 Result</label>
      <select name="q2" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 3 Result</label>
      <select name="q3" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 4 Result</label>
      <select name="q4" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>

    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 5 Result</label>
      <select name="q5" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 6 Result</label>
      <select name="q6" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 7 Result</label>
      <select name="q7" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
    <label for="" class="form-label"> Screening Question 8 Result</label>
      <select name="q8" id="" class="form-control">
      <option value="no">Select an Option </option>

        <option value="1">Postive </option>
        <option value="0">Negative</option>
      </select>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <button name="but" class="btn btn-success">SUBMIT</button>
    </div>
  
</div>
               
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
if (isset($_POST["but"])) {

  $A1=$_POST['q1'];
 $A2=$_POST['q2'];
 $A3=$_POST['q3'];
 $A4=$_POST['q4'];
 $A5=$_POST['q5'];
 $A6=$_POST['q6'];
 $A7=$_POST['q7'];
 $A8=$_POST['q8'];

 if($A1=="no" || $A2=="no" || $A3=="no" || $A4=="no"|| $A5=="no"|| $A6=="no"|| $A7=="no" || $A8=="no" )
 {
  echo "<script>alert(' Select all the Options ') </script>";

 }
 else{

   
  $result= file_get_contents("http://127.0.0.1:5001/check?A1=$A1&A2=$A2&A3=$A3&A4=$A4&A5=$A5&A6=$A6&A8=$A7&A9=$A8");
  $datares=$result;
  $result=strtoupper($result);
  if($result=="0")
  {
    echo "<script>alert('No autic behavior') </script>";

  }
  else{
    echo "<script>alert(' autic behavior') </script>";

  }
 

 }

 

}


?>