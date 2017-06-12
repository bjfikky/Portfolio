<!-- CONTACT -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="center-title">
                <h1>GET IN TOUCH</h1>
                <p>Do you have any questions? Use the contact form below to reach out to me. I will respond in less than three days. You can also send me a text message or
                    leave a voice message using the phone number provided.</p>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <!-- contact-information -->
                    <div class="col-md-offset-2 col-md-8 contact-information top_45">
                        <div class="col-md-4 contact-info text-center"> <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>{{$benjamin->phone}}</p>
                        </div>
                        <div class="col-md-4 contact-info text-center"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>{{$benjamin->location}}</p>
                        </div>
                        <div class="col-md-4 contact-info text-center"> <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>{{$benjamin->email}}</p>
                        </div>
                    </div>

                    <!-- form -->
                    <form class="col-md-offset-2 col-md-8 top_60" method="POST" action="/contact">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}
                        <div class="row">
                            <!-- name -->
                            <div class="col-md-6">
                                <input id="con_name" class="form-input" type="text" placeholder="Name" name="name" value="{{old('name')}}" required>
                            </div>
                            <!-- email -->
                            <div class="col-md-6">
                                <input id="con_email" class="form-input" type="text" placeholder="Email" name="email" value="{{old('email')}}" required>
                            </div>
                            <!--message-->
                            <div class="col-md-12">
                                <textarea id="con_message" class="form-text" placeholder="Message" rows="8" name="message" required>{{ old('message') }}</textarea>
                            </div>
                            <input class="giggs_button2" type="submit" value="SEND A MESSAGE"> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>