@extends ('frontend.layouts.app')
@section('content')
    <!-- START SECTION COURSE DETAIL -->
    <section>
        <div class="container">
            <div class="row">
                @if ($services)
                    <div class="col-lg-8">
                        <div class="single_course">
                            <div class="course_img">
                                <a href="#">
                                    <img src="{{ asset($services->image_path) }}" alt="course_img_big">
                                </a>

                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab1">
                                    <div class="border radius_all_5 tab_box">
                                        <p>{!! $services->content !!}</p>
                                    </div>
                                </div>

                            </div>

                            <button type="button" class="btn-servicemodal book" data-id="{{ $services->id }}">
                                Book Services
                            </button>
                        </div>
                    </div>

            </div>
            @endif

        </div>
        </div>
    </section>
    <!-- END SECTION COURSE DETAIL -->
@endsection
