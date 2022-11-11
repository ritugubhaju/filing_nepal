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
                            <div class="form-group">
                                <label for="category_id" class="col-form-label pt-0">Category</label>
                                <select name="category_id" class="form-control category_id" required id="">
                                <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if(isset($category_search)) @if($category_search->id == $category->id) selected @endif @endif>{{$category->title}}</option>
                                        @endforeach
                                </select>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('category_id') }}</span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subcategory_id" class="col-form-label pt-0">Sub Category</label>
                                <select name="subcategory_id" class="form-control subcategory_class" required id="">
                                <option value="">Select Sub Category</option>
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}" @if(isset($subcategory_search)) @if($subcategory_search->id == $subcategory->id) selected @endif @endif>{{$subcategory->title}}</option>
                                        @endforeach
                                </select>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label for="title" class="col-form-label pt-0">Service Name</label>
                                <div class="">
                                    <input class="form-control" type="text" required name="title" value="{{ old('title', isset($service->title) ? $service->title : '') }}" placeholder="Enter Your Name">
                                </div>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('title') }}</span>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label for="price" class="col-form-label pt-0">Service Price</label>
                                <div class="">
                                    <input class="form-control" type="number"  name="price" value="{{ old('price', isset($service->price) ? $service->price : '') }}" placeholder="Enter Your Service Price">
                                </div>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('price') }}</span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea name="content" id=""
                                          class="ckeditor">{{old('content',isset($service->content)?$service->content : '')}}</textarea>

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
                            <input type="checkbox" id="switch1" switch="none" name="status" {{ old('status', isset($service->status) ? $service->status : '')=='active' ? 'checked':'' }}/>
                            <label for="switch1" class="ml-auto" data-on-label="On" data-off-label="Off"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Image</label>
                        @if(isset($service) && $service->image)
                            <input type="file" name="image" class="dropify" id="input-file-events"
                                   data-default-file="{{ asset($service->image_path)}}"/>

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
                            <a class="btn btn-light waves-effect ml-1" href="{{ route('service.index') }}">
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

    <script>
         $('.category_id').change(function(e){
            e.preventDefault();
            var category_id = $(this).val();
            var body;
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('service.servicecategoryajax')); ?>',
                data: {
                    _token: $("meta[name='csrf-token']").attr('content'),
                    category_id: category_id,
                },
                success:function(response){
                    if(typeof(response) != "object"){
                        response = JSON.parse(response);
                    }
                    console.log(response.data);
                    if(response.data){
                        $.each(response.data, function(key, subcategory){
                            body += "<option value='"+subcategory['id']+"'>"+subcategory['title']+"</option>";
                        });
                        $('.subcategory_class').html(body);
                    }
                }
            })
        })
    </script>
@endsection
