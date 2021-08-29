<?php include 'php/updating.php'; ?>

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
<form action="php/updating.php" method="post">
            
<h4 class="display-4 text-center">Update Basketball Event</h4><hr><br>

<?php if (isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
<?php echo $_GET['error']; ?>
</div>

<?php } ?>
<div class="form-group">
<label for="name">Name</label>
<input type="name" class="form-control" id="name" name="name" value="<?=$row['name'] ?>" >
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" value="<?=$row['email'] ?>" >
</div>
                   
<div class="form-group">
<label for="course">Course</label>
<input type="course" class="form-control" id="course" name="course" value="<?=$row['course'] ?>" >
</div>
                   
<input type="text" name="id" value="<?=$row['id']?>" hidden >

<button type="submit" class="btn btn-primary" name="update">Update</button>
<a href="read.php" class="link-primary">View</a>
</form>
</div>
</body>
</html>