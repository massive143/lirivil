TABLE LIST 
@foreach($tabvar as $tables)
	<p>{{ $tables->nama }} </p>
	<p>{{ $tables->password }}</p>
@endforeach

<hr>