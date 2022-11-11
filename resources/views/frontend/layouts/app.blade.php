<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Filling Nepal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Toastr-->
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    {{-- <img class="home_slider" src="{{ asset('images/filing nepal.png') }} " alt="..."> --}}

    @include('frontend.layouts.partials.header')

   @yield('content')

  @include('frontend.layouts.partials.footer')

  <button onclick="goToTopFunction()" id="goToTopBtn" title="Go to top" style="display: inline-block;"><i
      class="fa fa-arrow-up" aria-hidden="true"></i></button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script src="{{ asset('assets/js/go_top.js') }}"></script>
  <script src="{{ asset('assets/js/tab.js') }}"></script>
  <script src="{{ asset('assets/js/stab.js') }}"></script>
  <script src="{{ asset('assets/js/modal.js') }}"></script>

  <script src="{{ asset('assets/js/carousel.js') }}"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
  <script src="{{asset('js/sweetalert2.min.js')}}"></script>
  <script src="{{ asset('js/toastr/toastr.js') }}"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 @yield('page-specific-scripts')
 {!! Toastr::message() !!}

 <script>
    $(document).ready(function() {
        // Select2 Multiple
        $('#select2Multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>
 <!-- for tabs -->
 <script>
    document.addEventListener("DOMContentLoaded", function () {
      var tabList = [].slice.call(document.querySelectorAll("#myTab a"));
      tabList.forEach(function (tab) {
        var tabTrigger = new bootstrap.Tab(tab);

        tab.addEventListener("click", function (event) {
          event.preventDefault();
          tabTrigger.show();
        });
      });
    });
  </script>

<script>
    $('.btn-servicemodal').click(function(e) {
        e.preventDefault();
        let service_id = $(this).data('id');
        $('.service_id').val(service_id);
        $('.bookModal').modal('show')

    })
</script>




</body>

</html>
