<!DOCTYPE html>
<html>
<head>
	<title>pagination</title>
</head>

<style>
	.pagination li{
		display: inline;
	}
</style>

<body>

<div class="row">
	<div class="container">
		<table>
		<thead>
			<th>Name</th>
			<th>Password</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<tr>
				<td>{{$user->nama}}</td>
				<td>{{$user->password}}</td>
			</tr>
		</tbody>
		@endforeach
		
	</table>

	 {!! $users->render() !!}
	</div>
</div>

</body>
</html>