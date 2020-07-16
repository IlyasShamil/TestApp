@extends('layouts.master')


@section ('content')

@foreach ($post as $p)

<div>
	<?	if ($p->id == 1) 
		{
			echo $p->title . ' ' . $p->body;
		}
	?>	
</div>
<?if ($p->id == 2) {echo $p->title . ' ' . $p->body;}?>
	<a href="<?php echo $id= $p->id; ?>">suda</a>
@endforeach


@endsection