@extends('admin.master')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Yinimini</a></li>
                                <li class="breadcrumb-item"><a href="#">Create Category</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">All Sellers</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
              <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0">Register Seller Account</h4>
                        <p class="text-muted font-14 m-b-20">

                        </p>

                        <form action="{{route('admin.sellers.store')}}" method="post" role="form" autocomplete="off">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Name<span class="text-danger">*</span></label>
                                <div class="col-7">
                                    <input type="text" name="name" required="" class="form-control" placeholder="Seller Name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                    <ul class="parsley-errors-list filled">
                                      <li class="parsley-required">{{ $errors->first('name') }}.</li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Email<span class="text-danger">*</span></label>
                                <div class="col-7">
                                    <input type="email" name="email" required="" class="form-control" placeholder="Seller Email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                    <ul class="parsley-errors-list filled">
                                      <li class="parsley-required">{{ $errors->first('email') }}.</li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Password<span class="text-danger">*</span></label>
                                <div class="col-7">
                                    <input type="password" name="password" required="" class="form-control" placeholder="Set Password">
                                    @if ($errors->has('password'))
                                    <ul class="parsley-errors-list filled">
                                      <li class="parsley-required">{{ $errors->first('password') }}.</li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Confirm Password<span class="text-danger">*</span></label>
                                <div class="col-7">
                                    <input type="password" name="password_confirmation" required="" class="form-control" placeholder="Set Password">
                                    @if ($errors->has('password_confirmation'))
                                    <ul class="parsley-errors-list filled">
                                      <li class="parsley-required">{{ $errors->first('password_confirmation') }}.</li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8 offset-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Register
                                    </button>
                                    <a href="{{url()->previous()}}" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-box -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
