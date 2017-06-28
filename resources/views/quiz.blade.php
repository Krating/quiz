<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="{{ route('quiz.store') }}" method="post" file="true" enctype="multipart/form-data">
		Title:<br>

		<input type="text" name="title"><br>
		Subtitle:<br>
		<input type="text" name="subtitle"><br>
		Upload Cover Photo:<br>
		<input type="file" name="imgcover"><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Answer:<br>
		<input type="text" name="answer"><br>
		<br>
		<input type="submit" value="Submit">
	</form> 
</body>
</html>