@extends('admin.layouts.app')



@section('content')
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
      <th scope="col">Name</th>
      <th scope="col">E.mail</th>
      <th scope="col">Url</th>
      <th scope="col">City</th>
      <th scope="col">Phone</th>

      <th scope="col">status</th>
      <th scope="col">control</th>
      
    </tr>
  </thead>
  <tbody>
@foreach($use as $a)
    @if($a->status=='user')
    <tr>
      <th scope="row">{{$a->name}}</th>
      <td>{{$a->email}}</td>
      <td>{{$a->url}}</td>
      <td>{{$a->city}}</td>
      <td>{{$a->phone}}</td>
            <td><span class="badge badge-success">Confirmed</span>
            <span class="badge badge-danger">Blocked</span>
           <span class="badge badge-pill badge-info">Pinding</span>
            </td>
      <td><button type="button" class="btn btn-success">Confirmed</button>
      <button type="button" class="btn btn-danger">Blocked</button></td>

    </tr>

    @endif
@endforeach
  </tbody>
</table>
<ul>
    


</ul>
<!-- /grid -->
@endsection
