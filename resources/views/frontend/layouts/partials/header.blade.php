<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">

                    <p>Call Now : <a class="links" href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a>


                        <span class="ps-5"> Email Us: <a class="links" href="mailto:{{ setting('email') }}"> </a></span>
                    </p>

                </div>

            </div>


            <div class="col-lg-6 text-end">
                @if (Auth::check())
                    Welcome to Filling Nepal.
                @else
                    <button><a href="{{ route('register') }}" class="dbtn" class="help d-md-show"><i
                                class="d-icon-user"></i>
                            Register</a></button>
                @endif
                @if (Auth::check())
                @else
                    <button><a href="{{ route('client-login') }}" class="dbtn" class="help d-md-show"><i
                                class="d-icon-user"></i>
                            Login</a></button>
                @endif

                    @if (setting('facebook') != null)
                        <p class="top d-flex justify-content-end">
                            <a href="{{ setting('facebook') }}">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                    @endif

                    @if (setting('instagram') != null)
                        <a href="{{ setting('instagram') }}"><i class="fa fa-instagram mx-4" aria-hidden="true"></i>
                        </a>
                    @endif

                    @if (setting('twitter') != null)
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    @endif
                    </p>
            </div>
        </div>
    </div>
</section>
<section id="nav">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}" class="tablinks"
                onclick="openCity(event, 'London' )"><img src="{{ asset('images/fl-LOGO.png') }}" alt=""
                    class="filling_logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="tab">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" class="tablinks"
                                onclick="openCity(event, 'Paris')">
                                Services
                            </a>

                        </li>
                        @foreach ($menus as $menu)
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url($menu->url) }}" class="tablinks">
                                    {{ $menu->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </nav>
</section>

{{-- menu start --}}
<div id="Paris" class="tabcontent">
    <div class="container py-5">
        <div class="service-item">
            <ul class="nav nav-pills service-item-left" id="myTab">
                @if (isset($service_category))
                    @foreach ($service_category as $key => $data)
                        <li class="nav-item">
                            <a href="#{{ $data->slug }}"
                                class="nav-link {{ $key == 0 ? 'active' : '' }} d-flex justify-content-between align-items-center"
                                id="test">{{ $data->title }} <i class="fa fa-caret-right "
                                    aria-hidden="true"></i></a>
                        </li>
                    @endforeach
                @endif
            </ul>

            <div class="tab-content">
                @if (isset($service_category))
                    @foreach ($service_category as $key => $data)
                        <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $data->slug }}">
                            @foreach ($data->categories as $service)
                                <div class=" s_cont ">
                                    <h6 class="insleft_title"><i class="fa fa-book"
                                            aria-hidden="true"></i>{{ $service->title }}</h6>
                                    <p class="insleft_para pb-0 mb-0">{!! $service->content !!}</p>
                                    <div class="insbtn">
                                        <div class="dbtn"><span class="tablinks serv_view"
                                                onclick="openCity(event, 'Detail' )">Details</span></div>
                                        <div class="bbtn btn-servicemodal book" data-id="{{ $service->id }}">Book
                                            Services</div>
                                    </div>
                                </div>
                                <hr class="s_bdr ">

                                <hr class="s_bdr">
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>
{{-- menu end --}}
<div id="London" class="tabcontent">
