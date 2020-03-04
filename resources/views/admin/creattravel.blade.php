@extends('admin.layouts.app')
<style>


.card-wrapper{
  padding:40px 30px;
}
.dashboard-card{
  height:190px;
  background-color: #d3d3d3;
}
.dashboard-card h4{
  text-align:center;
  font-size:18px;
  padding:25px;
  color:#fff;
}
.dashboard-card .card-block{
  text-align:center;
  font-size:28px;
}
.sales-card i{
  color: tomato;
}

.query-card i{
  color: purple;
}

.order-card i{
  color: green;
}

.payment-card i{
  color: steelblue;
}

.card-message{
  
  min-height:150px;
  overflow:hidden;
  background-color:#181D21;;
}

.card-message .card-title{
  
  color:#FFF;
  text-align:center;
  font-size:18px;
  padding:10px;
  text-decoration:underline;
  
}


</style>
@section('content')

<!-- Simple panel -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title"></h5>

        <div class="form-group">
    <label for="title" class="control-label col-lg-3">Name</label>
    <div class="col-lg-9">
        <input class="form-control" type="text" tital="Name" placeholder="Pick a size..." name="title" id="title">
            </div>          
</div>


        </div>
        
    </div>
    <form method="post" action="{{url('backend/hamada')}}">
    <input type="hidden" value="{{ csrf_token() }}" name="_token" >
            <textarea class="ckeditor" name="ckeditor" id="ckeditor" rows="10" cols="80">

                    {!! $setting['about[content]'] !!}
            </textarea>
            <button type="submit" class="btn btn-primary legitRipple"> <i class="icon-arrow-left13 position-right"></i>
           Submit
   
            </button>
            </form>
            
    

<script type="text/javascript" src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
 <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
@endsection
