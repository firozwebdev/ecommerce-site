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
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

                    <!-- edit profile  toggle  start-->
                    <div class="card-box" >

                        <div class="tab-content">

                            <h5 style="text-align:center;" class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Add Your Profile Info</h5>
                            </br>
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                            {!! Form::open(['url' => route('admin.seller-profiles.store'),'method'=>'Post', 'enctype'=>"multipart/form-data"]) !!}
                            <input type="hidden" value="{{Auth::guard('admin')->user()->id}}" name="seller_id" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname"> Name</label>
                                        <input type="text" class="form-control" id="firstname" name="name" value="{{Auth::guard('admin')->user()->name}}" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Email</label>
                                        <input type="email" class="form-control" name="email" value="" id="lastname" placeholder="Enter last name">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="useremail">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" value="" id="useremail" placeholder="Enter Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label> Add Avatar</label>
                                        <div class="input-group">
                                            <input type="file" class="dropify" name="avatar" data-height="80" />
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Shop Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyname"> Shop Name</label>
                                        <input type="text" class="form-control" name="address" value="" id="companyname" placeholder="Enter shop name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label> Add Shop Image</label>
                                        <div class="input-group">
                                            <input type="file" class="dropify" name="shop_iamge" data-height="80" />
                                        </div>
                                    </div>
                                </div>

                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                    </div>
                    <!-- end tab-content -->
                    <!-- end row -->

                    <!-- end settings content-->

                </div>
                <!-- end tab-content -->

            </div>
            <!-- end col-->

        </div>
        <!-- end col -->
    </div>
    <!-- end row-->

</div>
<!-- container -->

</div>
<!-- content -->
@endsection
