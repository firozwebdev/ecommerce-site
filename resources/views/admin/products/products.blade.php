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
                        <div class="inbox-leftbar" style="margin-top:145px;">

                            <a href="{{route('admin.menus.index')}}" class="btn btn-danger btn-block waves-effect waves-light">Manage Product</a>

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
                                                        <a href="#" data-toggle="modal" data-target="#general" class="btn btn-lg font-16 btn-danger btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> General Information
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#price" class="btn btn-lg font-16 btn-primary btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> Price
                                                        </a>

                                                        <a href="#" data-toggle="modal" data-target="#inventory" class="btn btn-lg font-16 btn-danger btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> Inventory

                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="" class="btn btn-lg font-16 btn-danger btn-block  ">
                                                            <i class="mdi mdi-plus-circle-outline"></i> Option
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

                                    <!-- Modal general -->
                                    <div class="modal fade" id="general" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add a General Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <p class="text-muted font-13">
                                                                    </p>

                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputEmail4" class="col-form-label">Product Name</label>
                                                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Product Name">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Product Title</label>
                                                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Product Name">
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Date Picker</label>
                                                                                <input type="text" class="form-control" data-provide="datepicker">
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputState" class="col-form-label">Category</label>
                                                                                <select id="inputState" class="form-control">
                                                                                    <option>Choose</option>

                                                                                </select>
                                                                            </div>
                                                                            <div class="text-right pt-2">
                                                                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary ml-1   save-category">Save</button>
                                                                            </div>

                                                                        </div>
                                                                        <!-- end card-body -->
                                                                </div>
                                                                <!-- end card-->
                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End general -->

                                    <!-- Price -->
                                    <div class="modal fade" id="price" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Product Price </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <p class="text-muted font-13">
                                                                    </p>

                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputEmail4" class="col-form-label">Product Price</label>
                                                                                <input type="number" class="form-control" id="inputEmail4" placeholder="Product Name">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Special Price</label>
                                                                                <input type="number" class="form-control" id="inputEmail4" placeholder="Product Name">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Special Price Start</label>
                                                                                <input type="text" class="form-control" data-provide="datepicker">
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Special Price End</label>
                                                                                <input type="text" class="form-control" data-provide="datepicker">
                                                                            </div>

                                                                            <div class="text-right pt-2">
                                                                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary ml-1   save-category">Save</button>
                                                                            </div>
                                                                          </form>

                                                                        </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                    <!-- end price -->

                                    <!-- inventory -->
                                    <div class="modal fade" id="price" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Product Price </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <p class="text-muted font-13">
                                                                    </p>

                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputEmail4" class="col-form-label">Product Price</label>
                                                                                <input type="number" class="form-control" id="inputEmail4" placeholder="Product Name">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Special Price</label>
                                                                                <input type="number" class="form-control" id="inputEmail4" placeholder="Product Name">
                                                                            </div>
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Special Price Start</label>
                                                                                <input type="text" class="form-control" data-provide="datepicker">
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputPassword4" class="col-form-label">Special Price End</label>
                                                                                <input type="text" class="form-control" data-provide="datepicker">
                                                                            </div>

                                                                            <div class="text-right pt-2">
                                                                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary ml-1   save-category">Save</button>
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

                                    <!-- Inventory -->

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
