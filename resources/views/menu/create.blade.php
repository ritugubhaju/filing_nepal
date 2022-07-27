@extends('layouts.admin.admin')

@section('title', 'Create a Menu')

@section('content')
    <section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('menu.form',['header' => 'Create a Menu'])
            </form>
        </div>
    </section>
@endsection

