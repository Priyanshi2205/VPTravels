<?php

// $conn = mysqli_connect("localhost" , "root" , "","db_contact");
// $txtName = $_POST['txtName'];
// $txtEmail = $_POST['txtEmail'];
// $txtPhone = $_POST['txtPhone'];
// $txtSubject = $_POST['txtSubject'];
// $txtMessage = $_POST['txtMessage'];

// $sql = "INSERT INTO 'contact' ('ID', 'Name', 'Email', 'PhoneNo', 'Subject','Message) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone','$txtSubject', '$txtMessage');"
// $rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// }



$conn = mysqli_connect("localhost", "root", "", "db_contact");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['txtName'])) {
        $txtName = $_POST['txtName'];
        $txtEmail = $_POST['txtEmail'];
        $txtPhone = $_POST['txtPhone'];
        $txtSubject = $_POST['txtSubject'];
        $txtMessage = $_POST['txtMessage'];
    
    //   $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$msg');";
    // $sql = "INSERT INTO 'contact' ('ID', 'Name', 'Email', 'PhoneNo', 'Subject','Message) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone','$txtSubject', '$txtMessage');"
    $sql = "INSERT INTO `contact` (`Name`, `Email`, `PhoneNo`, `Subject`, `Message`) VALUES ('$txtName', '$txtEmail', '$txtPhone','$txtSubject', '$txtMessage');";
    $result = mysqli_query($conn, $sql);
        
    if ($result) {
                $insert = true;

            } else {
                echo "record does not insert" . mysqli_error($conn);
            }
        }
    }

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VP Travel</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    <header style="position: fixed;">
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="main.html"><img src="images/vp logo.png" width="250" height="80"></a>

        <nav class="navbar">
            <a href="http://localhost/PROGRAMMING/HTML/travel%20website/main.html" >HOME</a>
            <a href="http://localhost/PROGRAMMING/HTML/travel%20website/book.html">BOOK</a>
            <a href="http://localhost/PROGRAMMING/HTML/travel%20website/destinations.html">DESTINATION</a>
            <a href="http://localhost/PROGRAMMING/HTML/travel%20website/services.html">SERVICES</a>
            <a href="http://localhost/PROGRAMMING/HTML/travel%20website/gallery.html">GALLERY</a>
            <a href="http://localhost/PROGRAMMING/HTML/travel%20website/review.html">REVIEW</a>
            <a href="http://localhost/programming/HTML/travel%20website/contact.php">CONTACT</a>

        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn">
            </i>
            <a href="login.html"><i class="fas fa-user" id="login-btn"></i></a>
            </i>
        </div>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search Your Destination....">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
    <section class="contact" id="contact" style="position: absolute; top: 150px;">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
            <img src="images/contact.jpg" />
                
            </div>

            <form action="contact.php" method="post">
                <div class="inputBox">
                    <input type="text" name="txtName" id="txtName" placeholder="Name">
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="Email Id">
                </div>
                <div class="inputBox">
                    <input type="number" name="txtPhone" id="txtPhone" placeholder="Phone number">
                    <input type="text" name="txtSubject" id="txtSubject" placeholder="Subject">
                </div>
                <textarea name="txtMessage" placeholder="Your Message" id="txtMessage" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
                <?php
//                 if($insert){
//                   echo '<div>
//                     <p style="text-align: center; top : 30px; position:relative;  ">
//                     <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
//                     <html>
//                     <img src="../assets/check-circle.gif" height = 50px width = 50px/>
                    
//                     </html> Your message has been sent.
// </p>
//                   </div>';
//                 }
//               ?>
            </form>

        </div>

    </section>


<!-- Footer -->
<footer id="footer" class="footer" style="top: 1000px; position: relative; ">

<div class="footer-top">
  <!-- <div class="container"> -->
  <div class="row gy-2">
    <div class="col-lg-4 col-md-10 footer-info">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="images/vp .png" alt="">
        <span>VP Travel</span>
      </a><br>
      <p>It is a Non Government Organization, being run by young students for social reformation and building the
        nation with moral values and ethics. You can book your tips or vacations easily.</p>
      <!-- <div class="social-links mt-3">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="index.html" style="text-decoration: none;">Home</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="aboutus.html" style="text-decoration: none;">About us</a>
        </li>
        <li><i class="bx bx-chevron-right"></i> <a href="LogReg.html" style="text-decoration: none;">Login</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="Books.html" style="text-decoration: none;">Books</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="paidbooks.html" style="text-decoration: none;">Paid
            Books</a></li>

      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p>
        Indus University<br>Ahmedabad,382115<br><br>
        <strong>Phone:</strong> +91 7016563478<br>
        <strong>Email:</strong> info-VPTravel@gmail.com<br>
      </p>

    </div>

  </div>
  <!-- </div> -->
</div>
<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Indus university</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by Priyanshi Mittal & Vrunda Patel
  </div>
</div>
</footer>
<!-- End Footer -->



    <script src="main.js"></script>
</body>

</html>