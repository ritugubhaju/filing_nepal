@extends ('frontend.layouts.app')
@section('content')

    <!-- services start --- navbar services part  -->
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
                        <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $data->slug }}">
                            @foreach ($data->categories as $service)
                                <div class=" s_cont ">
                                    <h6 class="insleft_title"><i class="fa fa-book"
                                            aria-hidden="true"></i>{{ $service->title }}
                                    </h6>
                                    <p class="insleft_para pb-0 mb-0">{!! $service->content !!}</p>
                                    <div class="insbtn">
                                        <div class="dbtn"><a href="{{ route('services.detail', $service->slug) }}">Details</a></div>

                                        <button type="button" class="btn-servicemodal book" data-id="{{ $service->id }}">
                                            Book Services
                                        </button>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


   
@stop

@section('page-specific-scripts')

    <script>
        $('.btn-servicemodal').click(function(e) {
            e.preventDefault();
            let service_id = $(this).data('id');
            $('.service_id').val(service_id);
            $('.bookModal').modal('show')

        })
    </script>
@endsection
