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
                                <li class="breadcrumb-item"><a href="#">Manage Menu</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Contact Us</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Contact Us</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>  Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($contacts as $data)
                                <tr>

                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>
                             <td>
                               <a href="{{route('admin.details-contact',$data->id)}}" class="btn btn-info" title="Coupon View">
                                <span class="fas fa-eye"></span>
                                </a></td>



                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            {{$contacts->links()}}
        </div>

    </div>
</div>
</div>

</div>

</div>
@endsection
