<!-- register now start  -->
<div id="Register-now" class="tabcontent">
    <div class="container">

        <div class="registration-now">
            <div class="register-now-title">
                <span class="register-now-left">REGISTER</span>
                <div>
                    <h2 class="register-now-title-0">REGISTRATION FORM</h2>
                    <p class="register-now-para">
                        PLEASE FILL IN THE FORM BELOW
                    </p>
                </div>
            </div>
            <div class="p-5">
                <form action="{{ route('register-details') }}" method="POST" class="row g-3 ">
                    @csrf
                    <div class="p-5">
                        <div class="col-12 py-4 ">

                            <input type="text" required name="title" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-12 ">

                            <input type="email" required name="email" class="form-control" placeholder="Email">
                            <span id="textarea1-error" class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="col-12 py-4">

                            <input type="password" required name="password" class="form-control" placeholder="Password">
                        </div>


                        <div class="col-12 py-4">

                            <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                        </div>

                        <div class="register-submit mt-4 ">
                            <button class="register-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <p class="py-3 text-end">Already have an account? <a class="tablinks"
                    onclick="openCity(event, 'Login' )">Login in</a></p>
        </div>
    </div>

</div>
</div>
<div id="Login" class="tabcontent">
    <div class="container">

        <div class="registration-now">
            <div class="register-now-title">
                <span class="register-now-left">Login</span>
                <div>
                    <h2 class="register-now-title-0">LOGIN FORM</h2>
                    <p class="register-now-para">
                        PLEASE FILL IN THE FORM BELOW
                    </p>
                </div>
            </div>
            <div class="p-5">
                <form action="{{ route('login-details') }}" method="POST" class="row g-3 ">
                    @csrf
                    <div class="p-5">

                        <div class="col-12 ">

                            <input type="email" required name="email" class="form-control" placeholder="Email">
                            <span id="textarea1-error" class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="col-12 py-4">

                            <input type="password" required name="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="register-submit mt-4 ">
                            <button class="register-btn">Submit</button>
                        </div>
                    </div>
                </form>
                <p class="py-3 text-end"> <a class="tablinks" onclick="openCity(event, 'Forgot' )">Forgot Password</a>
                </p>
            </div>
        </div>

    </div>
</div>
<div id="Forgot" class="tabcontent">
    <div class="container">

        <div class="registration-now">
            <div class="register-now-title">

                <div>
                    <h2 class="register-now-title-0">FORGOT PASSWORD</h2>

                </div>
            </div>
            <div class="p-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('updatePassword') }}">
                    @csrf

                    <input type="email" name="email" id="email"
                        class="register-int my-4 px-3 @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        placeholder=" Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="password" name="password" id="password"
                        class="register-int my-4 px-3 @error('password') is-invalid @enderror" value="{{ old('password') }}"
                        placeholder=" Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="register-submit mt-4 ">
                        <button class="register-btn">Submit</button>
                </form>
                    </div>
                    <p class="py-3 text-end">Have not account?<a class="tablinks"
                            onclick="openCity(event, 'Register-now' )">Register here </a></p>
            </div>
        </div>

    </div>
</div>
<!-- register now end  -->

<section id="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <div class="fright">
                    <img src="./image (3).png" alt="" class="filling_logo">
                    <p class="pt-4">{{ setting('footer') }}</p>
                    <h5 class="pt-3 ">Social Media</h5>
                    @if (setting('facebook') != null)
                        <p class="top d-flex justify-content-start"><a href="{{ setting('facebook') }}"><i
                                    class="fa fa-facebook " aria-hidden="true"></i> </a>
                    @endif

                    @if (setting('instagram') != null)
                        <a href="{{ setting('instagram') }}"> <i class="fa fa-instagram mx-4"
                                aria-hidden="true"></i></a>
                    @endif

                    @if (setting('twitter') != null)
                        <a href="{{ setting('twitter') }}"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                        </p>
                    @endif
                </div>

            </div>
            <div class="col-lg-3">
                <div class="fmidle tab">
                    <h5>Links</h5>
                    <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                            onclick="openCity(event, 'London' )" id="defaultOpen"><a class="links"
                                href="{{ url('') }}">Home</a></button> </p>
                    <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                            onclick="openCity(event, 'About' )"><a class="links" href="{{ url('about') }}">About
                            </a>
                        </button> </p>
                    <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                            onclick="openCity(event, 'Paris' )"><a class="links"
                                href="{{ url('services') }}">Services</a></button> </p>
                    <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                            onclick="openCity(event, 'Request' )"><a class="links"
                                href="{{ url('recent-quote') }}">Request Quote</a></button> </p>
                    <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <button class="tablinks"
                            onclick="openCity(event, 'Contact' )"><a class="links"
                                href="{{ url('contacts') }}">Contact
                                Us</a></button></p>




                </div>
            </div>

            <div class="col-lg-3">
                <div class="fmidle">
                  <h5>Services</h5>
                  @foreach ($services_footer as $service )
                  <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><a class="links"
                    href="{{ route('services.detail', $service->slug) }}">{{$service->title}}</a> </p>
                  @endforeach

                </div>
              </div>

            <div class="col-lg-3 pt-5 ">
                <form method="post" action="{{ url('newsletter') }}">
                    @csrf
                    <div class="fnews">
                        <div>
                            <h5>News Letters</h5>
                            <div class="fmail px-4">
                                <input name="email" type="email" placeholder="Mail Id">
                                <button type="submit"><span>&#8594;</span></button>
                            </div>
                            <span id="textarea1-error" class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- services modal start  -->
<div class="modal bookModal" id="modal bookModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Welcome Please Enter the Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="enq" action="{{ route('booking.store') }}">
                    @csrf
                    <input type="hidden" class="service_id" name="service_id">
                    <div class="cdetails ">
                        <h3 class="pb-2">Company Details</h3>
                        <input type="text" required name="company_name" class="pname" placeholder="Name">
                        <input type="text" name="company_address" class="pname my-4" placeholder="Address">


                    </div>
                    <div class="pdetails ">
                        <h3 class="pt-3 pb-2">Personal Details</h3>
                        <input type="text" required name="name" class="pname" placeholder="Name">
                        <input type="email" required name="email" class="pname my-4" placeholder="Email Id">
                        <div class="lpname_0">

                            <input type="number" name="phone" class="pname lpname" placeholder="Phone Number">



                            <input type="number" required name="mobile" class="pname  lpname"
                                placeholder="Mobile Number">

                        </div>
                    </div>
                    <div class="book_1 pt-5">
                        <button type="submit" class="nbook">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- services modal end  -->
