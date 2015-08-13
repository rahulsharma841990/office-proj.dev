<!DOCTYPE html>
<html>
<head>
	<title>Create New Article</title>
	
</head>
<body>
{!! Form::open(['url' => 'articles']) !!}

	{!! Form::label('title','Enter Title:') !!}

	{!! Form::text('title', null, ['class'=> 'Test-class' ]) !!}

	<br/> <br/>

	{!! Form::label('body','Enter Body:') !!}

	{!! Form::textarea('body', null, ['class'=> 'Test-class' ]) !!}

	<br/> <br/>

	{!! Form::label('published_at','Published On:') !!}

	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=> 'Test-class' ]) !!}

<!--Carbon\Carbon::now()->format('Y-m-d')-->
	<br/> <br/>

	{!! Form::submit('Add Article') !!}

{!! Form::close() !!}
<ul>
<?php
	if($errors->any()):
		foreach ($errors->all() as $key => $value) {
			
?>
		<li>{{ $value }}</li>
<?php
		}
	endif;
?>
</ul>
</body>
</html>