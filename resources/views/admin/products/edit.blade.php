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
                                <li class="breadcrumb-item"><a href="{{route('admin.products.create')}}">Create Category</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit  Product </h4>
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
                                    General Information</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#price" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    Price</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#inventory" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Inventory</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#option" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    Attributes</a>
                                <a class="nav-link mb-2" data-toggle="tab" href="#image" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    Additional Information</a>
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
                                                        {!! Form::open(['url' => route('admin.products.update',$product->id),'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}

                                                        <div class="tab-content">
                                                            <div id="general" class="tab-pane fade active show">
                                                                <div class="form-group">
                                                                    <label class="control-label">Product Name</label>
                                                                    <input class="form-control form-white" value="{{$product->product_name}}" placeholder="Enter name" type="text" name="product_name" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Product Title</label>
                                                                    <input class="form-control form-white" value="{{$product->product_title}}" placeholder="Enter name" type="text" name="product_title" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Choose Category</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category_id">
                                                                        @foreach($sub_categories as $category)
                                                                        <option value="{{$category->id}}" {{$category->id==$product->category_id?"selected":""}} >{{$category->name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div id="price" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label">Product Price</label>
                                                                    <input class="form-control form-white" value="{{$product->product_price}}" placeholder="Enter name" type="number" name="product_price" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Special Price</label>
                                                                    <input class="form-control form-white" value="{{$product->special_price}}" placeholder="Enter name" type="number" name="special_price" />
                                                                </div>

                                                                  <div class="form-group">
                                                                      <label class="control-label"> Discount</label>
                                                                      <input class="form-control form-white" value="{{$product->discount}}" placeholder="Enter Discount Price" type="number" name="discount" />
                                                                  </div>


                                                                <div class="form-group">
                                                                    <label for="inputPassword4" class="col-form-label">Special Price Start</label>
                                                                    <input type="text" value="{{$product->start_date}}" class="form-control" name="start_date" data-provide="datepicker" data-date-format="yyyy-mm-dd">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputPassword4" class="col-form-label">Special Price End</label>
                                                                    <input type="text" value="{{$product->end_date}}" name="end_date" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd">

                                                                </div>

                                                            </div>

                                                            <div id="inventory" class="tab-pane fade">
                                                                <div class="form-group">
                                                                    <label class="control-label"> SKU</label>
                                                                    <input class="form-control form-white" value="{{$product->sku}}" placeholder="Enter name" type="text" name="sku" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Stock Availability</label>
                                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="stock">
                                                                        <option value="1" {{ $product->status == 1?"selected":""}}> In Stock </option>
                                                                        <option value="0" {{ $product->status == 0?"selected":""}}> Out Stock </option>

                                                                    </select>
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
                                                                                <?php
                                                                                  $avail_size = json_decode($product->size,true);
                                                                                 ?>
                                                                                    @foreach($avail_size as $data)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input type="text" name="size[]" value="{{$data}}" class="form-control" multiple>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="add-new-row-btn-wrappw mt-2">
                                                                        <button type="button" class="btn btn-secondary waves-effect add-new-row-btn-1">Add New Row</button>
                                                                    </div>

                                                                </div>
                                                                <div class="from-group" style="margin-top:10px;s">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-borderless dynamic-table-2 text-center mb-0">
                                                                            <thead class="thead-light">
                                                                                <tr>

                                                                                    <th class="text-left">Product Color</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                  $avail_color = json_decode($product->color,true);
                                                                                 ?>
                                                                                    @foreach($avail_color as $data)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input type="text" name="color[]" value="{{$data}}" class="form-control" multiple>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="add-new-row-btn-wrappw mt-2">
                                                                        <button type="button" class="btn btn-secondary waves-effect add-new-row-btn-2">Add New Row</button>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div id="image" class="tab-pane fade">
                                                                <!-- <div class="form-group ">
                                                                    <label for="example-fileinput">Base Images</label>
                                                                    <input type="file" id="example-fileinput" name="base_image" class="form-control-file" multiple>
                                                                </div> -->
                                                                <div class="form-group">
                                                                    <label for="example-fileinput">Mulitple Images</label>
                                                                    <input type="file" id="example-fileinput" name="multiple[]" class="form-control-file" multiple>{{$product->multiple}}
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="message">Description :</label>
                                                                    <textarea id="summernote-editor" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="" data-parsley-validation-threshold="10">

                                                                        {!!($product->description)!!}
                                                                    </textarea>

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
                            </from>
                        </div>
                    </div>

                </div>
            </div>

            <script src="{{asset('admin/assets/js/dynamic-table.js')}}"></script>

            <!-- Summernote js -->
            <script src="{{asset('admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>

            <!-- Init js -->
            <script src="{{asset('admin/assets/js/pages/form-summernote.init.js')}}"></script>
            <!-- datepicker -->

            <script src="{{asset('admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

            <!-- end script -->
            @endsection
