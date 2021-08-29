<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Welcome to TARUC Basketball Society</title>
        <link href="booking.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3>Booking Form</h3>
            <div class="form">
                <form action="booking-result.php" method="POST">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name.." required>

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Your Phone Number.." required>

                    <label for="books">Booking Event</label>
                    <select id="program" name="books">
                        <option value="choose">Choose One Of Booking Event</option>
                        <option value="BMD">Basketball Member's Day</option>
                        <option value="AGM">Annual General Meeting</option>
                        <option value="BTS">Basketball Training Session</option>
                        <option value="ROB">Rules Of Basketball</option>
                        <option value="BST">Basketball Skill Talk</option>

                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" id="M" value="M">Male<br>
                    <input type="radio" name="gender" id="F" value="F">Female<br>

                    <br>
                    <input type="submit" value="submit">
                    <input type="reset" value="reset">
                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript">
    </script>
</html>