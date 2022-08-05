@extends ('frontend.layouts.app')
@section('content')
    <div>
        <div id="Detail_ban">
            <div class="container">
                <div class="banner_content">

                    <h2>Details</h2>

                    <p><span class=" tablinks serv_view" onclick="openCity(event, 'London')">Home </span>>Details</p>

                </div>
                <!-- <div class="banner_arrow">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </div> -->
            </div>
        </div>
        <div class="container py-5">
            <div class="row gx-5">
                @if ($services)
                    <div class="col-lg-5">
                        <img class="img-fluid"
                            src="{{ asset($services->image_path) }}"
                            alt="">
                    </div>
                    <div class="col-lg-7">
                        <h1 class="rtitle_0 text-start">{{$services->title}}</h1>
                        <p class="d_para">{!!$services->content!!}</p>
                        <div class="rsubmit ">
                            {{-- <button class="rsubmit_0 " type="submit">Book now</button> --}}
                            <button type="button" class="rsubmit_0 btn-servicemodal book" data-id="{{ $services->id }}">
                                Book Now
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
