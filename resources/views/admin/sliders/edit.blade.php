@extends('admin.master') @section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Menu</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        @include('admin.partials.formValidationError')

                        {!! Form::open(['url' => route('admin.sliders.update',$slider->id),'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}

                        <div class="form-group">
                            <label for="fullname"> Title * :</label>
                            <input type="text" class="form-control" name="title" id="fullname" value="{{$slider->title}}" required="">
                        </div>

                        <div class="form-group">
                            <label for="fullname">Slider Link <small>(optional)</small> :</label>
                            <input type="text" class="form-control" name="link" placeholder="http://www.example.com" value="{{$slider->link}}">
                        </div>

                        <div class="form-group mb-3 row">
                          <div class="col-md-6">
                            <label for="example-fileinput">Sliders Images</label>

                            <input type="file" id="slider-fileinput"  name="images" class="form-control-file" multiple>
                          </div>
                          <div class="col-md-6">
                            <img id="image_upload_preview" src="{{asset('/uploads/documents/sliderimages'.$slider->images)}}" width="100px" alt="">

                          </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="status">
                                <option value="1" {{ $slider->status == 1?"selected":""}}> Published </option>
                                <option value="0" {{ $slider->status == 0?"selected":""}}> Unpublished </option>
                            </select>
                        </div>

                        <div class="form-group mb-0">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                        {!! Form::close() !!}


                </div>
                    <!-- end card-box-->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <script>
            function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#image_upload_preview').attr('src', e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
            }

            $("#slider-fileinput").change(function () {
              readURL(this);
            });
            </script>

            @endsection
