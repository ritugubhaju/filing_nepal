@extends ('frontend.layouts.app')
@section('content')

<div>
    <div id="Detail_ban">
        <div class="container">
            <div class="banner_content">

                <h2>Details</h2>

                <p><span class=" tablinks serv_view" onclick="openCity(event, 'London')">Home  </span>>Details</p>

            </div>
            <!-- <div class="banner_arrow">
                                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                </div> -->
        </div>
    </div>
    <div class="container py-5">
        <!-- <div class="row gx-5"> -->
            <h2 class="text-center pb-4">{{$title}}</h2>
            @if ($service_categories)
            @foreach ($service_categories as $key => $data)
            @foreach ($data->categories as $service)
            <!-- <div class="col-lg-5">
                                <img class="img-fluid" src="{{ asset($service->image_path) }}" alt="">
                            </div> -->
            <!-- <div class="col-lg-7">
                                <h1 class="rtitle_0 text-start">{{ $service->title }}</h1>
                                <p class="d_para">{!! $service->content !!}</p>
                                <div class="rsubmit ">
                                    {{-- <button class="rsubmit_0 " type="submit">Book now</button> --}}
                                    <button type="button" class="rsubmit_0 btn-servicemodal book"
                                        data-id="{{ $service->id }}">
                                        Book Now
                                    </button>
                                </div> -->
            <table class="service-cat-table">

                <tbody>
                    <tr >

                        <th scope="row" class="text-start rtitle-1 ps-2"> {{ $service->title }}</th>
                        <td class=" py-2 ">

                            <button type="button" class="rsubmit_2 btn-servicemodal book" data-id="{{ $service->id }}">
                                Book Now
                            </button>
                        </td>

                    </tr>


                </tbody>
            </table>
            <!-- </div> -->
            @endforeach
            @endforeach
            @endif
        <!-- </div> -->
    </div>

    <div class="container py-5">
        <div class="row gx-5">
            @if ($services)
            @foreach ($services as $data)
            <div class="col-lg-5">
                <img class="img-fluid" src="{{ asset($data->image_path) }}" alt="">
            </div>
            <div class="col-lg-7">
                <h1 class="rtitle_0 text-start">{{ $data->title }}</h1>
                <p class="d_para">{!! $data->content !!}</p>
                <div class="rsubmit ">
                    {{-- <button class="rsubmit_0 " type="submit">Book now</button> --}}
                    <button type="button" class="rsubmit_0 btn-servicemodal book" data-id="{{ $data->id }}">
                        Book Now
                    </button>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
