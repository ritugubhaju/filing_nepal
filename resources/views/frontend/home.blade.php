@extends('frontend.layouts.app')

@section('content')

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $slide)
                <div class="carousel-item  @if ($loop->first) active @endif" data-bs-interval="2000">
                    <img class="home_slider" src="{{ asset($slide->image_path) }}" alt="...">
                </div>
            @endforeach
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cright ">
                            <h2 class="cright_title">What do you want to do ?</h2>
                            <form action="{{ route('search-details') }}">
                                <select name="search" data-placeholder="Search Here"
                                    class="select2-multiple form-select form_0 pb-0 mb-4 search"
                                    id="select2Multiple" aria-label="Default select example">
                                    <option></option>
                                    @foreach ($service_category as $category)
                                        <option value="{{ $category->slug }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                <button class="seeks" type="submit">Seek Services</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
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

                        <i class="fa fa-info"></i>
                        <h5 class="py-2 we_work_h5 ">Your request</h5>
                        <p class="pb-3">{{setting('work1')}}</p>
                        <div class="arrow">

                            <span>&#8594;</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abox_1">
                        <i class="fa fa-wrench" aria-hidden="true"></i>

                        <h5 class="py-2 we_work_h5 ">We Prepared</h5>
                        <p class="pb-3">{{setting('work2')}}</p>
                        <div class="arrow">

                            <span>&#8594;</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abox_1">
                        <i class="fa fa-cogs" aria-hidden="true"></i>

                        <h5 class="py-2  we_work_h5">Required Process</h5>
                        <p class="pb-3">{{setting('work3')}}</p>
                        <div class="arrow">

                            <span>&#8594;</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abox_1">
                        <i class="fa fa-refresh" aria-hidden="true"></i>

                        <h5 class="py-2 we_work_h5 ">Assured Compliance</h5>
                        <p class="pb-3">{{setting('work4')}}</p>
                        <div class="arrow">

                            <span>&#8594;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    {{-- design start --}}
    <section id="services">
        <div class="container">
            <h2 class="rtitle_0">Services</h2>
            @foreach ($about as $data)
                <div class="row py-5">
                    <div class="col-lg-6">
                        <img class="img-fluid " src="{{ asset($data->image_path) }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="rtitle_0">Why Filing Nepal?</h2>
                        <p class="d_para">
                            {!! $data->content !!}
                        </p>

                    </div>
                </div>
            @endforeach


            <div class="container py-5">
                <div class="service-item1">
                    <ul class="nav nav-pills service-item-left1" id="myTab">
                        @if (isset($service_category))
                            @foreach ($service_category as $key => $data)
                                <li class="nav-item">
                                    <a href="#{{ $data->slug }}{{ $key }}"
                                        class="nav-link {{ $key == 0 ? 'active' : '' }} d-flex justify-content-between align-items-center"
                                        id="test"> {{ $data->title }} <i class="fa fa-caret-right "
                                            aria-hidden="true"></i></a>
                                </li>
                            @endforeach
                        @endif


                    </ul>

                    <div class="tab-content">
                        @if (isset($service_category))
                            @foreach ($service_category as $key => $data)
                                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                    id="{{ $data->slug }}{{ $key }}">
                                    @foreach ($data->categories as $service)
                                        <div class="s_cont1 d-flex justify-content-between ">
                                            <h6 class="insleft_title1"><i class="fa fa-book"
                                                    aria-hidden="true"></i>{{ $service->title }}</h6>
                                            <a href="{{ route('services.detail', $service->slug) }}" class="view_now"
                                                class="tablinks" onclick="openCity(event, 'Detail')">View now</a>
                                            <div class="bbtn btn-servicemodal book" data-id="{{ $service->id }}">Book
                                                Services</div>
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

    {{-- design end --}}
    <section id="testimonials">
        <div class="container ">
            <h2 class="px-5 rtitle_0">Our Clients</h2>
            <div class="row align-items-center">
                <div class="col-lg-5 ">
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

                                        <p>{!! Str::limit($data->content, 150) !!}</p>


                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon text-light" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
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


    <div class="container">
        <div class="row ">
            <div class="col-lg-12  ">
                <div class="owl-carousel ">
                    @foreach($categories as $data)
                    <div class="  slider_1 play ">
                        <img class="img-fluid  home_slider1" src="https://img.freepik.com/premium-photo/businessman-hands-working-stacks-documents-paper-files_218381-9460.jpg?size=626&ext=jpg" alt="">
                        <div class="service-slider-content">
                            <a onclick="openCity(event, 'Paris')" class="slider-link">{{$data->title}}</a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>



    </div>


@stop
