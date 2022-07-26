@extends('layouts.admin.admin')

@section('title', 'Create a Client')

@section('content')
    <section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('client.form',['header' => 'Create a client'])
            </form>
        </div>
    </section>
@endsection

