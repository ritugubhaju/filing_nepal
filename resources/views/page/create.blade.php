@extends('layouts.admin.admin')

@section('title', 'Create a Page')

@section('content')
    <section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('page.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('page.form',['header' => 'Create a page'])
            </form>
        </div>
    </section>
@endsection

