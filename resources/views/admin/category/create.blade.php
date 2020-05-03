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
                        <h4 class="page-title">Content Of Categories</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <!-- Right Sidebar -->
                <div class="col-12">
                    <div class="card-box">
                        <!-- Left sidebar -->
                        <div class="inbox-leftbar" style="margin-top:50px;">

                            <a href="{{route('admin.menus.index')}}" class="btn btn-danger btn-block waves-effect waves-light">Manage Menu</a>
                            <a href="{{route('admin.categories.index')}}" class="btn btn-primary btn-block waves-effect waves-light">Manage Category</a>
                            <a href="{{route('admin.sub-categories.index')}}" class="btn btn-danger btn-block waves-effect waves-light">Manage Sub-Category</a>

                        </div>
                        <!-- End Left sidebar -->

                        <div class="inbox-rightbar">

                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="#" data-toggle="modal" data-target="#add-menu" class="btn btn-lg font-16 btn-danger btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> Create Menu
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg font-16 btn-primary btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> Create Category
                                                        </a>

                                                        <a href="#" data-toggle="modal" data-target="#add-SubCategory" class="btn btn-lg font-16 btn-danger btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> Create SubCategory
                                                        </a>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add New Event MODAL -->
                                    <div class="modal fade" id="event-modal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add New Event</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">
                                                </div>
                                                <div class="text-right p-3">
                                                    <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success save-event  ">Create event</button>
                                                    <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal-->

                                    <!-- Modal Add Category -->
                                    <div class="modal fade" id="add-category" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add a category</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">
                                                    {!! Form::open(['url' => route('admin.categories.store'),'method'=>'post','enctype'=>"multipart/form-data"]) !!}

                                                    <div class="form-group">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="name" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Choose Menu</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="menu_id">
                                                            @foreach($menus as $menu)
                                                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message">Description :</label>
                                                        <textarea id="message" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="" data-parsley-validation-threshold="10">
                                                        </textarea>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-fileinput">Category Icon</label>
                                                        <input type="file" id="example-fileinput" name="category_icon" class="form-control-file">
                                                    </div>

                                                    <div class="text-right pt-2">
                                                        <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary ml-1   save-category">Save</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu -->
                                    <div class="modal fade" id="add-menu" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add A Menu </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">
                                                    {!! Form::open(['url' => route('admin.menus.store'),'method'=>'post','enctype'=>"multipart/form-data"]) !!}

                                                    <div class="form-group">
                                                        <label class="control-label">Menu Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="name" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message">Description :</label>
                                                        <textarea class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="" data-parsley-validation-threshold="10">
                                                        </textarea>

                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-fileinput">Menu Icon</label>
                                                        <input type="file" id="example-fileinput" name="menu_icon" class="form-control-file">
                                                    </div>

                                                    <div class="text-right pt-2">
                                                        <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary ml-1   save-category">Save</button>
                                                    </div>

                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- menu modal -->

                                    <!-- sub category modal -->
                                    <div class="modal fade" id="add-SubCategory" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Subcategory</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>

                                                <div class="modal-body p-3">
                                                    {!! Form::open(['url' => route('admin.sub-categories.store'),'method'=>'post','enctype'=>"multipart/form-data"]) !!}

                                                    <div class="form-group">
                                                        <label class="control-label"> Sub Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="name" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Choose Menu</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="menu_id">
                                                            @foreach($menus as $menu)
                                                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Choose Category </label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category_id">
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message">Description :</label>
                                                        <textarea id="message" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="" data-parsley-validation-threshold="10">
                                                        </textarea>

                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-fileinput">Su category Icon</label>
                                                        <input type="file" id="example-fileinput" name="icon" class="form-control-file">
                                                    </div>

                                                    <div class="text-right pt-2">
                                                        <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                        <button type="submit" name="sub" class="btn btn-primary ml-1   save-category">Save</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end sub category -->

                                </div>
                            </div>
                            <!-- end col-12 -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end .mt-4 -->

                    <!-- end row-->
                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
            <!-- end card-box -->

        </div>
        <!-- end Col -->
    </div>
    <!-- End row -->

</div>
<!-- container -->

</div>
<!-- content -->

@endsection
