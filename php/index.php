<!DOCTYPE html>
<html lang="en">
<head>
    
<!Required meta tags>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!Created for cart and payment wed desight>
<meta name="author" content="Yuvan Pillaii A/L G.Raejndran">

<!title>
<title>TARC Basketball</title>

<!link for bookstrap>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!link for style.css>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container">
<form action="php/create.php" method="post">
            
<h4 class="display-4 text-center">Basketball Event</h4><hr><br>

<?php if (isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
<?php echo $_GET['error']; ?>
</div>

<?php } ?>
<div class="form-group">
<label for="name">Name</label>
<input type="name" class="form-control" id="name" name="name" value="<?php if(isset($_GET['name']))echo($_GET['name']); ?>" placeholder="Enter name">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_GET['email']))echo($_GET['email']); ?>"placeholder="Enter email">
</div>
                   
<div class="form-group">
<label for="gender">Gender</label>  
<select class="form-control" name="gender" id="gender" placeholder="Choose Gender">
<option value="Male" <?php if ($_GET == 'Male') {echo "selected";}?>>MALE</option>
<option value="Female" <?php if ($_GET == 'Female') {echo "selected";}?>>FEMALE</option>
</select>  
</div>
                   
<div class="form-group">
<label for="course">Course</label>
<input type="course" class="form-control" id="course" name="course" value="<?php if(isset($_GET['course']))echo($_GET['course']); ?>"placeholder="Enter course">
</div>
                   
<div class="form-group">
<label for="gender">Event</label>  
<select class="form-control" name="event" id="event">
<option value="Basketball Training Session" <?php if ($_GET == 'event') {echo "selected";}?>>Basketball Training Session</option>
<option value="Basketball Workout Session" <?php if ($_GET == 'event') {echo "selected";}?>>Basketball Workout Session</option>
</select>  
</div>

<button type="submit" class="btn btn-primary"name="create">Create</button>
<a href="read.php" class="link-primary">View</a>
</form>
</div>
</body>
</html>
