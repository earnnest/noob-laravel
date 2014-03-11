<!doctype html>
<html>
	<head>
	
	</head>
	
	<body>
		<h1>All Users</h1>

		<ul>
		
		@if ($users != NULL)
			
			@foreach ($users as $user)
				<li>{{ link_to("/users/$user->username", $user->username) }}</li>
			@endforeach

		@else

			Hello

		@endif
		
		</ul>

	</body>
</html>