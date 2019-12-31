<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<html>
	<body>
		<div class="container">
<div class="row">
	<div class="col-4 col-sm-12 col-md-6">
		<form action="submit" method="POST">
			@csrf
		<input type="text" name="code" placeholder="course code">
		<br>
		<br>
		<input type="text" name="user_id" placeholder="Teacher ID">
		<br>
		<br>
		<input type="text" name="capacity" placeholder="Total Capacity">
		<br>
		<br>
		<input type="text" name="enrolled" placeholder="Enrolled Student">
		<br>
		<br>
		<button type="submit">Submit Data</button>
		</div>
		</div>
		</div>
	</body>
</html>