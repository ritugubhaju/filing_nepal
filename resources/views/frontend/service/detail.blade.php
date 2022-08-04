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

    <div id="Detail" class="tabcontent ">
        <div id="Detail_ban">
          <div class="container">
            <div class="banner_content">

              <h2>Details</h2>

              <p><span  class=" tablinks serv_view" onclick="openCity(event, 'London')">Home </span>>Details</p>

            </div>
            <!-- <div class="banner_arrow">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </div> -->
          </div>
        </div>
        <div class="container py-5">
          <div class="row gx-5">
            <div class="col-lg-5">
              <img class="img-fluid" src="https://img.freepik.com/free-photo/cheerful-attractive-young-woman-with-black-hair-walking_1262-19104.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="col-lg-7">
              <h1 class="rtitle_0 text-start">Lorem ipsum dolor sit amet</h1>
              <p class="d_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem molestias totam omnis iste explicabo iure porro consequatur, a non quod odio architecto natus eveniet cupiditate praesentium quas veniam. Quo atque accusamus commodi ab, quasi sit tempore odio aspernatur modi perspiciatis?</p>
            <div class="rsubmit ">
              <button class="rsubmit_0 " type="submit">Book now</button>

            </div>
            </div>
          </div>
        </div>
      </div>

@endsection
