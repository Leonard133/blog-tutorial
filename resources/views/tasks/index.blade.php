<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
	    @foreach ($tasks as $task)
	        <a href="/tasks/{{ $task->id }}"><li>{{ $task->body }}</li></a>
	    @endforeach
	</ul>
</body>
</html>