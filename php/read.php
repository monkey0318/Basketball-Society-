<?php include "php/reading.php"; ?>

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
<div class="box">

<h4 class="display-4 text-center">Participation Event</h4><br>

<?php if (isset($_GET['success'])) { ?>
<div class="alert alert-success" role="alert">
<?php echo $_GET['success']; ?>
</div>

<?php } ?>
<?php if (mysqli_num_rows($result)) { ?>
<table class="table table-striped">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Gender</th>
<th scope="col">Course</th>
<th scope="col">Event</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>

<?php 
$i = 0;
while($rows = mysqli_fetch_assoc($result)){
$i++;
?>

<tr>
<th scope="row"><?=$i?></th>
<td><?=$rows['name']?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['gender']; ?></td>
<td><?php echo $rows['course']; ?></td>
<td><?php echo $rows['event']; ?></td>
<td><a href="update.php?id=<?=$rows['id']?>" class="btn btn-success">Update</a>

<a href="php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
</td>
</tr>

<?php } ?>
</tbody>
</table>

<?php } ?>
<div class="link-right">
<a href="index.php" class="link-primary">Create</a>
</div>
</div>
</div>
</body>
</html>
