<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>www.softwaregeek.com</title>
</head>
<body>

<div class="navbar">
    <div class="nav-links">
        <a href="#" class="logo" >Software geek</a>
        <a href="#home">Home</a>
        <a href="#courses">Courses</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact Us</a>
    </div>
    <div class="auth-buttons">
        <button onclick="openForm('loginForm')">Login</button>
        <button onclick="openForm('signUpForm')">Sign Up</button>
    </div>
</div>

<div class="form-popup" id="loginForm">
    <form class="form-container">
        <h2>Login</h2>
        <form action="" method="POST">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit" name="btn">Login</button>
        <button type="button" class="cancel" onclick="closeForm('loginForm')">Close</button>
        </form>
    </form>
</div>

<div class="form-popup" id="signUpForm">
    <form class="form-container" action="" method="POST">
        <h2>Sign Up</h2>
        
        <label for="fullname"><b>Full name</b></label>
        <input type="text" placeholder="Enter your full name" name="fname" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="tel"><b>Phone number</b></label>
        <input type="tel" placeholder="Enter your phone number" name="tel" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label for="cpsw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="cpsw" required>
        <button type="submit" name="btn">Sign Up</button>
        <button type="button" class="cancel" onclick="closeForm('signUpForm')">Close</button>
    </form>
</div>
 <!-- slider  -->
 <div id="carouselExampleCaptions" class="carousel slide carousel-fade" id="home">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="xai9fyvi.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to Software-geek</h2>
          <p>Here a one will learn Web-development,Cyber-Security,Python,Game-development and many more.</p>
          <a href="#web"><button type="button" class="btn btn-danger">Web-development</button></a>
          <!-- <button type="button" class="btn btn-danger">Web-development</button> -->
           <a href="#python"><button type="button" class="btn btn-warning">Python-development</button></a>
          <!-- <button type="button" class="btn btn-warning">Python-development</button> -->
           <a href="#security"><button type="button" class="btn btn-success">Cyber Security</button></a>
          <!-- <button type="button" class="btn btn-success">Cyber Security</button> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="xk8qjo2j.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to Software-geek</h2>
          <p>Here a one will learn Web-development,Cyber-Security,Python,Game-development and many more.</p>
          <a href="#web"><button type="button" class="btn btn-danger">Web-development</button></a>
          <!-- <button type="button" class="btn btn-danger">Web-development</button> -->
           <a href="#python"><button type="button" class="btn btn-warning">Python-development</button></a>
          <!-- <button type="button" class="btn btn-warning">Python-development</button> -->
           <a href="#security"><button type="button" class="btn btn-success">Cyber Security</button></a>
          <!-- <button type="button" class="btn btn-success">Cyber Security</button> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="xai9fyvi.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to Software-geek</h2>
          <p>Here a one will learn Web-development,Cyber-Security,Python,Game-development and many more.</p>
          <a href="#web"><button type="button" class="btn btn-danger">Web-development</button></a>
          <!-- <button type="button" class="btn btn-danger">Web-development</button> -->
           <a href="#python"><button type="button" class="btn btn-warning">Python-development</button></a>
          <!-- <button type="button" class="btn btn-warning">Python-development</button> -->
           <a href="#security"><button type="button" class="btn btn-success">Cyber Security</button></a>
          <!-- <button type="button" class="btn btn-success">Cyber Security</button> -->
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

