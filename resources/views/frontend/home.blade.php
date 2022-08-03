@extends('frontend.layouts.app')

@section('content')

    <div id="London" class="tabcontent">


        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img class="home_slider"
                        src="https://t4.ftcdn.net/jpg/02/96/35/27/240_F_296352702_2RetcMbcX7gjw19ItLqNf6uiUpv3Ye1R.jpg"
                        alt="...">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="cright ">
                                    <h2 class="cright_title">What do you want to do ?</h2>
                                    <form action="{{route('search-details')}}">
                                        <select name="search" data-placeholder="Search Here"
                                            class="select2-multiple form-select form_0 pb-0 mb-4 search"
                                            id="select2Multiple" aria-label="Default select example">
                                            <option></option>
                                            @foreach ($service_category as $category)
                                                <option value="{{ $category->slug }}">{{ $category->title }}</option>
                                                @foreach ($services as $service)
                                                    @if ($category->id == $service->category->id)
                                                        <option value="{{ $service->slug }}">{{ $service->title }}</option>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </select>
                                        <button class="seeks" type="submit">Seek Services</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="carousel-item" data-bs-interval="2000">
          <img class="home_slider"
            src="https://t3.ftcdn.net/jpg/02/50/06/78/240_F_250067805_cui2Qn216VYrebYDRbheYBIXyMbGEaPg.jpg"
            class="d-block w-100" alt="...">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="cright ">
                  <h2 class="cright_title">What do you want to do ?</h2>
                  <select class="form-select form_0 pb-0 mb-4" aria-label="Default select example">
                    <option selected>Find Here...</option>
                    @foreach ($service_category as $data)
                        <option value="1">One</option>
                    @endforeach
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <button class="seeks" type="submit">Seek Services</button>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section id="about_us">
            <h2 class="text-center py-4 rtitle_0">How we work</h2>
            <div class="container">
                <div class="row text-center ">
                    <div class="col-lg-3">
                        <div class="abox">
                            <p class="astep">01 </p>
                            <i class="fa fa-circle" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="abox">
                            <p class="astep">02 </p>
                            <i class="fa fa-circle" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="abox">
                            <p class="astep">03 </p>
                            <i class="fa fa-circle" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="col-lg-3">

                        <p class="astep">04 </p>
                        <i class="fa fa-circle" aria-hidden="true"></i>


                    </div>



                </div>
                <div class="row py-4">
                    <div class="col-lg-3">
                        <div class="abox_1">
                            <!-- <img class="img-fluid"
                    src="https://img.freepik.com/free-photo/touching-light-male-hand-demonstrating-gesture-getting-touch-isolated-black-studio-background-concept-human-emotions-feelings-phycology-business_155003-33799.jpg?size=626&ext=jpg"
                    alt=""> -->
                            <i class="fa fa-info
                "></i>
                            <h5 class="py-2 we_work_h5 ">Your request</h5>
                            <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Unde</p>
                            <div class="arrow">

                                <span>&#8594;</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="abox_1">
                            <!-- <img class="img-fluid"
                    src="https://img.freepik.com/free-photo/man-working-night_1098-12798.jpg?size=626&ext=jpg" alt=""> -->
                            <i class="fa fa-wrench" aria-hidden="true"></i>

                            <h5 class="py-2 we_work_h5 ">We Prepared</h5>
                            <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Unde</p>
                            <div class="arrow">

                                <span>&#8594;</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="abox_1">
                            <i class="fa fa-cogs" aria-hidden="true"></i>

                            <h5 class="py-2  we_work_h5">Required Process</h5>
                            <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Unde</p>
                            <div class="arrow">

                                <span>&#8594;</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="abox_1">
                            <i class="fa fa-refresh" aria-hidden="true"></i>

                            <h5 class="py-2 we_work_h5 ">Assured Compliance</h5>
                            <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Unde</p>
                            <div class="arrow">

                                <span>&#8594;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="services">
            <div class="container">
                <h2 class="rtitle_0">Services</h2>
                <div class="row py-5">
                    <div class="col-lg-6">
                        <img class="img-fluid "
                            src="https://img.freepik.com/premium-photo/crop-man-uniform-making-notes-clipboard-while-working-professional-garage_251859-4485.jpg?size=626&ext=jpg"
                            alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="rtitle_0">Why Filing Nepal?</h2>
                        @foreach ($about as $data)
                            <p class="d_para">
                                {!! $data->content !!}
                            </p>
                        @endforeach
                    </div>
                </div>
                <div class="container">
                    <div class="m-4">
                        <ul class="nav nav-pills my-5" id="myTab">
                            @if (isset($service_category))
                                @foreach ($service_category as $key => $data)
                                    <li class="nav-item">
                                        <a href="#{{ $data->slug }}"
                                            class="nav-link {{ $key == 0 ? 'active' : '' }}">{{ $data->title }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <div class="tab-content">
                            @if (isset($service_category))
                                @foreach ($service_category as $key => $data)
                                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                        id="{{ $data->slug }}">
                                        @foreach ($data->categories as $service)
                                            <div class=" s_cont ">
                                                <h6 class="insleft_title"><i class="fa fa-book"
                                                        aria-hidden="true"></i>{{ $service->title }}
                                                </h6>
                                                <p class="insleft_para pb-0 mb-0">{!! $service->content !!}</p>
                                                <div class="insbtn">
                                                    <div class="dbtn"><a href="{{ route('services') }}">View Now</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials">
            <div class="container ">
                <h2 class="px-5 rtitle_0">Our Clients</h2>
                <div class="row align-items-center">
                    <div class="col-lg-5 d-flex align-items-center">
                        <div id="tes_slider">
                            <div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner pt-5 mt-5">
                                    @foreach ($clients as $key => $data)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} text-center p-4 "
                                            data-bs-interval="1000">

                                            <img class="c_height" src="{{ asset($data->image_path) }}" alt="">
                                            <h4 class="pt-3 ">{{ $data->title }}</h4>
                                            <h6 class="test_icon">{{ $data->position }} at {{ $data->company_name }} <i
                                                    class="fa fa-twitter" aria-hidden="true"></i>
                                            </h6>
                                            <p>{!! $data->content !!}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon text-light" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon text-light" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <a class="sbtn tablinks serv_view" href="{{ route('clients') }}">View All</a>
                        <div class="cc"></div>



                        <div class="owl-carousel pe-0 me-0">
                            <div class="  slider_1">
                                <div class="row pe-0 me-0">
                                    @foreach ($clients as $data)
                                        <div class="col-lg-4">
                                            <img class="img-fluid" src="{{ asset($data->image_path) }}" alt="">
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


@stop

@section('page-specific-scripts')
    <script>
        $('.search').change(function(e) {
            e.preventDefault();
            var search = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ route('search-details') }}",
                data: {
                    search: search,
                },
                success:function(response){
                if(typeof(response) != 'object'){
                    response = JSON.parse(response)
                }
                window.location = "http://127.0.0.1:8000/search"+;

            }

            })
        });
    </script>
@endsection
