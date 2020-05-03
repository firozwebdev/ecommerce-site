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
                              <li class="breadcrumb-item"><a href="{{route('admin.categories.create')}}">Create Category</a></li>
                          </ol>
                      </div>
                      <h4 class="page-title">Content Of Sub-Categories </h4>
                  </div>
              </div>
          </div>

            <div class="col-lg-12">
                <div class="card-box">
                  <h2>{{ Session::get('message') }}</h2>
                    <h4 class="header-title">Manage Sub-Categories</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th> Sub-Category Name</th>
                                    <th>Menu Name</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($sub_categories as $sub_category)
                                <tr>


                                    <th scope="row">{{$sub_category->id}}</th>
                                    <td>{{$sub_category->name}}</td>
                                    <td>{{$sub_category->menu->name}}</td>
                                    <td>{{$sub_category->category->name}}</td>
                                    <td><img style="border: 1px solid blue;border-radius: 30px 20px;width:100px;" src="{{asset('uploads/SubCategory/'.$sub_category->icon)}}" </td>

                                    <td> {{$sub_category->status==1?'Published':'Unpublished'}}</td>

                                    {!! Form::open(['url' => route('admin.sub-categories.destroy',$sub_category ->id),'method'=>'DELETE']) !!}


                                    <td>

                                        <a href="{{route('admin.sub-categories.edit',$sub_category->id)}}" class="btn btn-success" title="Sub-Category Edit">
                                            <span class="fas fa-pen"></span>
                                        </a>
                                        <button type="submit" title="Sub-Category  Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
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
            {{$sub_categories->links()}}
        </div>

    </div>
</div>
</div>

</div>

</div>
@endsection
