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

                        <div class="alert alert-warning d-none fade show">
                            <h4 class="mt-0">Oh snap!</h4>
                            <p class="mb-0">This form seems to be invalid :(</p>
                        </div>

                        <div class="alert alert-info d-none fade show">
                            <h4 class="mt-0">Yay!</h4>
                            <p class="mb-0">Everything seems to be ok :)</p>
                        </div>
                        {!! Form::open(['url' => route('admin.product_colors.store'),'method'=>'POST']) !!}

                        <div class="form-group">
                            <label for="fullname"> Name * :</label>
                            <input type="text" class="form-control" name="color_name" id="fullname" value="" required="">
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


                     <style>
                         table.table.dynamic-table thead tr th:last-child {
                             width: 2%;
                         }
                     </style>
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card-box">
                                 <h4 class="header-title">Add Product</h4>
                                 {!! Form::open(['url' => route('admin.product_options.store'),'method'=>'POST']) !!}


                                     <div class="table-responsive">
                                         <table class="table table-borderless dynamic-table text-center mb-0">
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
                                                             <input type="text" name="product_size[]" class="form-control">
                                                         </div>
                                                     </td>
                                                     
                                                         <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </div>

                                     <div class="add-new-row-btn-wrappw mt-2">
                                         <button type="button" class="btn btn-secondary waves-effect add-new-row-btn">Add New Row</button>
                                     </div>

                                     <div class="submit-btn-wrapper mt-3">
                                         <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                     </div>

                                     {!! Form::close() !!}

                             </div> <!-- end card-box -->
                         </div> <!-- end col -->
                     </div>




                 </div> <!-- container -->

             </div> <!-- content -->
             <script src="{{asset('admin/assets/js/dynamic-table.js')}}"></script>


            @endsection
