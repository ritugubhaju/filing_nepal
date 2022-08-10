@extends ('frontend.layouts.app')
@section('content')

    <!-- contact start  -->
    <div>
        <div id="cbanner">
            <div class="cb_title">
                <h2>Contact Now</h2>
                <p><a href="{{route('homepage')}}">Home</a>>Contact Us</p>
            </div>
        </div>
        <section id="contact ">
            <div class="container py-5 my-5 ">
                <div class="row  g-5">
                    <div class="col-lg-6">
                        <h2 class="rtitle_0 pb-5">Contact Us</h2>
                        @if (Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success">
                            {{ Illuminate\Support\Facades\Session::get('success') }}
                        </div>
                         @endif
                         <form method="post" name="enq" action="{{ route('contact-details') }}">
                            @csrf
                            <div class="row  mrequest g-5">
                                <div class="col-lg-6">
                                    <div class="hinput">
                                        <h5>Full Name</h5>
                                        <input type="text" required name="name" required class="rinput">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hinput">
                                        <h5>Email Id</h5>
                                        <input type="text" required name="email" class="rinput">
                                    </div>
                                </div>

                            </div>
                            <div class="row  g-5 py-4 mrequest">
                                <div class="col-lg-6">
                                    <div class="hinput">
                                        <h5>Phone Number</h5>
                                        <input type="number"  name="phone" class="rinput">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hinput">
                                        <h5>Mobile Number</h5>
                                        <input type="number" required name="mobile" class="rinput">
                                    </div>
                                </div>

                            </div>
                            <div class="row  mrequest g-5">
                                <div class="col-lg-12">
                                    <div class="hinput">
                                        <h5>Subject</h5>
                                        <input type="text"  name="subject" class="rinput">
                                    </div>
                                </div>
                            </div>

                            <div class="hinput pt-4">
                                <h5>Message</h5>
                                <textarea name="message" cols="30" rows="10" class="rinput rmessage"></textarea>
                              </div>
                            <div class="rsubmit ">
                                <button type="submit " class="rsubmit_0">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 cmap "><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7192911.795605831!2d79.63626048977022!3d28.323639343563105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1655451254323!5m2!1sen!2snp"
                            width="600" height="83%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </section>
    </div>

    <!-- contact end  -->
@stop
