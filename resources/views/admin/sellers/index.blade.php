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
                <div class="card-box">
                    <h4 class="header-title"></h4>
                    <a href="{{route('admin.sellers.create')}}" class="btn btn-success waves-effect waves-light">
                        Add New<span class="btn-label-right"><i class="fas fa-plus-circle"></i></span>
                    </a>
                    <div class="table-responsive">
                      <table class="table table-dark mb-0">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Actions</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($roles->users as $user)
                              <tr>
                                  <th scope="row">{{$user->id}}</th>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->status == 1?'Active':'Inactive'}}</td>
                                  <td>
                                    {!! Form::open(['url' => route('admin.sellers.destroy',$user->id),'method'=>'DELETE', 'enctype'=>"multipart/form-data"]) !!}
                                      <a href="{{route('admin.sellers.edit', $user->id)}}" class="btn btn-success btn-rounded waves-effect waves-light">Edit</a>
                                      <button type="submit" class="btn btn-danger btn-rounded waves-effect waves-light">Delete</button>
                                    {!! Form::close() !!}
                                  </td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</div>

</div>

</div>
@endsection
