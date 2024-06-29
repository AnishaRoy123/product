<?php
include('method.php');
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



  <title>Hello, world!</title>
</head>





<!-- Navbar -->
<style>
  body {
    height: 60px;
    padding-top: 10px;
  }

  .logo-img {
    margin-top: -3px;
  }
</style>


<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="download.png" width="20" height="20" class="d-inline-block logo-img">
      Shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlogin.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donorlogin.php">Donor</a>
        </li>



        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <a class="nav-link" href="showrequest.php"><button class="btn btn-primary" type="submit">Search</button></a>
        </form>
    </div>
  </div>
</nav>
<!--navbar-->



<!-- Login Form -->

<!-- <div class="container d-flex justify-content-center">-->
<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    background: url(bg2.jpg)no-repeat;
    width: 100%;
    height: 700px;

    /*display: flex;*/
    /*justify-content: center;*/
    align-items: center;
    /*min-height: 100vh;*/


    background-size: cover;

  }

  .form {
    box-shadow: 2px 6px 100px #ffffff;

  }

  h1 {
    color: blue;
    font-family: verdana;
    font-size: 300%;
  }
</style>

<body>
  <div class="container">
    <header class="text-center">
      <h1 class="display-6">Welcome to our page</h1>
    </header>
  </div>
  <section class="container my-2 bg-dark w-50 text-light p-4">
    <form class="row g-3 p-3" action="" method="post" enctype="multipart/form-data">



      <div>
        Name:
        <input type="text"name="name" id="name">
      </div><br>
      <div>
        <p>choose a gender</p>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">female</label><br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">male</label><br>
     </div>
     <div>
        <label for="stream">choose a stream</label>
        <select name="stream" id="stream">
            <option value=""></option>
            <option value="bca">bca</option>
            <option value="mca">mca</option>
        </select>
     </div>
     
      <div>
        Select Image:
        <input type="file"name="image" id="image">
      </div>
      
      <div>
        New item inserted?<a href="show.php">click here</a>
      </div>
      <button type="submit" name="upload" value="upload">Submit</button><br>
      <?php
      if (isset($_POST['upload'])) {
        $res = uploadPro($_POST);
        echo $res;
      }
      ?>









    </form>
  </section>




    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>

