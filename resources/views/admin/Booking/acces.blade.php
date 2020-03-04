@extends('admin.layouts.app')

@section('content')
    {!! Form::open(['url' => ['backend/accomup',$data->id], 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'method' => 'GET', 'id', 'novalidate'=>'novalidate']) !!}
    <div class="container-detached">
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

 




<div class="container">

      <h4 align="center">Add Accommodation For Invoice </h4>
      <br />
        <div class="table-repsonsive">
          <span id="error"></span>
          <table class="table table-bordered" id="item_table">
            <thead>
              <tr>

                <th>D From</th>
                <th>D To</th>
                <th>Hotel/Cruises</th>
                <th>Meals</th>
                <th>Location</th>
                <th>Notes</th>
                <th><button type="button" name="add" class="btn btn-success btn-xs add"><span class="glyphicon glyphicon-plus"></span></button></th>
              </tr>
            </thead>
            <tbody class="h">
           
            </tbody>
          </table>
          <div align="center">
            <!-- <input type="submit" name="submit" class="btn btn-info" value="Insert" /> -->
          </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary legitRipple">Submit <i
                                class="icon-arrow-left13 position-right"></i></button>


    {!! Form::close() !!}


<h1>Added Befor</h1>
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
      <th scope="col">D .from</th>
      <th scope="col">D To</th>
      <th scope="col">Hotel/Cruises</th>
      <th scope="col">Location</th>
      <th scope="col">Note</th>
<td>control</td>
    </tr>
    
  </thead>
  <tbody>

@foreach($booking_acom as $value)

        <form action="{{url('backend/store_acc',$value['id']) }} " method='post'>
            @csrf
      <th scope="col"><input type="date" name="date" value="{{$value['d_from'] }}" ></th>
      <th scope="col"><input type="date" name="date1" value="{{$value['d_to'] }}" ></th>
      <th scope="col"><input type="text" name="hotel" value="{{$value['hotel']}}" ></th>
      
      <th scope="col"> <input type="text" name="location" value="{{$value['location']}}"></th>
            <th scope="col"><input type="text" name="notes" value="{{$value['notes'] }}" ></th>
<td><button class="btn btn-info" type="submit">Update</button>
<form action="{{ url('backend/delete', $value->id)}}" method="POST">
   @csrf
   
   <input class="btn btn-danger" type="submit" value="Delete" />
</form></td>
   
    </tr>
@endforeach
  </tbody>
</table>




@endsection
@section('script')

    <script type="text/javascript" src="{{ asset('admin/js/pages/form_validation.js')}}"></script>

@endsection
@section('js')

    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switch.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/dropzone.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/media/fancybox.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/anytime.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/legacy.js')}}"></script>



    <script>
    $(document).ready(function(){

         
      var count = 0;

      $(document).on('click', '.add', function(){
        count++;
        var html = '';
        html += '<tr>';
        html += '<td><input type="date" name="date_f[]" class="form-control" /></td>';
        html += '<td><input type="date" name="date_t[]" class="form-control" /></td>';
        html += '<td><select  name="hotel[]" class="form-control "><option value="Le Méridien Pyramids Hotel & Spa">Le Méridien Pyramids Hotel & Spa</option><option value="Sofitel Legend Old Cataract Aswan">Sofitel Legend Old Cataract Aswan</option><option value="Mövenpick Resort Aswan">Mövenpick Resort Aswan</option><option value="Hilton Cairo Zamalek Residence">Hilton Cairo Zamalek Residence</option><option value="Sofitel Winter Palace Luxor">Sofitel Winter Palace Luxor</option> <option value="The Nile Ritz-Carlton">The Nile Ritz-Carlton</option> <option value="JW Marriott Hotel Cairo">JW Marriott Hotel Cairo</option><option value="Sonesta St. Goerge Hotel">Sonesta St. Goerge Hotel</option><option value="Four Seasons Cairo at Nile Plaza">Four Seasons Cairo at Nile Plaza</option><option value="The Oberoi Zahra Luxury Nile Cruise">The Oberoi Zahra Luxury Nile Cruise</option><option value="Four Seasons Hotel Alexandria">Four Seasons Hotel Alexandria</option><option value="Four Seasons Cairo at The First Residence">Four Seasons Cairo at The First Residence </option> <option value="Marriott Mena House">Marriott Mena House </option><option value="Four Seasons Resort Sharm El Sheikh">Four Seasons Resort Sharm El Sheikh </option><option value="Oberoi Beach Resort Sahl Hasheesh">Oberoi Beach Resort Sahl Hasheesh </option><option value="Rixos Sharm El Sheikh Hotel">Rixos Sharm El Sheikh Hotel</option> <option value="Sofitel Alexandria Cecil Hotel">Sofitel Alexandria Cecil Hotel</option><option value="The Oberoi Philae Nile Cruise">The Oberoi Philae Nile Cruise</option></select></td>';
  
        
        
              html += '<td><select  name="meals[]" class="form-control "><option value="B.B">B.B</option> <option value="H.B">H.B</option><option value="F.B">F.B</option></select></td>';
      
        
              html += '<td><input type="text" name="location[]" class="form-control " /></td>';
              
        html += '<td><textarea  name="notes[]" class="form-control " /></textarea></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span></button></td>';
        $('.h').append(html);
      });

      $(document).on('click', '.remove', function(){
        $(this).closest('tr').remove();
      });

      
    });
</script>

    @include('admin.layouts.include.img')

@endsection