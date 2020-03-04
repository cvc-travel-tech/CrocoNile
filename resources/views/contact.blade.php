@include('layouts.navbar')


    <!--====== LOCATON ==========-->
    <section>
        <div class="rows contact-map map-container">

        </div>
    </section>

    <section>
        <div class="tr-register">
            <div class="tr-regi-form v2-search-form">



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




                <h1>Contact Us</h1>
                <p>It's free and always will be.</p>
                <form class="contact__form"  method="post" action="{{Route('contact')}}" >

                <input type="hidden" name="_token"  value="{{ csrf_token() }}">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                    </div>
                    <div class="contact-input">


                        <div class="row">
                            <div class="input-field col s6 contact-input">

                                <input type="text" class="validate" name="name" required>
                                <label>Enter your Name</label>

                                <div class="input-field ">
                                    <input type="number" class="validate" name="phone" required>
                                    <label>Enter your phone</label>
                                </div>
                                <div class="input-field ">
                                    <input type="email" class="validate" name="email" required>
                                    <label>Enter your email</label>
                                </div>
                                <div class="text-area">
                                    <textarea name="body" rows="4" cols="50">

                                                </textarea>

                                </div>

                            </div>

                            <div class="map">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.633230082397!2d31.37176308448157!3d30.10468878186044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458172c06f75afd%3A0x8e97487e4e5e6946!2sCadence%20Vacations%20Center!5e0!3m2!1sar!2seg!4v1577358925179!5m2!1sar!2seg"
                                            width="400" height="450" frameborder="0" style="border:0;"
                                            allowfullscreen=""></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="input-field col s3 ">
                            <input type="submit" value="Send"
                                class=" contact-btn waves-effect waves-light tourz-sear-btn v2-ser-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
  
      @include('layouts.footer')