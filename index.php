<?php
// Replace the following with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agarwal_coaching_center";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $sno = $_POST["sno"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $concern = $_POST["concern"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $Concern_detail = $_POST["Concern_detail"];
    // $dt_datetime = $_POST["dt_datetime"];
    // You can add more data validation and sanitation here if needed

    // Prepare and execute SQL query to insert data into the database
    $sql = "INSERT INTO `agarwal_coaching_center`.`callback_request` (`name`, `class`, `concern`, `PhoneNumber`, `Concern_detail`, `dt_datetime`) VALUES ('$name', '$class', '$concern', '$PhoneNumber', '$Concern_detail', current_timestamp())";
    // ... Your existing PHP code to insert data into the database ...
}
// if ($conn->query($sql) === TRUE) {
//   // Insertion was successful
//   echo "New record created successfully.";
//   echo "<script>showPopup();</script>"; // Show the pop-up
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agarwal Coaching Centre</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* Add your custom CSS styles here */
        /* For demonstration purposes, we'll keep it simple */
    </style>
</head>
<body>
<header class="position-sticky top-0">
        <div>
            <h1 class="title-h1 mx-3 my-2"><a href="index.php">Agarwal Coaching Centre</a></h1>
        </div>
        <nav>
        <ul>
    <li><a href="#">Home</a></li>
    <li class="addmission-li"><a href="#">Admission</a>
    <!--     <ul class="addmission-dropdown dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px" data-bs-theme="dark">
            <li><a class="dropdown-item rounded-2 active" href="#">Action</a></li>
            <li><a class="dropdown-item rounded-2" href="#">Another action</a></li>
            <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item rounded-2" href="#">Separated link</a></li>
        </ul> -->
    </li>
    <li><a href="#">Location</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <!-- Add more navbar items as needed -->
</ul>

        <div class="hamburger">&#9776;</div>
        </nav>
        <div class="login-signup">
            <button><a href="login.php" class="text-decoration-none text-black">Login</a></button>
        </div>
</header>
    <div class="container-slideshow">
        <br>
        <br>
    <div class="slideshow-container">
        <div class="slide">
            <img src="img/student1.jpg" alt="Image 1">
        </div>
        <div class="slide">
            <img src="img/student2.jpg" alt="Image 2">
        </div>
        <div class="slide">
            <img src="img/student3.jpg" alt="Image 3">
        </div>
        </div>
        <!-- Navigation buttons -->
        <button class="prev" onclick="changeSlide(-1)">Previous</button>
        <button class="next" onclick="changeSlide(1)">Next</button>
    </div>
    
    <h2 class="pb-2 text-center my-3">Our Facility</h2>
    <div class="carousel-indicators" id="carousel-indicators">
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"></button>
</div>

<div class="row">
<div class="col-lg-4 text-center">
  <!-- Replace the SVG with an image element -->
  <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/computer class.avif" alt="Image" />

  <h2 class="fw-normal">Computer Classes</h2>
  <p>Everyone Is Now Learning Computer For Their Future Carier So Why Not Our Kids. Here We Teach Our Kids Basic In Python. So Their Basic Programing  Concept Can Be Clear</p>
  <p><a class="btn btn-secondary" href="#">View details »</a></p>
</div>
<!-- /.col-lg-4 text-center -->
<div class="col-lg-4 text-center">
  <!-- Replace the SVG with an image element -->
  <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/books.avif" alt="Image" />

  <h2 class="fw-normal">Art & Craft Classes</h2>
  <p>
Ignite your child's imagination with our awe-inspiring art and craft classes, where creativity knows no limits. Join us to unlock the magic of self-expression today!</p>
  <p><a class="btn btn-secondary" href="#">View details »</a></p>
</div><!-- /.col-lg-4 text-center -->
<div class="col-lg-4 text-center">
  <!-- Replace the SVG with an image element -->
  <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/kid_dancing.webp" alt="Image" />

  <h2 class="fw-normal">Dance Classes</h2>
  <p>Watch your child's passion take center stage as they learn to move, groove, and shine in our electrifying dance classes. Join us to nurture their talents and witness their confidence soar on the dance floor!</p>
  <p><a class="btn btn-secondary" href="#">View details »</a></p>
</div><!-- /.col-lg-4 text-center -->
</div>

<!-- Break Point -->

<!-- <div class="carousel-indicators" id="carousel-indicators">
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"></button>
</div> -->

<br><br><hr>
<br>
<section class="contact-section" id="cont-section">
  <form method="post" id="formcon">
    <h1 class="text-center my-2">Contact Us</h1>
    <br>
    <h4 class="mx-3">Request A Callback!</h4>
    <br>
    <div class="form-input-label">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
      </div>

      <div class="form-group">
        <label for="classOptions">Select Your Class:</label>
        <select class="options" name="class" id="classOptions" required>
          <option value="Nursery">Nursery</option>
          <option value="UKG">Upper Kindergarten (UKG)</option>
          <option value="LKG">Lower Kindergarten (LKG)</option>
          <option value="1st">1</option>
          <option value="2nd">2</option>
          <option value="3rd">3</option>
          <option value="4th">4</option>
          <option value="5th">5</option>
          <option value="6th">6</option>
          <option value="7th">7</option>
          <option value="8th">8</option>
          <option value="9th">9</option>
          <option value="10th">10</option>
          <option value="11th">11</option>
          <option value="12th">12</option>

        </select>
      </div>

      <div class="form-group">
        <label for="concernOptions">Select Your Concern:</label>
        <select class="concern-option" name="concern" id="concernOptions" required>
          <option value="option1">School Addmission</option>
          <option value="option3">Tution Classes</option>
          <option value="option2">Complaint</option>
        </select>
      </div>

      <div class="form-group">
        <label for="number">Phone Number</label>
        <input type="text" name="PhoneNumber" id="number" placeholder="Enter Your Phone Number" required>
      </div>

      <div class="form-group">
        <label for="CompleteConcern">Elaborate Your Concern</label>
        <input type="text" name="Concern_detail" id="CompleteConcern" placeholder="Your Concern Detail" required>
      </div>
      <button type="submit" class="styled-button">Submit</button>
    </div>
  </form>
  <!-- Pop-up container -->
<div id="popupContainer" class="popup-container">
    <div class="popup-content">
        <h3>Form Submitted Successfully!</h3>
        <p>Thank you for submitting the form. We will get back to you soon.</p>
        <button id="closePopupBtn">Close</button>
    </div>
</div>

</section>

    <div id="footer-animation">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Agarwal Coaching Centre | All Right Reserved</span>
    </div>
  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary text-decoration-none" href="#">Instagram<svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary text-decoration-none" href="#">facebook<svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary text-decoration-none" href="#">Twitter<svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</div>
    </body>
<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script>
    function showPopup() {
        document.getElementById("popupContainer").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popupContainer").style.display = "none";
    }

    document.getElementById("closePopupBtn").addEventListener("click", closePopup);

    <?php
    // ... Your existing PHP code ...

    if ($conn->query($sql) === TRUE) {
        // Insertion was successful
        echo "showPopup();"; // Show the pop-up
    } else {
        echo "Error: " . $sql . "<br>\" . $conn->error;";
    }
    
    ?>
</script>
</html>
