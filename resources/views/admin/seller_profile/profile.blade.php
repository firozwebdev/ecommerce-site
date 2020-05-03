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
            @foreach($v_profile as $data)

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card-box text-center">
                        <img style="height:200px;width:200px;" src="{{asset('uploads/documents/Sellerimages/'.$data->avatar)}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                        <h4 class="mb-0"></h4>
                        <p class="text-muted">Seller</p>

                        </br>
                        <div class="text-center mt-3">
                            <h4 class="font-13 text-uppercase">About Me :</h4>
                            <p class="text-muted font-13 mb-3">
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"> Mr.{{$data->name}}
                                                </span></p>


                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">(+88){{$data->phone_number}} </span></p>


                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{$data->email}}</span></p>

                        </div>
                        </br>

                        <button class="btn btn-success btn-rounded " type="button" data-toggle="collapse" data-target="#profile-edit" aria-expanded="false" aria-controls="profile-edit">
                            Edit Profile
                        </button>
                    </div>

                    <!-- edit profile  toggle  start-->
                    <div class="card-box collapse" id="profile-edit">

                        <div class="tab-content">

                            <h5 style="text-align:center;" class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Edit Profile Info</h5>
                            </br>
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                            {!! Form::open(['url' => route('admin.seller-profiles.update',$data->id),'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname"> Name</label>
                                        <input type="text" class="form-control" id="firstname" name="name" value="{{$data->name}}" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$data->email}}" id="lastname" placeholder="Enter last name">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="useremail">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{$data->phone_number}}" id="useremail" placeholder="Enter Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label> Add Avatar</label>
                                        <div class="input-group">
                                            <input type="file" class="dropify" value="{{$data->avatar}}" name="avatar" data-height="80" />
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Shop Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyname"> Shop Name</label>
                                        <input type="text" class="form-control" name="address" value="{{$data->address}}" id="companyname" placeholder="Enter company name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label> Add Shop Image</label>
                                        <div class="input-group">
                                            <input type="file" class="dropify" name="shop_iamge"  value="{{$data->shop_iamge}}" data-height="80" />
                                        </div>
                                    </div>
                                </div>

                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="text-right">
                                <button  type="button" class="btn btn-danger waves-effect waves-light mt-2 mr-2 profile-edit-close"><i class="mdi mdi-close"></i> Close</button>
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </div>
                        <!-- end settings content-->

                    </div>
                    <!-- end tab-content -->
                    <!-- end row -->

                    <!-- end settings content-->

                </div>
                <!-- end tab-content -->

            </div>
            @endforeach
          </form>

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
