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
                                <li class="breadcrumb-item"><a href="#">Customer</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Registered Customers</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title"></h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>

                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th> Phone Number</th>
                                    <th>Home Address</th>
                                    <th>Delievery Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>

                                    <th scope="row">{{$data->id}}</th>


                                  @if($data->image==null)
                                    <td>
                                      <img style="height:100px;width:100px;" src="{{asset('frontEnd/assets/img/avatar_blog.png')}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </td>
                                    @else
                                    <td>
                                        <img style="width:100px;height:100px;" class="rounded-circle avatar-lg img-thumbnail" src="{{asset('uploads/userimages/'.$data->image)}}">
                                    </td>
                                    @endif

                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>{{$data->home_address}}</td>
                                    <td>{{$data->delivery_address}}</td>
                                    <td>
                                      {!! Form::open(['url' => route('admin.customer-delete',$data->id),'method'=>'Post']) !!}

                                      <button type="submit" title="Customers Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                          <span class="fas fa-trash-alt"></span>
                                      </button>
                                    </td>
                                    {!!Form::close()!!}

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            {{$users->links()}}


        </div>

    </div>
</div>
</div>

</div>

</div>

@endsection
