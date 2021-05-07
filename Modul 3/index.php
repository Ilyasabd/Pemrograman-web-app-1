<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="Bootstrap.css">
	<title>Modul 3 Praktikum</title>
</head>
<body class="bg-dark">
<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
						<h3 class="bg-success text-white text-center py-3">Employees Registration Database of PT.Mencari Cinta Sejati</h3>
						</div>
							<div class="card-body">
								<form action="insert.php" method="post">
									<input type="text" class="form-control mb-2" placeholder="User Name" name="name">
									<input type="email" class="form-control mb-2" placeholder="User Email" name="email">
									<input type="text" class="form-control mb-2" placeholder="User Age" name="age">
									<input type="text" class="form-control mb-2" placeholder="your occupation in this company" name="job">
									<button class="btn btn-primary" name="submit">Submit your data</button>
									<a href="view.php">Database Admin</a>
								</form>
						</div>
				</div>
				
			</div>	
			
		</div>
</div>
</body>
</html>