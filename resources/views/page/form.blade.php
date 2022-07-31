@section('page-specific-styles')
    <link href="{{ asset('css/dropify.min.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
          href="{{ asset('resources/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862')}}"/>
@endsection
@csrf
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-underline">
                <div class="card-head">
                    <header class="ml-3 mt-2">{!! $header !!}</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label for="title" class="col-form-label pt-0">Page Name</label>
                                <div class="">
                                    <input class="form-control" type="text" required name="title" value="{{ old('title', isset($page->title) ? $page->title : '') }}" placeholder="Enter Your Name">
                                </div>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('title') }}</span>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label for="title" class="col-form-label pt-0">Page URL</label>
                                <div class="">
                                    <input class="form-control" type="text"  name="url" value="{{ old('url', isset($page->url) ? $page->url : '') }}" placeholder="Enter Your Name">
                                </div>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('url') }}</span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <strong>Meta Description</strong>
                                <textarea name="meta_description" id=""
                                          class="ckeditor">{{old('meta_description',isset($page->meta_description)?$page->meta_description : '')}}</textarea>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea name="content" id=""
                                          class="ckeditor">{{old('content',isset($page->content)?$page->content : '')}}</textarea>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" >
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group d-flex">
                            <span class="pl-1">Status</span>
                            <input type="checkbox" id="switch1" switch="none" name="status" {{ old('status', isset($page->status) ? $page->status : '')=='active' ? 'checked':'' }}/>
                            <label for="switch1" class="ml-auto" data-on-label="On" data-off-label="Off"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Image</label>
                        @if(isset($page) && $page->image)
                            <input type="file" name="image" class="dropify" id="input-file-events"
                                   data-default-file="{{ asset($page->image_path)}}"/>

                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                        <input type="hidden" name="removeimage" id="removeimage" value=""/>
                        <span id="textarea1-error" class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                </div>
                <hr>
                <div class="row mt-2 justify-content-center">
                    <div class="form-group">
                        <div>
                            <a class="btn btn-light waves-effect ml-1" href="{{ route('page.index') }}">
                                <i class="md md-arrow-back"></i>
                                Back
                            </a>
                            <input type="submit" name="pageSubmit" class="btn btn-danger waves-effect waves-light" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@section('page-specific-scripts')
    <script src="{{asset('resources/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropify').dropify();
        });
    </script>
@endsection
