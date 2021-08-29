<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8" />
    <title>Basketball Society</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/TARC.png">

    <link href="login.css" rel="stylesheet" />
    <link href="signup.css" rel="stylesheet" />

</head>

<body>
    
    <div class="container">
        <form>

            <h1 style="text-align:center">Login Page</h1>

            <div class="col">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login" onclick = "document.location='home.php'">
            </div>
            

            <div class="app-btn">
                <a href="" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="#" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a>
                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                    </i> Login with Google+
                </a>
            </div>
            <div class = "signpsw">
            <div class="sign-btn">
                <button onclick="document.getElementById('id01').style.display='block'">Sign
                    Up</button>
            </div>
            <div class="forgot-psw">
                <a href="#" style="color:dodgerblue"; class="fpsw-btn">Forgot password?</a>
            </div>
        </div>
            <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <form class="modal-content" action="/userLogin.php">

                    <div class="container2">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <label for="username"><b>User Name</b></label>
                        <input type="text" placeholder="Enter User name" name="username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
                           
                        <p>By creating an account you agree to our <a href="https://policies.google.com/privacy?hl=en-US" style="color:dodgerblue">Privacy &
                                Term</a>.</p>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                class="cancelbtn">Cancel</button>
                            <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                    </div>

                </form>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
<footer> TARUC Basketball Society &#40;Kampus Utama, Jalan Genting Kelang, 53300 Kuala Lumpur, Wilayah Persekutuan Kuala
    Lumpur &#41;</footer>

</html>