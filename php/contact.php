<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>TARUC Basketball Society's Contact Us</title>
        <link href="contact background.css" rel="stylesheet">
        <link href="contact.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="img/TARC.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <img src="img/logo.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="event.php">EVENT</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                </ul>
                </nav>
                <img src="img/menu.jpg" class="menu-icon">
            </div>

            <br><br><br>
            <h2>Contact Us Form</h2>
            <div class="form">
                <form action="#">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
                
                    <label for="Program">Program</label>
                    <select id="program" name="program">
                      <option value="IT">Information Technology</option>
                      <option value="IA">Information Systems Engineering</option>
                      <option value="IB">Business Information Systems</option>
                    </select>
                
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"required></textarea>
                
                    <input type="submit" value="Submit">
                  </form>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript" src="contact.js" defer></script>