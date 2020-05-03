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
                        <h4 class="page-title"></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        @include('admin.partials.formValidationError')

                        {!! Form::open(['url' => route('admin.payment-methods.update',$pay_method->id),'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}

                        <div class="form-group">
                            <label for="fullname"> Name * :</label>
                            <input type="text" class="form-control" name="name" value="{{$pay_method->name}}" required="" placeholder=" Payment Method" value="{{ old('title') }}">
                        </div>



                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="status">
                                <option value="1" {{ $pay_method->status == 1?"selected":""}}> Published </option>
                                <option value="0" {{ $pay_method->status == 0?"selected":""}}> Unpublished </option>
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

            @endsection
