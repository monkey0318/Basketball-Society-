<html>
    <head>
        <title>Admin login</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-center">
                    <h2>Login</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="admin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="input-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <p class="login-register-text">Don't have an account? <a href="admin-register.php">Register Here</a>.</p>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
