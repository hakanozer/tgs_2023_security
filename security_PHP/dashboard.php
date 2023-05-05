<?php 
include('secur.php');
include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <?php include('inc/navbar.php'); ?>
	<div class="row">
		<div class="col-sm-6">
			<h3>Todo Add</h3>
			<form method="post" >
				<div class="mb-3">
					<input name="title" placeholder="Title" class="form-control" />
				</div>
				<div class="mb-3">
					<input name="detail" placeholder="Detail" class="form-control" />
				</div>
				<button name="todo_add" class="btn btn-success">Send</button>
			</form>
		</div>
		<div class="col-sm-6">
			<h3>Todo List</h3>
			<table class="table table-hover">
			<thead>
				<tr>
				<th scope="col">ID</th>
				<th scope="col">Title</th>
				<th scope="col">Detail</th>
				<th scope="col">Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach( allTodo() as $row ) { ?>
				<tr>
					<th scope="row"><?php echo $row['tid']; ?></th>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['detail']; ?></td>
					<td>
						<a href="<?php echo "dashboard.php?deleteTodo=".$row['tid']; ?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
		</div>
	</div>
    
</div>
</body>
</html>