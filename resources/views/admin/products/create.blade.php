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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.products.create')}}">Create Product</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add New Porduct</h4>
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
                                <a class="nav-link active show mb-2" data-toggle="tab" href="#general" role="tab" aria-controls="v-pills-home" aria-selected="true">Basic Information</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#price" role="tab" aria-controls="v-pills-profile" aria-selected="false">Price</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#inventory" role="tab" aria-controls="v-pills-messages" aria-selected="false">Inventory</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#option" role="tab" aria-controls="v-pills-settings" aria-selected="false">Attributes </a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#image" role="tab" aria-controls="v-pills-settings" aria-selected="false">Advance Information</a>
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
                                                        @if ($errors->any())
                                                          <div class="alert alert-danger">
                                                              <ul>
                                                                  @foreach ($errors->all() as $error)
                                                                      <li>{{ $error }}</li>
                                                                  @endforeach
                                                              </ul>
                                                          </div>
                                                        @endif

                                                        <!-- Admin Product Add route -->
                                                        @if(Auth::user()->hasRole(['admin']))
                                                        {!! Form::open(['url' => route('admin.products.store'),'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}
                                                        @endif
                                                    <!-- Seller Product Add route -->
                                                        @if(Auth::user()->hasRole(['seller']))
                                                        {!! Form::open(['url' => route('admin.seller_product'),'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}
                                                        <input type="hidden" name="seller_id" value="{{Auth::guard('admin')->user()->id}}">
                                                        @endif

                                                        <div class="tab-content">
                                                            <div id="general" class="tab-pane fade active show">
                                                                <div class="form-group">
                                                                    <label class="control-label">Product Name</label>
                                                                    <input class="form-control form-white" placeholder="Enter product name" type="text" name="name" value="{{ old('name') }}"/>
                                                                    @if ($errors->has('name')) <p class="text-danger">{{ $errors->first('name') }}</p> @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Product Slug</label>
                                                                    <input class="form-control form-white" placeholder="Enter product slug" type="text" name="title" value="{{ old('title') }}"/>
                                                                    @if ($errors->has('title')) <p class="text-danger">{{ $errors->first('title') }}</p> @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Choose Category</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose a category..." name="sub_category_id">
                                                                        @foreach($sub_categories as $data)
                                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                    @if ($errors->has('sub_category_id')) <p class="text-danger">{{ $errors->first('sub_category_id') }}</p> @endif
                                                                </div>

                                                            </div>

                                                            <div id="price" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label">Product Price</label>
                                                                    <input class="form-control form-white" placeholder="Enter product price" type="number" name="product_price" value="{{ old('product_price') }}"/>
                                                                    @if ($errors->has('product_price')) <p class="text-danger">{{ $errors->first('product_price') }}</p> @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Special Price</label>
                                                                    <input class="form-control form-white" placeholder="Enter product special price" type="number" name="special_price" value="{{ old('special_price') }}"/>
                                                                    @if ($errors->has('special_price')) <p class="text-danger">{{ $errors->first('special_price') }}</p> @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Discount</label>
                                                                    <input class="form-control form-white" placeholder="Enter Discount Price" type="number" name="discount" value="{{ old('discount') }}"/>
                                                                    @if ($errors->has('discount')) <p class="text-danger">{{ $errors->first('discount') }}</p> @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="inputPassword4" class="col-form-label">Special Price Start</label>
                                                                    <input type="text" class="form-control" name="start_date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  value="{{ old('start_date') }}">

                                                                    @if ($errors->has('datepicker')) <p class="text-danger">{{ $errors->first('datepicker') }}</p> @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputPassword4" class="col-form-label">Special Price End</label>
                                                                    <input type="text" name="end_date" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" value="{{ old('end_date') }}">

                                                                    @if ($errors->has('end_date')) <p class="text-danger">{{ $errors->first('end_date') }}</p> @endif
                                                                </div>

                                                            </div>

                                                            <div id="inventory" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Quantity</label>
                                                                    <input class="form-control form-white" placeholder="Enter product quantity" type="number" name="product_quantity" value="{{ old('product_quantity') }}"/>
                                                                    @if ($errors->has('product_quantity')) <p class="text-danger">{{ $errors->first('product_quantity') }}</p> @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label"> SKU</label>
                                                                    <input class="form-control form-white" placeholder="Enter product SKU" type="text" name="sku"  value="{{ old('sku') }}"/>
                                                                    @if ($errors->has('sku')) <p class="text-danger">{{ $errors->first('sku') }}</p> @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Stock Availability</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose availability..." name="stock" value="{{ old('stock') }}">
                                                                        <option value="1">In Stock</option>
                                                                        <option value="0">Out of Stock</option>

                                                                    </select>
                                                                    @if ($errors->has('stock')) <p class="text-danger">{{ $errors->first('stock') }}</p> @endif
                                                                </div>

                                                            </div>
                                                            <div id="option" class="tab-pane fade">

                                                                <div class="from-group">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-borderless dynamic-table-1 text-center mb-0">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th class="text-left">Product Size</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <input type="text" name="size[]" class="form-control" multiple>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="add-new-row-btn-wrappw mt-2">
                                                                        <button type="button" class="btn btn-secondary waves-effect add-new-row-btn-1">Add New Size</button>
                                                                    </div>
                                                                </div>
                                                                <div class="from-group" style="margin-top:10px;">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-borderless dynamic-table-2 text-center mb-0">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th class="text-left">Product Color</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <input type="text" name="color[]" class="form-control" multiple>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="add-new-row-btn-wrappw mt-2">
                                                                        <button type="button" class="btn btn-secondary waves-effect add-new-row-btn-2">Add New Color</button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div id="image" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Product Video Link <small>(youtube)</small> </label>
                                                                    <input class="form-control form-white" placeholder="https://youtu.be/XXXXXXX" type="text" name="video_link"  value="{{ old('video_link') }}"/>
                                                                    @if ($errors->has('video_link')) <p class="text-danger">{{ $errors->first('video_link') }}</p> @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="example-fileinput">Mulitple Images</label>
                                                                    <input type="file" id="example-fileinput" name="multiple[]" class="form-control-file" multiple>
                                                                    @if ($errors->has('multiple')) <p class="text-danger">{{ $errors->first('multiple') }}</p> @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="message">Description :</label>
                                                                    <textarea id="summernote-editor" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                                              data-parsley-maxlength="100" data-parsley-minlength-message=""
                                                                              data-parsley-validation-threshold="10">{{ old('description') }}</textarea>
                                                                    @if ($errors->has('description')) <p class="text-danger">{{ $errors->first('description') }}</p> @endif

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
            <div class="clearfix"></div>

        </div>

        <!-- Script on Create page -->
        <script src="{{asset('admin/assets/js/dynamic-table.js')}}"></script>

        <!-- Summernote js -->
        <script src="{{asset('admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{asset('admin/assets/js/pages/form-summernote.init.js')}}"></script>
        <!-- datepicker -->

        <script src="{{asset('admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <!-- end script -->
        @endsection
