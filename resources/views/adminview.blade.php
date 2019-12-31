<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
<div class="row">
	<div class="col-4 col-sm-12 col-md-6">
<div>
	<h1>Logged in as Admin</h1>
	<h2>List of Courses</h2>


	<ul>
		@foreach($data as $i)
		<li>{{$i->code}} </li>
		<button> Delete </button>
		@endforeach
	</ul>

			<br><button href="add_course_admin.blade.php"> Add New Courses </button>
			

</div>
</div>
</div>
</div>