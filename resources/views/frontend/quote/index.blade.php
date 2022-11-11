@extends('frontend.layouts.app')

@section('content')

    <!-- requestquote start  -->
    <div>
        <div id="sbanner">
            <img class="img-fluid" src="{{ asset($image) }}" alt="">
            <div class="cb_title">
                <h2>Quotation</h2>
                <a href="{{route('homepage')}}" class="tablinks" onclick="openCity(event, 'London' )">Home</a>>Reqest Quote
            </div>

        </div>
        <section id="rquote">
            <div class="container ">
                <h2 class="rtitle_0 pb-5">Request Quote Now</h2>
                @if (Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{ Illuminate\Support\Facades\Session::get('success') }}
                    </div>
                @endif
                <form id="myform" method="post" name="enq" action="{{ route('quote-details') }}">
                    @csrf
                    <div class="row  mrequest g-5">
                        <div class="col-lg-6">
                            <div class="hinput">
                                <h5>Full Name</h5>
                                <input type="text" name="name" required class="rinput">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hinput">
                                <h5>Address</h5>
                                <input type="text" name="address" class="rinput">
                            </div>
                        </div>

                    </div>
                    <div class="row  g-5 py-4 mrequest">
                        <div class="col-lg-6">
                            <div class="hinput">
                                <h5>Your Number</h5>
                                <input type="number" required name="phone" class="rinput">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hinput">
                                <h5>Email Id</h5>
                                <input type="text" required name="email" class="rinput">
                            </div>
                        </div>

                    </div>
                    <div class="row  mrequest g-5">
                        <div class="col-lg-6">
                            <div class="hinput">
                                <h5>Your Organization</h5>
                                <input type="text" required name="organization" class="rinput">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hinput">
                                <h5 class="mb-0 pb-2">Services</h5>
                                <select required name="service_id" class="form-select rinput pt-0 mt-0"
                                    aria-label="Default select example">
                                    <option value="">Select Service</option>
                                    @foreach ($services as $data)
                                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="rsubmit ">
                        <button type="submit " class="rsubmit_0">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!-- request quote end  -->
@stop

