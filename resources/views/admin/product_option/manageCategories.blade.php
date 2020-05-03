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
                        <h4 class="page-title">Content Of Categories</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h2>{{ Session::get('message') }}</h2>
                    <h4 class="header-title">Manage Categories</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th> Category Name</th>
                                    <th>Menu Name</th>
                                    <th>Image</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>

                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->menu->name}}</td>
                                    <td><img style="border: 1px solid blue;border-radius: 30px 20px;width:100px;" src="{{asset('uploads/Categoryimages/'.$category->category_icon)}}" </td>

                                        <td>{{$category->status==1?'Published':'Unpublished'}}</td>
                                        <td>

                                            {!! Form::open(['url' => route('admin.categories.destroy',$category->id),'method'=>'DELETE']) !!}

                                            <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-success" title="Category Edit">
                                                <span class="fas fa-pen"></span>
                                            </a>
                                            <button type="submit" title="Category Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
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
