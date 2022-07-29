@extends('layouts.admin.admin')

@section('page-specific-styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TableTools.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}"/>
@endsection

@section('title', 'Booking ')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <header class="text-capitalize pt-1"> Booking </header>

            </div>
            <div class="card mt-2 p-4">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Full Name</th>
                            <th>Company Name</th>
                            <th>Service</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                            @each('booking.table', $bookings, 'booking')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('page-specific-scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({});
        });
    </script>
@endsection