</div>

    <!-- courses  -->

    <div class="container" id="courses">
    <div class="section-title">
      <h2>Our Courses</h2>
      <p>Learn the skills of tomorrow with our expert-led courses.</p>
    </div>

    <div class="course-grid">
      <!-- Web Development  -->
      <div class="course-card" id="web">
        <img src="pexels-markusspiske-360591.jpg" alt="Web Development">
        <div class="card-content">
          <h3>Web Development</h3>
          <p>Master HTML, CSS, JavaScript, and modern frameworks to build stunning websites.</p>
          <a href="https://www.youtube.com/watch?v=tVzUXW6siu0&list=PLu0W_9lII9agq5TrH9XLIKQvv0iaF2X3w" target="_blank">Web development</a>
          <a href="https://www.w3schools.com/html/" target="_blank">Documentation</a>
        </div>
      </div>

      <!-- Python Development  -->
      <div class="course-card" id="python">
        <img src="istockphoto-1354397311-1024x1024.jpg" alt="Python Development">
        <div class="card-content">
          <h3>Python Development</h3>
          <p>Learn Python programming, data analysis, and automation with in-depth tutorials.</p>
          <a href="https://www.youtube.com/watch?v=7wnove7K-ZQ&list=PLu0W_9lII9agwh1XjRt242xIpHhPT2llg" target="_blank">Python development</a>
          <a href="https://www.w3schools.com/python/" target="_blank">Documentation</a>
        </div>
      </div>

      <!-- Cyber Security -->
      <div class="course-card" id="security">
        <img src="960x0.jpg" alt="Cyber Security">
        <div class="card-content">
          <h3>Cyber Security</h3>
          <p>Protect systems and networks with in-depth cybersecurity training.</p>
          <a href="https://www.youtube.com/watch?v=Rgvzt0D8bR4&pp=ygUbZXRoaWNhbCBoYWNraW5nIGZ1bGwgY291cnNl" target="_blank">Ethical Hacking</a>
          <a href="https://www.w3schools.com/cybersecurity/" target="_blank">Documentation</a>
        </div>
      </div>
    </div>
  </div>


  <!-- about  -->
   
  <div class="container" id="about">
    <div class="section-title">
      <h2>About Us</h2>
    </div>
  <div class="about">
    
    <div class="content-side">
      <div class="mission">
        <h3>Our Mission:</h3>
        <p>At Software Geek, our mission is to empower individuals by providing high-quality, insightful, and practical resources about software and technology. We aim to help our audience enhance their skills, solve technical challenges, and stay ahead in the ever-evolving world of computing.</p>
      </div>
         <div class="vision">
          <h3>Our Vision:</h3>
          <p>Our vision is to establish Software Geek as a leading platform in the tech community, recognized globally for fostering innovation, knowledge sharing, and excellence in the field of computer science and technology.</p>

         </div>
    </div>
    <div class="picture">
        <img src="WhatsApp Image 2024-10-12 at 11.23.41 AM.png" alt="">
    </div>
  </div>
  <!-- contact form  -->

  <div class="contact-form-container" id="contact">
        <h2>Contact Us</h2>
        <form class="contact-form" method="POST">
        
            <div class="left-side"> <label for="full-name">Full Name:</label> <input type="text" id="full-name"
                    name="full-name" required> <label for="email">Email:</label> <input type="email" id="email"
                    name="email" required> <label for="phone">Phone Number:</label> <input type="tel" id="phone"
                    name="phone" required> <label for="subject">Subject:</label> <input type="text" id="subject"
                    name="subject" required> </div>
            <div class="right-side"> <label for="message" >Message:</label> <textarea id="message" name="message"
                    rows="10" required></textarea> <button type="submit" name="submit">Submit</button> </div>
        
        </form>
    </div>

    <!-- footer  -->
    <footer style="height: 10vh; text-align: center;">
    <h3 style="color: red; font-size: 1.3rem;">&copy;Copyright 2000-2024</h3>
    <h2 style="color: black;">Designed by Mr Muhammad Talha</h2>
  </footer>
<script>
    function openForm(formId) {
        document.getElementById(formId).style.display = "block";
    }

    function closeForm(formId) {
        document.getElementById(formId).style.display = "none";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<?php include ("connection.php");?>
<?php include ("contact.php");?>
<?php
if(isset($_POST['btn'])){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $psw=$_POST['psw'];
    $cpsw=$_POST['cpsw'];

    if($psw!=$cpsw){
      echo "Password did not match";
      exit();
    }
    
    $insert = "INSERT INTO software VALUES ('$fname', '$email', '$tel', '$psw','$cpsw')";
    
     if(mysqli_query($connection,$insert)){
      echo "data successfully transfered to data base";
     } else {
      echo "Sorry error ";
     }
  }

elseif(isset($_POST['submit'])){
    $full_name=$_POST['full-name'];
    $email2=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $insert = "INSERT INTO contact_data VALUES ('$full_name', '$email2', '$phone', '$subject','$message')";
    
     if(mysqli_query($connection,$insert)){
      echo "data successfully transfered to data base";
     } else {
      echo "Sorry error ";
     }
  }
?>
