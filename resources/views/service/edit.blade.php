@extends('layouts.admin.admin')

@section('page-specific-styles')
    <link href="{{ asset('css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
@endsection

@section('title',$service->title)

@section('content')
    <section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('service.update',$service->slug)}}"
                  method="POST" enctype="multipart/form-data" novalidate>
            @method('PUT')
            @include('service.form', ['header' => 'Edit service <span class="text-primary">('.($service->title).')</span>'])
            </form>
        </div>
    </section>

@endsection


@section('page-specific-scripts')
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropify').dropify();
        });
    </script>
@endsection

