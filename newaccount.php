<?php
    $server = "localhost";
    $user = "root";
    $password = "root";
    $con = mysqli_connect($server,$user,$password);
    if (!$con) {
        die("connection to this data is failed due to: " . mysqli_connect_error());
    }
    if(isset($_POST['name'])&& isset($_POST['address']) && isset($_POST['aadhar']) && isset($_POST['acc-type'])){
    $name=($_POST["name"]);
    $address=($_POST["address"]);
    $aadhar=($_POST["aadhar"]);
    $acc_type=($_POST["acc-type"]);
    $num=rand(10,100);
    $sql = "INSERT INTO `bank`.`accounttable` (`Account_Number`, `Account_Type`, `BCode`, `Name`, `Gender`, `DOB`, `Address`, `Aadhar`, `Balance`) VALUES
    ('SBI2343231000$num', '$acc_type', 'SBI234323', '$name', 'M', '2018-09-06', '$address', '$aadhar', 0);";
if ($con->query($sql) === TRUE) {
  foreach ($_POST as $key => $value) {
    unset($_POST[$key]);
}
  echo "New record created successfully";
  header('Location: customer list.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
    }
$con->close();
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Account</title>

  <!-- Googlefont -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- CSS style sheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" charset="utf-8"></script>

  <!-- bootstrap script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

  <section id="title">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">
          <h2 class="navbar-heading">Bank Management System</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="customer list.php">View Customers</a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="about.html">About Allahabad Bank</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="newaccount.php">New Account</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>


  <h1 class="big-heading">New Account</h1>
    </div>

  </section>

  <section class="white-section" id="features">
    <div class="container-fluid">

      <div class="row">
        <div style="display: flex;align-items:center;justify-content:center">
        <form action="newaccount.php"method="POST">
            <div class="input-group mb-3">
                <input
                    type="text"
                    name="name" 
                    id="name"
                    class="form-control"
                    placeholder="Name"
                    required
                />
                
            </div>
            <div class="input-group mb-3">
                <input
                    type="text"
                    name="address" 
                    id="address"
                    class="form-control"
                    placeholder="Address"
                    required
                />
                
            </div>
            <div class="input-group mb-3">
                <input
                    type="number"
                    name="aadhar"
                    id="aadhar"
                    class="form-control"
                    placeholder="Aadhar Number"
                    required
                />
                
            </div>
            <div class="input-group mb-3">
                <input
                    type="text"
                    name="acc-type" 
                    id="acc-type"
                    class="form-control"
                    placeholder="Account Type"
                    required
                />
                
            </div>
            <a href="newaccount.php" style="color:black;margin:0; text-decoration: none;"> <input style="border-radius:0.5rem;margin-top: 3rem;" type="submit" value="Create" onClick="sendMoney()"></a>
        </form>
    </div>
      </div>

    </div>
  </section>


  <!-- Footer -->

  <footer class="coloured-section" id="footer">
    <br>
      <br>
        <br>
    <div class="container-fluid">

      <i class="social-icon fab fa-facebook fa-2x"></i>
      <i class="social-icon fab fa-github fa-2x"></i>
      <i class="social-icon fab fa-instagram fa-2x"></i>
      <i class="social-icon fab fa-linkedin fa-2x"></i>
      <br>
      <br>
    </div>
  </footer>
</body>

</html>
