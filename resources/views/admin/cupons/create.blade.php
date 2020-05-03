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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Yinimini</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.categories.create')}}">Create Category</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add  Cupons </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <!-- Right Sidebar -->
                <div class="col-12">
                    <div class="card-box">
                        <!-- Left sidebar -->
                        <div class="inbox-leftbar" style="">

                            <div class="nav flex-column nav-pills nav-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show mb-2" data-toggle="tab" href="#general" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    Advance Information</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#price" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    General Information</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#inventory" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Inventory</a>

                            </div>

                        </div>

                        <div class="inbox-rightbar">

                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                      {!! Form::open(['url' => route('admin.coupons.store'),'method'=>'post']) !!}

                                                        <div class="tab-content">
                                                            <div id="general" class="tab-pane fade active show">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Name</label>
                                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="name" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Code</label>
                                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="code" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Choose Category</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category">
                                                                        @foreach($sub_categories as $data)
                                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Choose Product</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="product">
                                                                        @foreach($products as $product)
                                                                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>


                                                            </div>

                                                            <div id="price" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label">Discount type</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="type">

                                                                        <option value="1">Fixed</option>
                                                                        <option value="0">Percentage</option>


                                                                    </select>
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Cupon value</label>
                                                                    <input class="form-control form-white" placeholder="Enter name" type="number" name="value" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Shiping</label>
                                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="shiping" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="inputPassword4" class="col-form-label"> Coupon Start Date</label>
                                                                    <input type="text" class="form-control" name="start_date" data-provide="datepicker">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputPassword4"  class="col-form-label">Coupon Start End</label>
                                                                    <input type="text" name="end_date" class="form-control" data-provide="datepicker">

                                                                </div>

                                                            </div>

                                                            <div id="inventory" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Cupon Limit</label>
                                                                    <input class="form-control form-white" placeholder="Enter name" type="number" name="coupons_limit" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Customer Limit</label>
                                                                    <input class="form-control form-white" placeholder="Enter name" type="number" name="customer_limit" />

                                                                </div>

                                                            </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                      </div>

                        <div class="row">

                            <!-- Right Sidebar -->
                            <div class="col-12">

                                <div class="text-left pt-2">
                                    <button style="width:220px;" type="submit" name="btn" class="btn btn-success btn-md">submit</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>

            <!-- Script on Create page -->

            <!-- Summernote js -->
            <script src="{{asset('admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>

            <!-- Init js -->
            <script src="{{asset('admin/assets/js/pages/form-summernote.init.js')}}"></script>
            <!-- datepicker -->

            <script src="{{asset('admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
           <!-- end script -->
            @endsection
