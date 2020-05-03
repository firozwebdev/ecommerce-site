@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Manage Coupon</h4>
                    <h2>{{ Session::get('message') }}</h2>

                    <div class="table-responsive">
                        <table class="table table-striped fixed mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th> Id</th>
                                    <th>Cupon Name</th>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($coupons as $coupon)
                                <tr>
                                    <th scope="row">{{$coupon->id}}</th>

                                    <td>{{$coupon->name}}</td>
                                    <td>{{$coupon->sub_category->name}}</td>
                                    <td>{{$coupon->products->product_name}}</td>
                                    <td>{{$coupon->type==1?'Fixed':'Percenttages'}}</td>

                        {!! Form::open(['url' => route('admin.coupons.destroy',$coupon->id),'method'=>'DELETE']) !!}


                                    <td>

                                        <a href="{{route('admin.coupons.show',$coupon->id)}}" class="btn btn-info" title="Coupon View">
                                            <span class="fas fa-eye"></span>
                                        </a>
                                        <a href="{{route('admin.coupons.edit',$coupon->id)}}" class="btn btn-success" title="Coupon Edit">
                                            <span class="fas fa-pen"></span>
                                        </a>
                                        <button type="submit" title="Coupon Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
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
</div>
@endsection
