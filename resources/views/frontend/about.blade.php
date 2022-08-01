@extends ('frontend.layouts.app')
@section('content')

    <!-- about  -->
    <section id="abt_more">
        <div class="container">
            <div class="row">
                @foreach ($about as $data)
                    <div class="col-lg-7 d-flex align-items-center">
                        <div>
                            <h2 class="rtitle_0">{{ $data->title }}</h2 class="rtitle_0">
                            <p class="abt_para">{!! $data->content !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end">
                        <div class="">
                            <img class="img-fluid" src="{{ asset($data->image_path) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="data">
        <div class="container">
            <div class="row">
                @foreach ($mission as $data)
                    <div class="col-lg-6   pe-5">
                        <div class="ab_vission">
                            <p class="d_title mb-0 pb-0  pb-3">{{ $data->title }}</p>
                            <p class="d_para">{!! $data->content !!}
                            </p>
                        </div>


                    </div>
                @endforeach

                @foreach ($vision as $data)
                    <div class="col-lg-6">
                        <div class="ab_vission ">

                            <p class="d_title mb-0 pb-0 pb-3">{{ $data->title }}</p>
                            <p class="d_para">{!! $data->content !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
