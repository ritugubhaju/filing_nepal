@extends ('frontend.layouts.app')
@section('content')
    <!-- START SECTION COURSE DETAIL -->
    <section>
        <div class="container">
            <div class="row">
                @if ($services)
                    <div class="col-lg-8">
                        <div class="single_course">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab1">
                                    <div class="border radius_all_5 tab_box">
                                        @foreach ($services as $data)
                                            <p>{{ $data->title }}</p>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                @if ($service_categories)
                    <div class="col-lg-8">
                        <div class="single_course">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab1">
                                    <div class="border radius_all_5 tab_box">
                                        @foreach ($service_categories as $key => $data)
                                        @foreach ($data->categories as $service)
                                            <div class=" s_cont ">
                                                <h6 class="insleft_title"><i class="fa fa-book"
                                                        aria-hidden="true"></i>{{ $service->title }}
                                                </h6>
                                                <p class="insleft_para pb-0 mb-0">{!! $service->content !!}</p>
                                                <div class="insbtn">
                                                    <div class="dbtn"><a
                                                            href="{{ route('services.detail', $service->slug) }}">Details</a>
                                                    </div>

                                                    <button type="button" class="btn-servicemodal book"
                                                        data-id="{{ $service->id }}">
                                                        Book Services
                                                    </button>

                                                </div>
                                            </div>
                                        @endforeach
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div>
        </div>
    </section>
    <!-- END SECTION COURSE DETAIL -->
    
@endsection
