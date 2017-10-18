<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.3 - laravel scout algolia search example</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<br><br>

	<form method="POST" action="{{ URL('/searchas') }}" autocomplete="on">
		@if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="row">
			<div class="col-md-6">
				<div class="form-group ">
					<input type="text" id="title" name="nama" class="form-control" placeholder="Enter Title" value="{{ old('nama') }}">
					<input type="password" id="title" name="password" class="form-control" placeholder="Enter Title" value="{{ old('password') }}">
					<span class="text-danger"></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<button class="btn btn-success">Create New Item</button>
				</div>
			</div>
		</div>
	</form>

	<div class="panel panel-primary">
	  <div class="panel-heading">Item management</div>
	  <div class="panel-body">
	    	<form method="GET" action="{{ URL('/search') }}">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="nama" class="form-control" placeholder="Enter Title For Search" value="{{ old('nama') }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button class="btn btn-success">Search</button>
						</div>
					</div>
				</div>
			</form>

			<table class="table table-bordered">
				<thead>
					<th>nama</th>
					<th>password</th>
					
				</thead>
				<tbody>
					@if($tables->count())
						@foreach($tables as $post)
							<tr>
								
								<td>{{ $post->nama }}</td>
								<td>{{ $post->password }}</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="4">There are no data.</td>
						</tr>
					@endif
				</tbody>
			</table>
			{{ $tables->links() }}
	  </div>
	</div>

</div>

</body>
</html>