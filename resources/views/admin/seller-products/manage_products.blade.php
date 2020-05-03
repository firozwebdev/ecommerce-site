@extends('admin.master')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Manage Product</h4>
                    <h2>{{ Session::get('message') }}</h2>

                    <div class="table-responsive">
                        <table class="table table-striped fixed mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach($s_products as $product)

                                <tr>
                                    <th scope="row">{{$product->id}}</th>

                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->status==1?'Published':'Unpublished'}}</td>

                                    <td class="action-column">


                                        <a href="" class="btn btn-info" title="View">
                                            <span class="fas fa-eye"></span>
                                        </a>
                                        {!! Form::open(['url' => route('admin.changedStatus',$product ->id),'method'=>'Post']) !!}

                                        <button type="submit" title="Approved" name="status" value="1" class="btn btn-success" >
                                            <span class="fas fa-check-circle"></span>
                                        </button>

                                        {!! Form::close() !!}

                                        {!! Form::open(['url' => route('admin.products.destroy',$product ->id),'method'=>'DELETE']) !!}

                                        <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                        {!! Form::close() !!}

                                   </td>

                               </tr>
                            @endforeach
                           </tbody>
                      </table>
                   </div>
               </div>
           </div>
           {{$s_products->links()}}
      </div>
   </div>
</div>
</div>

</div>

</div>
@endsection
