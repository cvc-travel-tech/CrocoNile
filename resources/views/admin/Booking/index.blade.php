@extends('admin.layouts.app')

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">

            </h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover datatable-highlight">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Package</th>
                    <th>Email</th>
                    <th>Reservation At</th>

                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $value)
                    <tr>
                        <td><a href="{{url('backend/details',$value->id)}}">{{$value->id}}</a></td>
                        <td>{{$value->package->name ?? ''}}</td>
                        <td>{{$value->email ?? ''}}</td>
                        <!--<td>{{$value->phone ?? ''}}</td>-->
                        
                        <!--<td> -->
                        <!--  @if($value->is_verified == 1)-->
                        <!--   {{ 'CONFIRMED' }}-->
                          
                        <!--  @elseif($value->is_verified == 0 )-->
                        <!--    {{ 'Pending' }}-->
                        <!--  @endif-->
                        
                        <!--</td>-->

                        <td>{{$value->res_at ?? ''}}</td>

                        <td>{{$value->created_at ?? ''}}</td>
                        <td>

                    
                 <!--       <a class= "btn btn-success" href="{{route('admin.booking.edit',$value->id)}}">Edit</a> -->
                        <a  class= "btn btn-info" href="{{ url('backend/pdf/'.$value->id)}}"target="_blank">PDF</a>

                        <!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    PDF ADD <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="{{ url('backend/new/'.$value->id)}}">Transfers</a></li>
        <li><a href="{{ url('backend/newa/'.$value->id)}}">Accomdation</a></li>

    <li><a href="{{ url('backend/siteseeing/'.$value->id)}}"> sightseeing</a></li>
    <li><a href="{{ url('backend/complimentry/'.$value->id)}}">Complimentary</a></li>
    
  </ul>
</div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


            {{ $data->links() }}

        </div>
    </div>
@endsection


