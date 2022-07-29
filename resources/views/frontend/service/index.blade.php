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
                                        <div class="dbtn"><a href="">Detais</a></div>

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


    <!-- services modal start  -->
    <div class="modal bookModal" id="modal bookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Welcome Please Enter the Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" name="enq" action="{{ route('booking.store') }}">
                        @csrf
                        <input type="hidden" class="service_id" name="service_id">
                        <div class="cdetails ">
                            <h3 class="pb-2">Company Details</h3>
                            <input type="text" required name="company_name" class="pname" placeholder="Name">
                            <input type="text" name="company_address" class="pname my-4" placeholder="Address">


                        </div>
                        <div class="pdetails ">
                            <h3 class="pt-3 pb-2">Personal Details</h3>
                            <input type="text" required name="name" class="pname" placeholder="Name">
                            <input type="email" required name="email" class="pname my-4" placeholder="Email Id">
                            <div class="lpname_0">

                                <input type="number" name="phone" class="pname lpname" placeholder="Phone Number">



                                <input type="number" required name="mobile" class="pname  lpname"
                                    placeholder="Mobile Number">

                            </div>
                        </div>
                        <div class="book_1 pt-5">
                            <button type="submit" class="nbook">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- services modal end  -->
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
