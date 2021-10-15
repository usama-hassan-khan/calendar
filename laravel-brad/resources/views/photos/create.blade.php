<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<h3 class="text-center">Laravel Crud</h3>
			<br>
            <!-- <form method="POST" action="{{ route('photos.store') }}"> -->
			<form method="POST" action="/photos">
				@csrf
			  <div class="form-group row">
			    <label for="u_name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="u_name" name="name" placeholder="Name">
			    </div>
			  </div><br>
			  <div class="form-group row">
			    <label for="u_email" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="u_email" name="title" placeholder="Email">
			    </div>
			  </div><br>
			  <!-- <div class="form-group row">
			    <label for="u_age" class="col-sm-2 col-form-label">Age</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="u_age" name="u_age" placeholder="Age">
			    </div>
			  </div> -->
              <br>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <input type="submit" class="btn btn-success">
			    </div>
			  </div>
			</form>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
</body>
</html>