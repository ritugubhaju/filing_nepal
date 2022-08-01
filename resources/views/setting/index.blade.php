@extends('layouts.admin.admin')

@section('title', 'Setting')

@section('content')
    <section>
        {{ Form::open(['route'=>'setting.update','class'=>'form form-validate','method'=>'PUT','files'=>true,'novalidate']) }}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <header>General Settings</header>
                        <div class="tools">
                            <input type="submit" class="btn btn-primary" value="Save All">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>General</header>
                                </div>
                                <div class="card-body tab-content">
                                    <div class="tab-pane active" id="first2">

                                        <div class="form-group">
                                            {{ Form::label('setting[address]', 'Address') }}
                                            {{ Form::textarea('setting[address]', old('setting.address') ?: setting('address'), ['class'=>'form-control','rows'=>2,'required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('setting[registration]', 'Registration Number') }}
                                            {{ Form::textarea('setting[registration]', old('setting.registration') ?: setting('registration'), ['class'=>'form-control','rows'=>2,'required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('setting[footer]', 'Footer Description') }}
                                            {{ Form::textarea('setting[footer]', old('setting.footer') ?: setting('footer'), ['class'=>'form-control','rows'=>2,'required']) }}
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>Contacts</header>
                                </div>
                                <div class="card-body tab-content">
                                    <div class="tab-pane active" id="first3">
                                        <div class="form-group">
                                            {{ Form::label('setting[phone]', 'Phone') }}
                                            {{ Form::text('setting[phone]', old('setting.phone') ?: setting('phone'), ['class'=>'form-control','required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('setting[email]', 'email') }}
                                            {{ Form::text('setting[email]', old('setting.email') ?: setting('email'), ['class'=>'form-control','required']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('setting[fax]', 'fax') }}
                                            {{ Form::text('setting[fax]', old('setting.fax') ?: setting('fax'), ['class'=>'form-control','required']) }}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>Social Links</header>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        {{ Form::label('setting[facebook]', 'Facebook') }}
                                        {{ Form::textarea('setting[facebook]', old('setting.facebook') ?: setting('facebook'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('setting[whatsapp]', 'Whatsapp') }}
                                        {{ Form::textarea('setting[whatsapp]', old('setting.whatsapp') ?: setting('whatsapp'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('setting[twitter]', 'Twitter') }}
                                        {{ Form::textarea('setting[twitter]', old('setting.twitter') ?: setting('twitter'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('setting[youtube]', 'Youtube') }}
                                        {{ Form::textarea('setting[youtube]', old('setting.youtube') ?: setting('youtube'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        {{ Form::close() }}
    </section>
@stop

@push('styles')
    <link href="{{ asset('css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/libs/dropify/dropify.min.js') }}"></script>
@endpush
