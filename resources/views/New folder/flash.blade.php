@if($errors->any())
<div class="alert alert-danger">
	@foreach($errors->all() as $error)
<li>
	{{$error}}
</li>
@endforeach
</div>

@endif
@if(session('success'))
<div class="text-center alert alert-success">
	{{session('success')}}
</div>

@endif
@if(session('error'))
<div class="text-center alert alert-danger">
	{{session('error')}}
</div>	

@endif
