<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
</head>
<body>
	<ul>
	@foreach ($tasks as $task)

	<li><a href="/tasks/{{$task->number}}">{{$task->body}}</a></li>

	@endforeach
	</ul>
</body>
</html>