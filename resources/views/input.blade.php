@include('layouts.navbar')

    <section class="input" style="height: 800px;">
        <div class="spe-title khartosha-content">
            <h2 style="margin-top: 35px;">
                Write <span>Your Name</span></h2>
            <div class="title-line" style="margin-right: 178px;">
                <div class="tl-1"></div>
                <div class="tl-2"></div>
                <div class="tl-3"></div>
            </div>
            <p style="margin-right: 156px;">Croconile Travel offers many packages and customized tours.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group" style="margin-left: 130px;">
                        <input type="text" id="fname" class="form-control input-khatosha" name="name"
                            placeholder="Your name.." maxlength="10">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                </div>
                <div class="letter-khartosha">
                    <div class="col-md-4">
                        <!-- <img src="images/final-khartosha.png" width="100px"> -->
                        <h4 class="text-khartosha"></h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="images/eglyphTOP.jpg">

                            </div>
                            <div class="col-lg-12">
                                <img src="images/eglyphTOP.jpg">

                            </div>
                            <div class="col-lg-12">
                                <img src="images/eglyphTOP.jpg">

                            </div>
                            <div class="col-lg-12">
                                <img src="images/eglyphTOP.jpg">

                            </div>
                            <div class="col-lg-12">
                                <img src="images/eglyphTOP.jpg">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>

   @include('layouts.footer')