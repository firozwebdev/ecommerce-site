@extends('admin.master') @section('content')

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
                                <li class="breadcrumb-item"><a href="{{route('admin.payment-methods.create')}}">Create Payment Method</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Content Of PaymentMethod </h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h2>{{ Session::get('message') }}</h2>
                    <h4 class="header-title">Manage Menus</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>  Payment Method</th>

                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pay_methods as $data)

                                <tr>
                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->name}}</td>

                                    <td>{{$data->status==1?'Published':'Unpublished'}}</td>
                                    {!! Form::open(['url' => route('admin.payment-methods.destroy',$data->id),'method'=>'DELETE']) !!}


                                    <td>

                                        <a href="{{route('admin.payment-methods.edit',$data->id)}}" class="btn btn-success" title="PaymentMethod Edit">
                                            <span class="fas fa-pen"></span>
                                        </a>
                                        <button type="submit" title="PaymentMethod Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                    </td>
                                    {!! Form::close() !!}


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
