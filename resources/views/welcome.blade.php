<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
</head>
<body>
	<ul>
	@foreach ($tasks as $task)

	<li>{{$task->body}}</li>
            {{--Test Delete--}}            <li>{{$task->body}}</li>
            {{--Test Delete--}}            <li>{{$task->body}}</li>

	@endforeach
	</ul>
</body>
</html>
