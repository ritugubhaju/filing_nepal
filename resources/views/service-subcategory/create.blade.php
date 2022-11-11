@extends('layouts.admin.admin')

@section('title', 'Create a Subcategory')

@section('content')
    <section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('service-subcategory.form',['header' => 'Create a subCategory'])
            </form>
        </div>
    </section>
@endsection

